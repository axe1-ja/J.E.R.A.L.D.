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
    
    public function store()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database([]);
        }
        $user = new User($_POST["nom"], $_POST["prenom"], "utilisateur", $_POST["phone"], $_POST["email"], hash('sha1', $_POST["password"]), $_POST["adress"]);
        $query = "INSERT INTO users (User_nom, User_Prenom, User_email, User_phone, User_address, User_password) VALUES ('".$user->nom."', '".$user->prenom."', '".$user->email."', '".$user->phone."', '".$user->adress."', '".$user->password."')";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        //$db->pdo;

        $this->view('authentification/index', []);

    }


    public function loginaction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $db = new Database([]);
        }

        $password = hash('sha1', $_POST["password"]);
        
        $query = "SELECT * FROM `users` WHERE User_email = '".$_POST["email"]."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $hash = $result["User_password"];

        if ($password == $hash) {
            if (isset($result["User_role"])) {
                $role = $result["User_role"];
            } else {
                $role= "utilisateur";
            }
            $user = new User($result["User_nom"], $result["User_prenom"], $role, $result["User_phone"], $result["User_email"], hash('sha1', $result["User_password"]), $result["User_adress"]);
            $this->view('home', []);

        } else {

            return $this->view('authentification/index', [
                'erreur' => "Votre email ou votre mot de passe est incorrect !",
            ]);
            

        }

    }
    
    public function logout()
    {
        $this->view('authentification/logout', []);
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