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
    public $deleted;

    

    public static function getUser() {
        $user=$_SESSION['user'];
        $user = User::findUser('User_email',$user->email);
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
                'adress'=>$r["User_address"],
                'deleted'=>$r["user_deleted"]
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
        if(isset($result[0])){
            $result=$result[0];
            $user = new User([
                'id'=>$result["User_id"], 
                'nom'=>$result["User_nom"], 
                'prenom'=>$result["User_Prenom"], 
                'role'=>$result["user_role"], 
                'phone'=>$result["User_phone"], 
                'email'=>$result["User_email"], 
                'password'=>'', 
                'adress'=>$result["User_address"],
                'dob'=>$result["User_DOB"] ?? '',
                'height'=>$result["User_height"] ?? '',
                'weight'=>$result["User_height"] ?? '',
                'deleted'=>$result["user_deleted"] ?? '',
            ]);

            return $user;
        } else {
            return false;
        }
    }

    public function getUserMessages() {
        $db = new Database();

        $query = "SELECT * FROM `messages` WHERE User_Id_send=".$this->id." OR User_Id_receive=".$this->id.";";

        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        if(count($result)!=0){
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
        } else {
            return false;
        }

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
        $eC=[];
        foreach($result as $r){
            $eC[]=new EmergencyContact([
                'id'=>$r['Emergency_id'], 
                'name'=>$r['Emergency_Name'], 
                'phone'=>$r['Emergency_Number']
            ]);
        }
        
        return $eC;

    }

    public static function checkDeleted($uid) {
        $db = new Database();

        $query = "SELECT * FROM `users` WHERE User_id=".$uid.";";

        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC)[0];
        if($result['user_deleted']==0 || $result['user_deleted']==''){
            return false;
        } else {
            return true;
        }
    }

    public static function checkVerified($uid) {
        $db = new Database();

        $query = "SELECT * FROM `users` WHERE User_id=".$uid.";";

        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC)[0];
        if($result['user_verified']==0 || $result['user_verified']==''){
            return false;
        } else {
            return true;
        }
    }

}