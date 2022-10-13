<?php

class User extends Controller
{
    public function index()
    {
        self::view('user/index');
    }
        
    public function profile()
    {
        self::view('user/profile');
    }

    public function cardio()
    {
        self::view('user/cardio'); 
    }
    public function fall()
    {
        self::view('user/fall'); 
    }
    public function sound()
    {
        self::view('user/sound'); 
    }
    public function temperature()
    {
        self::view('user/temperature'); 
    }
    public function environment()
    {
        self::view('user/environment'); 
    }

}