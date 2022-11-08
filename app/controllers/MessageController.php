<?php

class MessageController extends Controller
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
        $interlocutors = [$user];
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
        //$conversations= [new Conversation(1,$admin->id,$user->id, '10/28/2022 - 11:03')];
        foreach (range(0, 5) as $number) {
            if($number%2==0) {
                $messages[] = new Message($number,$user->id,"this is the message number ".$number, '10/28/2022 - 11:'.$number.'3');
            }else {
                $messages[] = new Message($number,$admin->id,"this is the message number ".$number, '10/28/2022 - 11:'.$number.'3');
            }
        }

        $sql = "SELECT * FROM messages WHERE user_id = ".$admin->id.";";
        $query = $pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);  
            foreach ($result as $row) { 
                //print_r($row);
                $messages[] = new Message($row['message_id'],$row['User_id'],$row['content'],$row['created_at']);
            }
        //print_r($stmt);
        //exit();
        //print_r($messages);
        $this->view('inbox/index', [
            'page'=>'inbox',
            'thisUser'=>$thisUser,
            'interlocutors'=>$interlocutors,
            'messages'=>$messages
        ]);
    }

    public function send() {
        // connect to database
        $dsn = 'mysql:host=localhost;port=3306;dbname=jeraldb_master';
        $user = 'root';
        $password = '';
        // create an instance of the PDO (to connect to the database)
        $pdo = new \PDO($dsn, $user, $password);
        $admin = new User(1, 'adminUser', 'admin', '06 21315350', 'email@example.mail');
        $user = new User(2,'userUser' ,'user', '06 5461384', 'userEmail2@example.mail');

        $newMessage = new Message(6,$admin->id,$_POST['message'], '12/28/2022 - 18:33');
        $sql = "INSERT INTO messages (content, User_id) VALUES ('".$newMessage->content."',".$newMessage->user_id.");";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
        //print_r($sql);
        //exit();
        header('Location: http://localhost:8888/public/admin/inbox');
    }


}