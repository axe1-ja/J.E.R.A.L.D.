<?php


class Forum extends Model{
    public $id;
    public $object;
    public $content;
    public $datetime;
    public $User_id;


    public static function getAllForums() {
        
        $db = new Database();
        $forums=[];

        $query = "SELECT * FROM `forum` ORDER BY `forum`.`forum_datetime` DESC;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $r) {
            $forums[]=new Forum([
                'id'=>$r['forum_id'], 
                'object'=>$r['forum_object'], 
                'content'=>$r['forum_content'], 
                'datetime'=>$r['forum_datetime'], 
                'User_id'=>$r['User_id']
            ]);
        }

        return $forums;

    }

    public static function getforumAll() {
        
        $db = new Database();
        
        $query = "SELECT * FROM `Forum` ;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public static function getforumType1() {
        
        $db = new Database();
        
        $query = "SELECT * FROM `Forum` WHERE forum_type = '1';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function getforumType2() {
        
        $db = new Database();
        
        $query = "SELECT * FROM `Forum` WHERE forum_type = '2';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function getforumPageAll() {
        
        $db = new Database();
        $query = "SELECT count(*) FROM `Forum`;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $result = $result['count(*)'];
        return $result;
    }
    public static function getforumPageType1() {
        
        $db = new Database();
        $query = "SELECT count(*) FROM `Forum` WHERE forum_type = '1';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $result = $result['count(*)'];

        return $result;
    }
    public static function getforumPageType2() {
        
        $db = new Database();
        $query = "SELECT count(*) FROM `Forum` WHERE forum_type = '2';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $result = $result['count(*)'];

        return $result;
    }

    public static function getForum($by, $val) {
        $db = new Database();
        $forums=[];

        $query = "SELECT * FROM `forum` WHERE ".$by." = '".$val."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $r=$statement->fetchAll(PDO::FETCH_ASSOC)[0];

        $forum=new Forum([
            'id'=>$r['forum_id'], 
            'object'=>$r['forum_object'], 
            'content'=>$r['forum_content'], 
            'datetime'=>$r['forum_datetime'], 
            'User_id'=>$r['User_id']
        ]);

        return $forum;
    }

    public function getUser() {

        $db = new Database();
        $query = "SELECT * FROM `users` WHERE User_id = '".$this->User_id."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        
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
            'deleted'=>$r["user_deleted"]
        ]);
        
        return $user;
    }
}