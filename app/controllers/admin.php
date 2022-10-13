<?php

class Admin extends Controller
{
    public function index()
    {
        self::view('admin/index', [
            'page'=>'dashboard'
        ]);
    }

    public function datama($model='users')
    {
        if($model=='users'){
            $data=[
                ['1','Mark','Otto','06XXXXX','markotto@gmail.com','06XXXXX'],
                ['2','Jacob','Thornton','06XXXXX','j.thorn@gmail.com','06XXXXX'],
                ['3','Larry','Byrd','06XXXXX','lbyrdee@gmail.com','06XXXXX'],
                ['4','Michel','Laroux','06XXXXX','mlaroue015@gmail.com','06XXXXX'],
                ['5','Axel','Ja','06XXXXX','aja@gmail.com','06XXXXX'],
                ['6','Joon','Yoo','06XXXXX','hyjoon@gmail.com','06XXXXX'],
                ['7','Elena','Charpentier','06XXXXX','echarpentier@gmail.com','06XXXXX'],
                ['8','Diane','Dinh','06XXXXX','ddinh@gmail.com','06XXXXX'],
                ['9','Leonard','Gendrel','06XXXXX','lgendr@gmail.com','06XXXXX'],
                ['10','Romain','Parreira','06XXXXX','r.parreiragonc@gmail.com','06XXXXX'],
            ];
        } elseif($model=='products'){
            $data=[
                ['1','Mark','Otto','06XXXXX','markotto@gmail.com','06XXXXX'],
                ['2','Jacob','Thornton','06XXXXX','j.thorn@gmail.com','06XXXXX'],
                ['3','Larry','Byrd','06XXXXX','lbyrdee@gmail.com','06XXXXX'],
                ['4','Michel','Laroux','06XXXXX','mlaroue015@gmail.com','06XXXXX'],
            ];
        } elseif($model=='forum'){
            $data=[
                ['1','Mark','Otto','06XXXXX','markotto@gmail.com','06XXXXX'],
                ['2','Jacob','Thornton','06XXXXX','j.thorn@gmail.com','06XXXXX'],
                ['3','Larry','Byrd','06XXXXX','lbyrdee@gmail.com','06XXXXX'],
                ['4','Michel','Laroux','06XXXXX','mlaroue015@gmail.com','06XXXXX'],
                ['5','Axel','Ja','06XXXXX','aja@gmail.com','06XXXXX'],
                ['6','Joon','Yoo','06XXXXX','hyjoon@gmail.com','06XXXXX'],
            ];
        }


        self::view('admin/datama', [
            'page'=>'datama',
            'model'=>$model,
            'data'=>$data
        ]);
    }

    public function notifs()
    {
        self::view('admin/notifs', [
            'page'=>'notifs'
        ]);
    }

}