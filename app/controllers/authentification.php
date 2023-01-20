<?php

class Authentification extends Controller
{
    public function index()
    {
        $this->view('authentification/index', []);
    }

    public function create()
    {
        $this->view('authentification/create', []);
    }
    public function create_failed()
    {
        $this->view('authentification/create', [
            'error'=>'Cet email est déjà associé à un compte',
        ]);
    }
    
    public function store()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database();
        }

        $exsistingUser = User::findUser('User_email',$_POST['email']);
        if(!isset($exsistingUser->email)){
            $user = new User([
                'id'=>0,
                'nom'=>$_POST["nom"], 
                'prenom'=>$_POST["prenom"], 
                'role'=>"client", 
                'phone'=>$_POST["phone"], 
                'email'=>$_POST["email"], 
                'password'=>hash('sha1', $_POST["password"]), 
                'adress'=>$_POST["adress"]
            ]);
            $query = "INSERT INTO users (User_nom, User_Prenom, User_email, User_phone, User_address, User_password, User_role) VALUES ('".$user->nom."', '".$user->prenom."', '".$user->email."', '".$user->phone."', '".$user->adress."', '".$user->password."','".$user->role."')";
            $statement = $db->pdo->prepare($query);
            $statement->execute();

            header("Location: login");

        } else {

            header("Location: register_failed");

        }

    }


    public function loginaction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database();
        }

        $password = hash('sha1', $_POST["password"]);
        
        $query = "SELECT * FROM `users` WHERE User_email = '".$_POST["email"]."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $hash = $result["User_password"];
        if ($password == $hash) {
            if (isset($result["user_role"])) {
                $role = $result["user_role"];
            } else {
                $role= "client";
            }
            $user = new User([
                'id'=>$result["User_id"], 
                'nom'=>$result["User_nom"], 
                'prenom'=>$result["User_Prenom"], 
                'role'=>$role, 
                'phone'=>$result["User_phone"], 
                'email'=>$result["User_email"], 
                'password'=>hash('sha1', $result["User_password"]), 
                'adress'=>$result["User_address"]
            ]);
            
            $_SESSION['user']=$user;
            $_SESSION['user_id']=$result['User_id'];
            $_SESSION['loggedin']=1;

            header("Location: home");

        } else {

            return $this->view('authentification/index', [
                'erreur' => "Votre email ou votre mot de passe est incorrect !",
            ]);
            

        }

    }
    
    public function logout()
    {
        
        $_SESSION['user']='guest';
        $_SESSION['user_id']=0;
        $_SESSION['loggedin']=0;
        
        header("Location: home");

    }

    public function forgot()
    {
        $this->view('authentification/forgot_password', []);
    }

    public function sendEmail() 
    {
        $this->view('authentification/verify', []);
    }

    public function reset()
    {
        $this->view('authentification/reset_password', []);
    }

}