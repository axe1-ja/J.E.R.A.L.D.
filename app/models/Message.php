<?php

class Message extends Model{
    public $id;
    public $user_id_send;
    public $user_id_receive;
    public $message_content;
    public $message_datetime;


    
    // ------------ Functions to get the data from database --------- //

    // to get the user associated to the message
    public function user($pdo) 
    {
        $SQL = "SELECT * FROM users WHERE User_id=".$this->user_id.";";
        $query = $pdo->prepare($SQL);
        $query->execute();
        return $query;
    }

    // to get the conversation associated to the message
    public function conversation($pdo) 
    {
        $SQL = "SELECT * FROM conversations WHERE conversation_id=".$this->conversation_id.";";
        $query = $pdo->prepare($SQL);
        $query->execute();
        return $query;
    }

}