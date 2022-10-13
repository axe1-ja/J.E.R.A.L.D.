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
    
    public function forum($model='forum')
    {

        if($model=='forum'){
            $data=[
                ['1','Axel','Ja','No connexion'],
                ['2','Joon','Yoo','Find friend'],
                ['3','Elena','Charpentier','Hi Hi'],
                ['4','Diane','Dinh',"Don't work!!"],
                ['5','Leonard','Gendrel','Find golf friend'],
                ['6','Romain','Parriera',"It's really good"],
            ];
        } elseif($model=='forum1'){
            $data=[
                ['1','Axel','Ja','No connexion'],
                ['2','Elena','Charpentier','Hi Hi'],
                ['3','Romain','Parriera',"It's really good"]
            ];
        } elseif($model=='forum2'){
            $data=[
                ['1','Joon','Yoo','Find friend'],
                ['2','Elena','Charpentier','Hi Hi'],
                ['3','Leonard','Gendrel','Find golf friend'],
            ];
        }

        $this->view('user/forum', [
            'model'=>$model,
            'data'=>$data
        ]);
    }

}