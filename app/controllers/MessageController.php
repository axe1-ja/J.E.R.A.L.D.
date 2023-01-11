<?php

class MessageController extends Controller
{
    
    public function inbox($interlocutorId)
    {
        //Debugger::dd($interlocutorId);
        $user = User::getUser();
        $messages = User::getUser()->getUserMessages();
        $conv=[];
        $interlocutors=[];
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
        if(!isset($interlocutorId) || $interlocutorId==null || $interlocutorId==''){
            $interlocutorId= reset($interlocutors)->id;
        }

        // get the id of the interlocutor in the conv variable
        $this->view('inbox/index', [
            'page'=>'inbox',
            'thisUser'=>$user,
            'interlocutors'=>$interlocutors,
            'interlocutorId'=>$interlocutorId,
            'conv'=>$conv
        ]);
    }

    public function send() {
        $user = User::getUser();
        $interlocutor= User::findUser('User_id',$_POST['interlocutor']);
        $date = date('y-m-d h:i:s');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database([]);
        }
        $query = "INSERT INTO `messages` (User_Id_send, User_Id_receive, message_Content, message_Datetime) VALUES ('".$user->id."','".$interlocutor->id."','".$_POST['message']."','".$date."');";
        $statement = $db->pdo->prepare($query);
        $statement->execute();

        header('Location: http://localhost:8888/public/admin/inbox');
    }


}