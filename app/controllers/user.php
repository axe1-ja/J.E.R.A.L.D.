<?php

class User extends Controller
{
    public function index()
    {
        $this->view('user/index');
    }
        
    public function profile()
    {
        $this->view('user/profile');
    }

    public function cardio()
    {
        $this->view('user/cardio'); 
    }
    public function fall()
    {
        $this->view('user/fall'); 
    }
    public function sound()
    {
        $this->view('user/sound'); 
    }
    public function temperature()
    {
        $this->view('user/temperature'); 
    }
    public function environment()
    {
        $this->view('user/environment'); 
    }

}