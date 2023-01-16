<?php


class ForumMessage {
    public $id;
    public $content;
    public $datetime;
    public $User_id;
    public $forum_id;


    public function __construct($id, $content, $datetime, $User_id, $forum_id) 
    {
        $this->id = $id;
        $this->content = $content;
        $this->datetime = $datetime;
        $this->User_id = $User_id;
        $this->forum_id = $forum_id;

        return $this;
    }
    

    public static function getForumMessages($forum_id) {
        
        $db = new Database([]);
        $forum_messages=[];

        $query = "SELECT * FROM `forum_messages` WHERE `forum_id`=".$forum_id." ORDER BY `forum_messages`.`forum_message_datetime` DESC;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $r) {
            $forum_messages[]=new ForumMessage($r['forum_message_id'], $r['forum_message_content'], $r['forum_message_datetime'], $r['User_id'], $r['forum_id']);
        }

        return $forum_messages;

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