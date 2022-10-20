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
    
    public function forum($model='forum')
    {

        if($model=='forum'){
            $data=[
                ['1','Axel','Ja','No connexion'],
                ['2','Joon','Yoo','Find friend'],
                ['3','Elena','Charpentier','Hi Hi'],
                ['4','Diane','Dinh',"Don't work!!"],
                ['5','Leonard','Gendrel','Find golf friend'],
                ['6','Romain','Parriera',"It's really great"],
                ['7','Axel','Ja','Metal'],
                ['8','Joon','Yoo','Find new friend'],
                ['9','Elena','Charpentier','Hello Hi'],
                ['10','Diane','Dinh',"WOW!"],
            ];
        }elseif($model=='forum_p2'){
            $data=[
                ['11','Axel','Ja','print'],
                ['12','Joon','Yoo','hello'],
                ['13','Elena','Charpentier','world'],
                ['14','Diane','Dinh',"My"],
                ['15','Leonard','Gendrel','Name'],
                ['16','Romain','Parriera',"is"],
                ['17','Axel','Ja',"Axel"],
                ['18','Joon','Yoo','And'],
                ['19','Elena','Charpentier','you'],
                ['20','Diane','Dinh',"?"],
            ];
        }elseif($model=='forum_p3'){
            $data=[
                ['21','Axel','Ja','No '],
                ['22','Joon','Yoo','Find '],
                ['23','Elena','Charpentier','Hi '],
                ['24','Diane','Dinh',"Don't!!"],
                ['25','Leonard','Gendrel',' golf friend'],
                ['26','Romain','Parriera'," really good"],
                ['27','Axel','Ja','connexion'],
                ['28','Joon','Yoo',' friend'],
                ['29','Elena','Charpentier','hihihihi Hi'],
                ['30','Diane','Dinh'," i'ts work work work!!"],
            ];
        }elseif($model=='forum1'){
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
    public function newforum(){
        $this->view('user/forum_new');
    }
    public function practice()
    {
        $this->view('user/practice'); 
    }
    
}