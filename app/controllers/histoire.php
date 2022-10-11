<?php

class Histoire extends Controller
{
    public function index($name='')
    {
        $this->view('histoire/index', []);
    }
}