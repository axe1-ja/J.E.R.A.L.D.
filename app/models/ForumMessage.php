<?php


class ForumMessage extends Model {
    public $id;
    public $content;
    public $datetime;
    public $User_id;
    public $forum_id;


    

    public static function getForumMessages($forum_id) {
        
        $db = new Database();
        $forum_messages=[];

        $query = "SELECT * FROM `forum_messages` WHERE `forum_id`=".$forum_id." ORDER BY `forum_messages`.`forum_message_datetime` DESC;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $r) {
            $forum_messages[]=new ForumMessage([
                'id'=>$r['forum_message_id'], 
                'content'=>$r['forum_message_content'], 
                'datetime'=>$r['forum_message_datetime'], 
                'User_id'=>$r['User_id'], 
                'forum_id'=>$r['forum_id']
            ]);
        }

        return $forum_messages;

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