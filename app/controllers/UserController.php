<?php


class UserController extends Controller
{
    public function index()
    {
        $this->view('user/index');
    }

    public function update()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database([]);
        }
        $query="UPDATE `users` SET `User_Prenom`='".$_POST['prenom']."',`User_nom`='".$_POST['nom']."',`User_DOB`='".$_POST['dob']."',`User_phone`='".$_POST['phone']."',`User_email`='".$_POST['email']."',`User_address`='".$_POST['adress']."',`User_height`='".$_POST['height']."',`User_Weight`='".$_POST['weight']."' WHERE `User_email`='".$_SESSION["user"]->email."';";
        
        //Debugger::dd($query);
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $user = User::getUser($_SESSION["user"]->email);

        $this->view('user/profile', [
            'user'=>$user,
        ]);

        header("Location: /user/profile");
    }

    public function profile()
    {
        $user = User::getUser($_SESSION["user"]->email);

        $this->view('user/profile', [
            'user'=>$user,
        ]);
    }

    public function edit_profile()
    {
        $user = User::getUser($_SESSION["user"]->email);

        $this->view('user/edit_profile', [
            'user'=>$user,
        ]);
    }

    public function edit_proches()
    {
        $this->view('user/edit_proches');
    }

    public function cardio()
    {
        $this->view('user/cardio'); 
    }
    public function fall()
    {
        $this->view('user/fall'); 
    }
    public function sound()
    {
        $this->view('user/sound'); 
    }
    public function temperature()
    {
        $this->view('user/temperature'); 
    }
    public function environment()
    {
        $this->view('user/environment'); 
    }
    
    public function forum($model='forum')
    {

        if($model=='forum'){
            $data = Forum::getforumAll();
            $page = [Forum::getforumPageAll()];
        
        }elseif($page >= 2){
            for ($forumpage = 2; $forumpage <= ceil($page[0]/10); $forumpage ++) {
                $model =='forum_p'+$forumpage;
                $data = Forum::getforumAll();
                $page = [Forum::getforumPageAll()];
            }
        }elseif($model=='forum1'){
            $data = Forum::getforumType1();
            $page = [Forum::getforumPageType1()];
        } 
        elseif($model=='forum2'){
            $data = Forum::getforumType2();
            $page = [Forum::getforumPageType2()];
        } 
        $this->view('user/forum', [
            'model'=>$model,
            'data'=>$data,
            'page'=>$page
        ]);
    }
    public function newforum(){
        $this->view('user/forum_new');
    }
    public function practice()
    {
        $this->view('user/practice'); 
    }
    
}