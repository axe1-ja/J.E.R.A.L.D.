<?php

class Contact extends Controller
{
    public function index($name='')
    {
        $this->view('contact/index', []);
    }

}