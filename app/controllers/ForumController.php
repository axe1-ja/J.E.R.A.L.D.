<?php

class ForumController extends Controller
{
    public function index() {

        $forums = Forum::getAllForums();

        // get all users and use their id as index
        $u = User::getallUsers();
        $users = [];
        foreach($u as $user) {
            $users[$user->id]=$user;
        }
        
        //user
        $user=User::getUser();

        $this->view('user/forum', [
            'forums'=>$forums,
            'users'=>$users,
            'user'=>$user
        ]);
    }

    public function addforum() {

        //user
        $user=User::getUser();

        $date = date('y-m-d h:i:s');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database();
        }

        $query = "INSERT INTO `Forum` (`Forum_object`, `Forum_content`, `Forum_datetime`, `User_id`) VALUES ('".$_POST['forum_object']."','".$_POST['forum_content']."','".$date."','".$user->id."');";
        $statement = $db->pdo->prepare($query);
        $statement->execute();  

        header('Location: /forum');

    }

    public function sendMessageforum() {

        //user
        $user=User::getUser();

        $forum = Forum::getForum('forum_id', $_POST['forum']);
        $date = date('y-m-d h:i:s');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database();
        }
        
        $query = "INSERT INTO `forum_messages`(`forum_message_content`, `forum_message_datetime`, `User_id`, `forum_id`) VALUES ('".$_POST['new_msg']."','".$date."', '".$_POST['user']."', '".$_POST['forum']."');";
        $statement = $db->pdo->prepare($query);
        $statement->execute();  

        header('Location: /forum');

    }


    public function details() {
        // get the forum clicked
        $forum = Forum::getForum('forum_id', $_POST['forum']);

        //get the massages of the forum clicked
        $forumMessages = ForumMessage::getForumMessages($_POST['forum']);

        // get all users and use their id as index
        $u = User::getallUsers();
        $users = [];
        foreach($u as $user) {
            $users[$user->id]=$user;
        }

        //user
        $user=User::getUser();

        // colors for custom display
        $colors = ['primary','secondary','grey','green','red','purple','pink','cyan','skyblue','bloodred'];
        
        $this->view('user/forum_details', [
            'forum'=>$forum,
            'forumMessages'=>$forumMessages,
            'colors'=>$colors,
            'users'=>$users,
            'user'=>$user
        ]);
    }


}