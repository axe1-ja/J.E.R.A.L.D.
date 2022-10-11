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

}