<?php

class ContactController extends Controller
{

    public function report()
    {
        //if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //    $db = new Database([]);
        //}
        ini_set('SMTP', "localhost");
        ini_set('smtp_port', "25");
        ini_set('sendmail_from', "jeraldekai@gmail.com");


        $to = "jeraldekai@gmail.com";
        $subject = "Requête de : ".$_POST['nomprenom'].", contact: ".$_POST['email'];
        $message = "
        <html>
        <head>
          <title>Review Request Reminder</title>
        </head>
        <body>
            ".$_POST['message']."
        </body>
        </html>";
        $from = $_POST['email'];
        $headers = "From:" . $from;


        //print_r($_POST);
        //print_r($to);
        //echo '<br>';
        //print_r($subject);
        //echo '<br>';
        //print_r($message);
        //echo '<br>';
        //print_r($headers);
        //echo '<br>';
        //exit;


        //mail($to,$subject,$message,$headers);


        //exit;

        //$query = "";
        //$statement = $db->pdo->prepare($query);
        //$statement->execute();
        return $this->view('home');
    }

}