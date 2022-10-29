<?php


class User {
    public $id;
    public $name;
    public $role;
    public $phone;
    public $email;
    public $devices;


    public function __construct($id, $name, $role, $phone, $email) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->role = $role;
        $this->phone = $phone;
        $this->email = $email;
    }
}