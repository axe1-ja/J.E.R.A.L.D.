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
    
    public function edit_profile()
    {
        $this->view('user/edit_profile');
    }

    public function edit_proches()
    {
        $this->view('user/edit_proches');
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