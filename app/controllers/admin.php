<?php

class Admin extends Controller
{
    public function index()
    {
        $user='... ...';
        $stats=[];
        $stats['users']=1000;
        $stats['products']=634;
        $notifs = ['forum: *....*', 'private message from .... : *....*', 'error report on .... page : *....*'];

        $this->view('admin/index', [
            'page'=>'dashboard',
            'user'=>$user,
            'stats'=>$stats,
            'notifs'=>$notifs,

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


        $this->view('admin/datama', [
            'page'=>'datama',
            'model'=>$model,
            'data'=>$data
        ]);
    }



    public function notifs()
    {
        $notifs=[
            ['1','Issue on home page','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Joon YOO','Ticket','18/10/2022'],
            ['2','My product doesnt work','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Axel J-A','Private Message','15/10/2022'],
            ['3','Question on the product','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Elena CHARPENTIER','Private Message','13/10/2022'],
            ['4','aaaa','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Romain Parreira','Ticket','10/10/2022'],
            ['5','mklmklm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Diane Dinh','Ticket','10/10/2022'],
            ['6','flgnfjvnv', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Leonard GENDREL','Ticket','09/10/2022'],
        ];
        $this->view('admin/notifs', [
            'page'=>'notifs',
            'notifs'=>$notifs
        ]);
    }

}