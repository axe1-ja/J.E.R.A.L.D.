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
        $this->view('authentification/login-action', []);

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