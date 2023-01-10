<?php


class User {
    public $id;
    public $nom;
    public $prenom;
    public $role;
    public $phone;
    public $email;
    public $password;
    public $adress;
    public $dob;
    public $height;
    public $weight;
    public $devices;


    public function __construct($id=0, $nom, $prenom, $role, $phone, $email, $password='', $adress) 
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->adress = $adress;
    }
    

    public static function getUser() {
        $user=$_SESSION['user'];
        return $user;
    }

    public static function findUser($from,$var) {
        $db = new Database([]);

        $query = "SELECT * FROM `users` WHERE ".$from."='".$var."';";

        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result=$result[0];
        $user = new User($result["User_id"], $result["User_nom"], $result["User_Prenom"], $role, $result["User_phone"], $result["User_email"], '', $result["User_address"]);

        return $user;
    }

    public function getUserMessages() {
        $db = new Database([]);

        $query = "SELECT * FROM `messages` WHERE User_Id_send=".$this->id." OR User_Id_receive=".$this->id.";";

        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $r){
            $messages[]=new Message($r['message_id'], $r['User_Id_send'], $r['User_Id_receive'], $r['message_Content'], $r['message_Datetime']);
        }
        return $messages;

    }

}