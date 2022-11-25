<?php


class User {
    public $nom;
    public $prenom;
    public $role;
    public $phone;
    public $email;
    public $password;
    public $adress;
    public $devices;


    public function __construct($nom, $prenom, $role, $phone, $email, $password, $adress) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->adress = $adress;
    }
}