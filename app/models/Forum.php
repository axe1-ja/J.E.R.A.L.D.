<?php


class Forum {
    public $Forum_id;
    public $Forum_type;
    public $Forum_object;
    public $Forum_content;
    public $Forum_datetime;
    public $User_id;


    public function __construct($Forum_id, $Forum_type, $Forum_object, $Forum_content, $Forum_datetime, $User_id) 
    {
        $this->Forum_id = $Forum_id;
        $this->Forum_type = $Forum_type;
        $this->Forum_object = $Forum_object;
        $this->Forum_content = $Forum_content;
        $this->Forum_datetime = $Forum_datetime;
        $this->User_id = $User_id;

        return $this;
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
        
        $query = "SELECT * FROM `Forum` WHERE Forum_type = '1';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function getforumType2() {
        
        $db = new Database([]);
        
        $query = "SELECT * FROM `Forum` WHERE Forum_type = '2';";
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
        $query = "SELECT count(*) FROM `Forum` WHERE Forum_type = '1';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $result = $result['count(*)'];

        return $result;
    }
    public static function getforumPageType2() {
        
        $db = new Database([]);
        $query = "SELECT count(*) FROM `Forum` WHERE Forum_type = '2';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $result[0];
        $result = $result['count(*)'];

        return $result;
    }
}