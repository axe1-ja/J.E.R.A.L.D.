<?php
require realpath(dirname(__DIR__,1) .'../../vendor/phpmailer/phpmailer/src/Exception.php');
require realpath(dirname(__DIR__,1) .'../../vendor/phpmailer/phpmailer/src/PHPMailer.php');
require realpath(dirname(__DIR__,1) .'../../vendor/phpmailer/phpmailer/src/SMTP.php');
        
class ContactController extends Controller
{

    public function report()
    {
        //if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //    $db = new Database();
        //}
        /*ini_set('SMTP', "82.64.120.113");
        ini_set('smtp_port', "25");
        ini_set('sendmail_from', "jeraldekai@gmail.com");*/

        // @ts-ignore
        $mail = new PHPMailer\PHPMailer\PHPMailer();                // @ignore
        /*$to = "jeraldekai@gmail.com";
        $subject = "Requête de : ".$_POST['nomprenom'].", contact: ".$_POST['email'];
        $message = "
          <h5>Review Request Reminder</h5>
          ".$_POST['message']."";
        $headers = "From:".$_POST['email']."\r\n".'MIME-Version: 1.0'."\r\n".'Content-type: text/html;charset=utf-8';*/
  
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
            $mail->addAddress('jeraldekai@gmail.com');
            
            $mail->isHTML(true);                                  
            $mail->Subject = "Requete de : ".$_POST['nomprenom'].", contact: ".$_POST['email'];
            $mail->Body    = '  <div style="width:100%;background-color:#1319c0;padding:10px">
                                    <br>
                                    <div style="text-align:center;color:white">
                                        <h1>Ekai</h1>
                                    </div>
                                    <p><br></p>
                                    <div style="border-radius:7px;background-color:white;margin:0 auto;padding:20px;width:100%;max-width:50rem">
                                        <h2>Message: </h2>
                                        <h4>'.$_POST['message'].'</h4>

                                        <h5>Nom et prénom: '.$_POST['nomprenom'].'</h5>
                                        <h5>Addresse email: '.$_POST['email'].'</h5>
                                    </div>
                                    <p><br></p>
                                </div>';

            $mail->AltBody = "Message: ".$_POST['message'];
            $mail->send();
            
            $this->view('contact', [
                "msg"=>"Mail has been sent successfully!",
            ]);
        } catch (Exception $e) {
            $this->view('contact', [
                "error"=>"Message could not be sent. Mailer Error: {$mail->ErrorInfo}",
            ]);
        }
        /*
        if(mail($to,$subject,$message,$headers)) {
            dd('success');
            return $this->view('home');
        } else {
            dd("Email not sent, problem with smtp server");
            exit;
        };*/

    }

}