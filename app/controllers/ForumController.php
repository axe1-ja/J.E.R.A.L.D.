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