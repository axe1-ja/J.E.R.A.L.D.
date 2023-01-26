<?php



class RecoveryCodeController extends Controller
{
    public static function sendRecoveryEmail($id,$email,$name,$code) {
        
        require realpath(dirname(__DIR__,1).'/../vendor/phpmailer/phpmailer/src/Exception.php');
        require realpath(dirname(__DIR__,1).'/../vendor/phpmailer/phpmailer/src/PHPMailer.php');
        require realpath(dirname(__DIR__,1).'/../vendor/phpmailer/phpmailer/src/SMTP.php');

        if(!RecoveryCodeController::alreadySent($code,$id)){
            
            RecoveryCodeController::store($code,$id);

            // @ts-ignore
            $mail = new PHPMailer\PHPMailer\PHPMailer();                // @ignore
            
            try {
                $mail->SMTPDebug = 0;                                       
                $mail->isSMTP();                                            
                $mail->Host       = 'ssl0.ovh.net;';                 
                $mail->SMTPAuth   = true;                             
                $mail->Username   = 'postmaster@captair.paris';               
                $mail->Password   = '8VHg2$v*25S%Cs3';
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = 465;
            
                $mail->setFrom('noreply@jeraldekai.life', 'ekai noreply');
                $mail->addAddress($email);
                
                $mail->isHTML(true);                                  
                $mail->Subject = "J.E.R.A.L.D. - Ekai : Demande de changement de mot de passe";
                $mail->Body    ='  <div style="width:100%;background-color:#1319c0;padding:10px">
                                        <br>
                                        <div style="text-align:center;color:white">
                                            <h1>Ekai</h1>
                                        </div>
                                        <p><br></p>
                                        <div style="border-radius:7px;background-color:white;margin:0 auto;padding:20px;width:100%;max-width:50rem">
                                            <h2>Message: </h2>
                                            <h4>Changement du mot de passe de votre compte EKAI</h4>

                                            <h5>Nom et prénom: '.$name.'</h5>
                                            <h5>Votre addresse email: '.$email.'</h5>
                                            <br>
                                            <h5>Entrez le code suivant dans le champ de texte dédié:</h5>
                                            <h3>'.$code.'</h3>
                                            <h6><em>Ce code est valable pendant 1 jour</em></h6>
                                        </div>
                                        <p><br></p>
                                    </div>';

                $mail->AltBody = 'Cet e-mail est une réponse à votre demande de changement de mot de passe. Entrez le code suivant dans le champ de texte dédié '.$code;
                $mail->send();
                return "L'email avec le code de récupération de mot de passe a bien été envoyé";
            } catch (Exception $e) {

                return "L'email n'a pas été envoyé. Erreur: {$mail->ErrorInfo}";
            }

        } else {
            return "L'email avec le code de récupération de mot de passe vous a déjà été envoyé";
        }
    }

    public static function store($code,$uid) {
        $db = new Database();
        $query = "INSERT INTO `RecoveryCode` (recoverycode_code, User_id, RecoveryCode_datetime) VALUES ('".$code."', '".$uid."','".date('Y-m-d h:m:s')."');";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
    }
    
    public static function alreadySent($code,$uid) {
        $db = new Database();

        $query = "SELECT * FROM `RecoveryCode` WHERE `User_id`='".$uid."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        if(isset($result[0])){
            $result = $result[0];
            $dateRec = substr($result['RecoveryCode_datetime'],0,10);
            $date = date('Y-m-d');
            if($date==$dateRec) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function getRecoveryCode($uid) {

        $db = new Database();

        $query = "SELECT * FROM `RecoveryCode` WHERE `User_id`='".$uid."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        if(isset($result[0])){
            $result = $result[0];
            $dateRec = substr($result['RecoveryCode_datetime'],0,10);
            $date = date('Y-m-d');
            if($date==$dateRec) {
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}