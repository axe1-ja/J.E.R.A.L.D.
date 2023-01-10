<?php

class Message {
    public $id;
    public $user_id_send;
    public $user_id_receive;
    public $message_content;
    public $message_datetime;


    
    public function __construct($id, $user_id_send, $user_id_receive, $message_content, $message_datetime)
    {
        $this->id = $id;
        $this->user_id_send = $user_id_send;
        $this->user_id_receive = $user_id_receive;
        $this->message_content = $message_content;
        $this->message_datetime = $message_datetime;
        
        return $this;
    }


    
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