<?php

class ConversationController extends Controller
{
    
    public function inbox($from)
    {
        // connect to database
        $dsn = 'mysql:host=localhost;port=3306;dbname=jeraldb_master';
        $user = 'root';
        $password = '';
        // create an instance of the PDO (to connect to the database)
        
        $pdo = new \PDO($dsn, $user, $password);
        $admin = new User(1, 'adminUser', 'admin', '06 21315350', 'email@example.mail');
        $user = new User(2,'userUser' ,'user', '06 5461384', 'userEmail2@example.mail');
        $thisUser = $admin;
            // if it is the admin inbox, get the conversations that have the admin's id (admin can delete conversations)
        /*if($from == 'admin'){
            $query = $pdo->prepare("SELECT * FROM conversations WHERE admin_id=".$admin->id.";");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);  
            foreach ($result as $row) { 
                $conversations[] = new Conversation($row);
            }

            // otherwise, get the conversations that the user has with admins 
        } elseif($from == 'user'){
            $query = $pdo->prepare("SELECT * FROM conversations WHERE user_id=".$user->id.";");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);  
            foreach ($result as $row) { 
                $conversations[] = new Conversation($row);
            }
        }*/
        $conversations= [new Conversation(1,$admin->id,$user->id, '10/28/2022 - 11:03')];
        foreach (range(0, 5) as $number) {
            if($number%2==0) {
                $messages[] = new Message($number,1,$user->id,"this is the message number ".$number, '10/28/2022 - 11:'.$number.'3');
            }else {
                $messages[] = new Message($number,1,$admin->id,"this is the message number ".$number, '10/28/2022 - 11:'.$number.'3');
            }
        }

        //print_r($messages);
        $this->view('inbox/index', [
            'page'=>'inbox',
            'thisUser'=>$thisUser,
            'conversations'=>$conversations,
            'messages'=>$messages
        ]);
    }

}