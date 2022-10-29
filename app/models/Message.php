<?php

class Message {
    public $id;
    public Conversation $conversation;
    public $user_id;
    public $content;
    protected $dateTime;


    
    public function __construct($id, $conversation, $user_id, $content, $created_at)
    {
        $this->id = $id;
        $this->cnversation = $conversation;
        $this->user_id = $user_id;
        $this->content = $content;
        $this->created_at = $created_at;
        
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