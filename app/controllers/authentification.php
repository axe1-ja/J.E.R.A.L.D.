<?php

class Authentification extends Controller
{
    public function index()
    {
        self::view('authentification/index', []);
    }

    public function create()
    {
        self::view('authentification/create', []);
    }


}