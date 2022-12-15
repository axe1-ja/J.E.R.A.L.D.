<?php


class User {
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


    public function __construct($nom, $prenom, $role, $phone, $email, $password, $adress) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->adress = $adress;
    }
    

    public static function getUser($email) {
        
        $db = new Database([]);
        
        $query = "SELECT * FROM `users` WHERE User_email = '".$email."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $user = new User(
            $result["User_nom"], 
            $result["User_Prenom"], 
            $result["user_role"], 
            $result["User_phone"], 
            $result["User_email"], 
            null, 
            $result["User_address"],
        );
        $user->dob=$result["User_DOB"];
        $user->height=$result["User_height"];
        $user->weight=$result["User_Weight"];

        return $user;

    }
}