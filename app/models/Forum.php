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
        Debugger::dd($result);
        $result = $result[0];
        $Forum = new Forum(
            $result["Forum_id"], 
            $result["Forum_type"], 
            $result["Forum_object"], 
            $result["Forum_content"], 
            $result["Forum_datetime"], 
            $result["User_id"],
        );
        Debugger::dd($Forum);
        return $Forum;
    }
}