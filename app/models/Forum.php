<?php


class Forum {
    public $id;
    public $object;
    public $content;
    public $datetime;
    public $User_id;


    public function __construct($id, $object, $content, $datetime, $User_id) 
    {
        $this->id = $id;
        $this->object = $object;
        $this->content = $content;
        $this->datetime = $datetime;
        $this->User_id = $User_id;

        return $this;
    }
    

    public static function getAllForums() {
        
        $db = new Database([]);
        $forums=[];

        $query = "SELECT * FROM `forum` ORDER BY `forum`.`forum_datetime` DESC;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $r) {
            $forums[]=new Forum($r['forum_id'], $r['forum_object'], $r['forum_content'], $r['forum_datetime'], $r['User_id']);
        }

        return $forums;

    }

    public static function getforumAll() {
        
        $db = new Database([]);
        
        $query = "SELECT * FROM `Forum` ;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public static function getforumType1() {
        
        $db = new Database([]);
        
        $query = "SELECT * FROM `Forum` WHERE forum_type = '1';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function getforumType2() {
        
        $db = new Database([]);
        
        $query = "SELECT * FROM `Forum` WHERE forum_type = '2';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function getforumPageAll() {
        
        $db = new Database([]);
        $query = "SELECT count(*) FROM `Forum`;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $result = $result['count(*)'];
        return $result;
    }
    public static function getforumPageType1() {
        
        $db = new Database([]);
        $query = "SELECT count(*) FROM `Forum` WHERE forum_type = '1';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $result = $result['count(*)'];

        return $result;
    }
    public static function getforumPageType2() {
        
        $db = new Database([]);
        $query = "SELECT count(*) FROM `Forum` WHERE forum_type = '2';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $result = $result['count(*)'];

        return $result;
    }

    public static function getForum($by, $val) {
        $db = new Database([]);
        $forums=[];

        $query = "SELECT * FROM `forum` WHERE ".$by." = '".$val."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $r=$statement->fetchAll(PDO::FETCH_ASSOC)[0];

        $forum=new Forum($r['forum_id'], $r['forum_object'], $r['forum_content'], $r['forum_datetime'], $r['User_id']);

        return $forum;
    }

    public function getUser() {

        $db = new Database([]);
        $query = "SELECT * FROM `users` WHERE User_id = '".$this->User_id."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        
        $user = new User($result["User_id"], $result["User_nom"], $result["User_Prenom"], $r['role'], $result["User_phone"], $result["User_email"], '', $result["User_address"]);

        return $user;
    }
}