<?php

class EmergencyContact {
    protected $id;
    public $name;
    public $phone;

    public function __construct($id=0, $name, $phone) {
        $this->id=$id;
        $this->name=$name;
        $this->phone=$phone;
    }

}