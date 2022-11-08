<?php


class UserController extends Controller
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
    
    public function forum($model='forum') # $page 추가하기
    {

        if($model=='forum'){
            $data=[
                ['1','forum1','Axel','Ja','No connexion'],
                ['2','forum2','Joon','Yoo','Find friend'],
                ['3','forum1','Elena','Charpentier','Hi Hi'],
                ['4','forum2','Diane','Dinh',"Don't work!!"],
                ['5','forum1','Leonard','Gendrel','Find golf friend'],
                ['6','forum2','Romain','Parriera',"It's really great"],
                ['7','forum1','Axel','Ja','Metal'],
                ['8','forum2','Joon','Yoo','Find new friend'],
                ['9','forum1','Elena','Charpentier','Hello Hi'],
                ['10','forum2','Diane','Dinh',"WOW!"]
            ];
        }elseif($model=='forum_p2'){
            $data=[
                ['11','forum1','Axel','Ja','No connexion'],
                ['12','forum2','Joon','Yoo','Find friend'],
                ['13','forum1','Elena','Charpentier','Hi Hi'],
                ['14','forum2','Diane','Dinh',"Don't work!!"],
                ['15','forum1','Leonard','Gendrel','Find golf friend'],
                ['16','forum2','Romain','Parriera',"It's really great"],
                ['17','forum1','Axel','Ja','Metal'],
                ['18','forum2','Joon','Yoo','Find new friend'],
                ['19','forum1','Elena','Charpentier','Hello Hi'],
                ['20','forum2','Diane','Dinh',"WOW!"],
            ];
        }elseif($model=='forum_p3'){
            $data=[
                ['21','forum1','Axel','Ja','No connexion'],
                ['22','forum2','Joon','Yoo','Find friend'],
                ['23','forum1','Elena','Charpentier','Hi Hi'],
                ['24','forum2','Diane','Dinh',"Don't work!!"],
                ['25','forum1','Leonard','Gendrel','Find golf friend'],
                ['26','forum2','Romain','Parriera',"It's really great"],
                ['27','forum1','Axel','Ja','Metal'],
                ['28','forum2','Joon','Yoo','Find new friend'],
                ['29','forum1','Elena','Charpentier','Hello Hi'],
                ['30','forum2','Diane','Dinh',"WOW!"],
            ];
        }elseif($model=='forum1'){
            $data=[
                ['1','forum1','Axel','Ja','No connexion'],
                ['3','forum1','Elena','Charpentier','Hi Hi'],
                ['5','forum1','Leonard','Gendrel','Find golf friend'],
                ['7','forum1','Axel','Ja','Metal'],
                ['9','forum1','Elena','Charpentier','Hello Hi'],
                ['11','forum1','Axel','Ja','No connexion'],
                ['13','forum1','Elena','Charpentier','Hi Hi'],
                ['15','forum1','Leonard','Gendrel','Find golf friend'],
                ['17','forum1','Axel','Ja','Metal'],
                ['19','forum1','Elena','Charpentier','Hello Hi'],
            ];
        } elseif($model=='forum2'){
            $data=[
                ['2','forum2','Joon','Yoo','Find friend'],
                ['4','forum2','Diane','Dinh',"Don't work!!"],
                ['6','forum2','Romain','Parriera',"It's really great"],
                ['8','forum2','Joon','Yoo','Find new friend'],
                ['10','forum2','Diane','Dinh',"WOW!"],
                ['12','forum2','Joon','Yoo','Find friend'],
                ['14','forum2','Diane','Dinh',"Don't work!!"],
                ['16','forum2','Romain','Parriera',"It's really great"],
                ['18','forum2','Joon','Yoo','Find new friend'],
                ['20','forum2','Diane','Dinh',"WOW!"],
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