<?php



class VerificationController extends Controller
{
    public static function sendVerificationEmail($id,$email,$name) {
        
        require realpath(dirname(__DIR__,1).'/../vendor/phpmailer/phpmailer/src/Exception.php');
        require realpath(dirname(__DIR__,1).'/../vendor/phpmailer/phpmailer/src/PHPMailer.php');
        require realpath(dirname(__DIR__,1).'/../vendor/phpmailer/phpmailer/src/SMTP.php');

        $verifCode1 = sha1($id.$email.$name);
        $verifCode2 = md5(date('Y-m-d h:m:i').$id.'confirmkey');
        $verifCode = str_replace('/', '5', sha1($verifCode2).password_hash(crypt($verifCode1.$verifCode2,'ghjk$dsm2g28d42fdesfjk'.$id.'rlkfg22587efg8'.$name.'confirmkey'.'dvh7d67gf7b6d9fgfd4ds6$'),PASSWORD_DEFAULT).md5('ghjk$dsm2g28d42fdesfjkrlkfg22587efg8dvh7d67gf7b6d9fgfd4ds6$'));

        if(!VerificationController::alreadySent($verifCode,$id)){
            VerificationController::store($verifCode,$id);
            
            // @ts-ignore
            $mail = new PHPMailer\PHPMailer\PHPMailer();                // @ignore
    
            try {
                $mail->SMTPDebug = 0;                                       
                $mail->isSMTP();                                            
                $mail->Host       = 'ssl0.ovh.net;';                 
                $mail->SMTPAuth   = true;                             
                $mail->Username   = 'postmaster@captair.paris';               
                $mail->Password   = 'nw3hkkZPYVQYbG5u';                        
                $mail->SMTPSecure = 'ssl';                               
                $mail->Port       = 465;  
            
                $mail->setFrom('noreply@jeraldekai.life', 'ekai noreply');
                $mail->addAddress($email);
                
                $mail->isHTML(true);                                  
                $mail->Subject = "J.E.R.A.L.D. - Ekai : Verification de votre compte";
                $mail->Body    ='  <div style="width:100%;background-color:#1319c0;padding:10px">
                                        <br>
                                        <div style="text-align:center;color:white">
                                            <h1>Ekai</h1>
                                        </div>
                                        <p><br></p>
                                        <div style="border-radius:7px;background-color:white;margin:0 auto;padding:20px;width:100%;max-width:50rem">
                                            <h2>Message: </h2>
                                            <h4>Vérification de votre email EKAI</h4>

                                            <h5>Nom et prénom: '.$name.'</h5>
                                            <h5>Addresse email: '.$email.'</h5>
                                            <a href="https://www.jeraldekai.life/verify/'.$verifCode.'" style="text-decoration:none">
                                                <button type="submit" style="padding:10px;border-radius: 7px; opacity:0.9;background-color:#1319c0;color:white;border: 1px solid #1319c0;background-color: #1319c0;color:aliceblue;margin:0 auto;">Vérifier votre email</button>
                                            </a>
                                        </div>
                                        <p><br></p>
                                    </div>';

                $mail->AltBody = 'Copiez et collez le lien suivant pour vérifier votre addresse e-mail: https://www.jeraldekai.life/verify/"'.$verifCode;
                $mail->send();
                return "L'email de vérification a bien été envoyé";
            } catch (Exception $e) {
                return "L'email n'a pas été envoyé. Erreur: {$mail->ErrorInfo}";
            }

        } else {
            return "L'email de vérification vous a déjà été envoyé";
        }
    }

    public static function store($code,$uid) {
        $db = new Database();
        $query = "INSERT INTO `verification_codes` (`code`,`User_id`,`verification_datetime`) VALUES ('".$code."','".$uid."','".date('Y-m-d h:m:s')."');";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
    }
    
    public static function alreadySent($code,$uid) {
        $db = new Database();

        $query = "SELECT `verification_datetime` FROM `verification_codes` WHERE  `code`='".$code."'AND `User_id`='".$uid."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        if(isset($result[0])){
            $result = $result[0];
            //dd($result);
            $dateRec = substr($result['verification_datetime'],0,10);
            $date = date('Y-m-d');
            if($date<$dateRec) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function verify($code) 
    {
        $db = new Database();

        $query = "SELECT * FROM `verification_codes` WHERE  `code`='".$code."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        if(isset($result[0])){
            $result = $result[0];
            if($result['code']==$code){
                $query1 = "UPDATE `users` SET `user_verified`=1 WHERE `User_id`='".$result['User_id']."';";
                $statement1 = $db->pdo->prepare($query1);
                $statement1->execute();
                return $this->view('authentification/verify', [
                    'msg' => "Votre email a été vérifié !",
                ]);
            } 
        } else {
            return false;
        }
    }
}