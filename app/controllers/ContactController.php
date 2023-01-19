<?php

class ContactController extends Controller
{

    public function report()
    {
        //if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //    $db = new Database();
        //}
        ini_set('SMTP', "localhost");
        ini_set('smtp_port', "25");
        ini_set('sendmail_from', "jeraldekai@gmail.com");


        $to = "jeraldekai@gmail.com";
        $subject = "Requête de : ".$_POST['nomprenom'].", contact: ".$_POST['email'];
        $message = "
          <h5>Review Request Reminder</h5>
          ".$_POST['message']."";
        $headers = "From:".$_POST['email']."\r\n".'MIME-Version: 1.0'."\r\n".'Content-type: text/html;charset=utf-8';
        

        if(mail($to,$subject,$message,$headers)) {
            return $this->view('home');
        } else {
            print_r("Email not sent, problem with smtp server");
            exit;
        };

    }

}