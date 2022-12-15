<?php

class Debugger {

    public static function dd($var)
    {
        print_r($var);
        exit;
    }

    
}