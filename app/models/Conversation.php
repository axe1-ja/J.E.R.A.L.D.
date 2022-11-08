<?php

class Conversation {
    public $id;
    public $admin_id;
    public $user_id;
    public $created_at;


    public function __construct($id, $admin_id, $user_id, $created_at)
    {
        $this->id = $id;
        $this->admin_id = $admin_id;
        $this->user_id = $user_id;
        $this->created_at = $created_at;
        
        return $this;
    }



    // ------------ Functions to get the data from database ---------- //

    // to get the user associated to the conversation
    public function user($pdo) 
    {
        $SQL = "SELECT * FROM users WHERE User_id=".$this->user_id.";";
        $query = $pdo->prepare($SQL);
        $query->execute();
        return $query;
    }
    

    // to get the admin associated to the conversation
    public function admin($pdo) 
    {
        $SQL = "SELECT * FROM users WHERE User_id=".$this->admin_id.";";
        $query = $pdo->prepare($SQL);
        $query->execute();
        return $query;
    }

    // to get the messages associated to the conversation
    public function messages($pdo) 
    {
        $SQL = "SELECT * FROM messages WHERE conversation_id=".$this->conversation_id.";";
        $query = $pdo->prepare($SQL);
        $query->execute();
        return $query;
    }
}