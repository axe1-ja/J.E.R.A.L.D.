<?php


class User extends Model {
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

    

    public static function getUser() {
        $user=$_SESSION['user'];
        return $user;
    }

    public static function getallUsers() {
        $db = new Database();

        $query = "SELECT * FROM `users`;";
        $users = [];
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $r) {
            $users[] = new User([
                'id'=>$r["User_id"], 
                'nom'=>$r["User_nom"], 
                'prenom'=>$r["User_Prenom"], 
                'role'=>$r["user_role"], 
                'phone'=>$r["User_phone"], 
                'email'=>$r["User_email"], 
                'password'=>'', 
                'adress'=>$r["User_address"]
            ]);
        }

        return $users;
    }

    public static function findUser($from,$var) {
        $db = new Database();

        $query = "SELECT * FROM `users` WHERE ".$from."='".$var."';";

        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result=$result[0];
        $user = new User([
            'id'=>$result["User_id"], 
            'nom'=>$result["User_nom"], 
            'prenom'=>$result["User_Prenom"], 
            'role'=>$result["user_role"], 
            'phone'=>$result["User_phone"], 
            'email'=>$result["User_email"], 
            'password'=>'', 
            'adress'=>$result["User_address"]
        ]);

        return $user;
    }

    public function getUserMessages() {
        $db = new Database();

        $query = "SELECT * FROM `messages` WHERE User_Id_send=".$this->id." OR User_Id_receive=".$this->id.";";

        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $r){
            $messages[]=new Message([
                'id'=>$r['message_id'], 
                'user_id_send'=>$r['User_Id_send'], 
                'user_id_receive'=>$r['User_Id_receive'], 
                'message_content'=>$r['message_Content'], 
                'message_datetime'=>$r['message_Datetime']
            ]);
        }
        
        //dd($messages);
        return $messages;

    }

    public static function conversationWith($interlocId) {
        $db = new Database();
        $user = User::getUser();
        $messages=[];
        $query = "SELECT * FROM `messages` WHERE (User_Id_send=".$user->id." AND User_Id_receive=".$interlocId.") OR (User_Id_receive=".$user->id." AND User_Id_send=".$interlocId.");";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $r){
            $messages[]=new Message([
                'id'=>$r['message_id'], 
                'user_id_send'=>$r['User_Id_send'], 
                'user_id_receive'=>$r['User_Id_receive'], 
                'message_content'=>$r['message_Content'], 
                'message_datetime'=>$r['message_Datetime']
            ]);
        }

        return $messages;

    }

    
    public function getEmergencyContacts() {
        $db = new Database();

        $query = "SELECT * FROM `EmergencyContact` WHERE User_id=".$this->id.";";

        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $r){
            $eC[]=new EmergencyContact([
                'id'=>$r['Emergency_id'], 
                'name'=>$r['Emergency_Name'], 
                'phone'=>$r['Emergency_Number']
            ]);
        }
        
        return $eC;

    }

}