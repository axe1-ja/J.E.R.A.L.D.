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
            $db = new Database();
        }
        $user_id=4;
        $query='';
        if(isset($_POST['bracelet'])){
            $query="INSERT INTO `bracelet`(`bracelet_id`, `User_id`) VALUES ('".$_POST['bracelet']."','".$user_id."');";
        }

        $query=$query."UPDATE `users` SET `User_Prenom`='".$_POST['prenom']."',`User_nom`='".$_POST['nom']."',`User_DOB`='".$_POST['dob']."',`User_phone`='".$_POST['phone']."',`User_email`='".$_POST['email']."',`User_address`='".$_POST['adress']."',`User_height`='".$_POST['height']."',`User_Weight`='".$_POST['weight']."' WHERE `User_email`='".$_SESSION["user"]->email."';";
        
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

        $eC = $user->getEmergencyContacts();

        $this->view('user/profile', [
            'user'=>$user,
            'eC'=>$eC,
        ]);
    }

    public function edit_profile()
    {
        $user = User::getUser($_SESSION["user"]->email);

        
        $db = new Database();
        $query = "SELECT * FROM `bracelet` WHERE User_id = '".$_SESSION["user"]->id."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        if(isset($result[0])) {
            $result = $result[0];
            $bracelet = $result['bracelet_id'];
            
            $this->view('user/edit_profile', [
                'user'=>$user,
                'bracelet'=>$bracelet,
            ]);
        } else {
            $this->view('user/edit_profile', [
                'user'=>$user,
            ]);
        }

        
    }

    //to go to the page to edit/add/remove emergency contact
    public function edit_proches()
    {
        $user = User::getUser($_SESSION["user"]->email);

        $eC = $user->getEmergencyContacts();
        $this->view('user/edit_proches', [
            'user'=>$user,
            'eC'=>$eC,
        ]);
    }
    
    // to add an emergency contact
    public function add_proche()
    {
        $user = $_SESSION["user"];
        
        $db = new Database();
        $query = "INSERT INTO `EmergencyContact` (`Emergency_Name`,`Emergency_Number`,`User_id`) VALUES ('".$_POST['name']."','".$_POST['phone']."','".$user->id."');";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        
        $this->profile();
    }
    
    // to edit emergency contact
    public function update_proche()
    {
        $user = $_SESSION["user"];
        
        $db = new Database();
        $query = "UPDATE `EmergencyContact` SET `Emergency_Name`='".$_POST['name']."',`Emergency_Number`='".$_POST['phone']."' WHERE `Emergency_id`=".$_POST['id']." ;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();

        $this->profile();
    }

    // to delete emergency contact
    public function delete_proche()
    {
        $user = $_SESSION["user"];
        $db = new Database();
        $query = "DELETE FROM `EmergencyContact` WHERE `Emergency_id`=".$_POST['id']." ;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();

        $this->profile();
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
            $data= array_slice($data,0,10);
            $page = [Forum::getforumPageAll()];
        
        }elseif($model=='forum1'){
            $data = Forum::getforumType1();
            $page = [Forum::getforumPageType1()];
        }elseif($model=='forum2'){
            $data = Forum::getforumType2();
            $page = [Forum::getforumPageType2()];
        }else{
            $model = substr($model, 7);
            $data = Forum::getforumAll();
            $data= array_slice($data,($model-1)*10,($model-1)*10+10);
            $page = [Forum::getforumPageAll()];

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