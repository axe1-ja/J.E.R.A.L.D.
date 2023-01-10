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
    
    public function forum($model='forum') # $page 추가하기
    {
        

        if($model=='forum'){
            $Forums = Forum::getforumAll();
        }elseif($model=='forum_p2'){
            $ForumsPage = Forum::getforumPageAll();
        }elseif($model=='forum_p3'){
            $ForumsPage = Forum::getforumPageType1();
            $ForumsPage = Forum::getforumPageType2();

        }elseif($model=='forum1'){
            $ForumsType1 = Forum::getforumType1();
        } elseif($model=='forum2'){
            $ForumsType2 = Forum::getforumType2();
        } 

        $this->view('user/forum', [
            'model'=>$model,
            'data'=>$data
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