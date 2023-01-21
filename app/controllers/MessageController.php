<?php

class MessageController extends Controller
{
    
    public function inbox($interlocutorId)
    {
        if( $_SERVER['REQUEST_METHOD'] == 'POST' && count(User::conversationWith($_POST['userChosen']))==0 ){ 
            $interlocutorId = $this->add();
        }

        $user = User::getUser();
        $messages = User::getUser()->getUserMessages();
        
        foreach(User::getAllUsers() as $u) {
            if($u->id!=$user->id && $u->id!=$interlocutorId){
                $allUsers[] = $u;
            }
        }


        $conv=[];
        $interlocutors=[]; 

        if($messages !=false){
            foreach ($messages as $message) {
                if($message->user_id_send==$user->id) {
                    $conv[$message->user_id_receive][]=$message;
                    if(!isset($interlocutors[$message->user_id_receive])){
                        $interlocutors[$message->user_id_receive]=User::findUser('User_id',$message->user_id_receive);
                    }
                }elseif ($message->user_id_receive==$user->id) {
                    $conv[$message->user_id_send][]=$message;
                    if(!isset($interlocutors[$message->user_id_send])){
                        $interlocutors[$message->user_id_send]=User::findUser('User_id',$message->user_id_send);
                    }
                }
            }
        } else {
            $interlocutors=[];
        }

        if(count($interlocutors)==0) {
            $interlocutorId;
        } elseif(!isset($interlocutorId) || $interlocutorId==null || $interlocutorId==''){
            $interlocutorId= reset($interlocutors)->id;
        }

        
        // get the id of the interlocutor in the conv variable
        $this->view('inbox/index', [
            'page'=>'inbox',
            'thisUser'=>$user,
            'interlocutors'=>$interlocutors,
            'interlocutorId'=>$interlocutorId,
            'conv'=>$conv,
            'allUsers'=>$allUsers,
        ]);
    }

    public function send() {
        $user = User::getUser();
        $interlocutor= User::findUser('User_id',$_POST['interlocutor']);
        $date = date('y-m-d h:i:s');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database();
        }
        $query = "INSERT INTO `messages` (User_Id_send, User_Id_receive, message_Content, message_Datetime) VALUES ('".$user->id."','".$interlocutor->id."','".$_POST['subject']."','".$date."');";
        $statement = $db->pdo->prepare($query);
        $statement->execute();

        header('Location: /admin/inbox');
    }

    public function add() {
        $user = User::getUser();
        $interlocutor= User::findUser('User_id',$_POST['userChosen']);
        $date = date('y-m-d h:i:s');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database();
        }

        $query = "INSERT INTO `messages` (User_Id_send, User_Id_receive, message_Content, message_Datetime) VALUES ('".$user->id."','".$interlocutor->id."','".$_POST['msg']."','".$date."');";
        $statement = $db->pdo->prepare($query);
        $statement->execute();

        return $interlocutor->id;
    }

}