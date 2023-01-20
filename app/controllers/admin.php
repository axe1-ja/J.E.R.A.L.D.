<?php

class Admin extends Controller
{
    public function index()
    {
        $db = new Database();

        $user= $_SESSION['user']->prenom." ".$_SESSION['user']->nom;
        $stats=[];
        
        $query = "SELECT COUNT(User_id) AS 'value' FROM users;";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) { 
            $data[] = $row['value'];
        }
        
        $stats['users']=$data[0];
        $stats['products']=634;
        $notifs = ['forum: *....*', 'private message from .... : *....*', 'error report on .... page : *....*'];

        $this->view('admin/index', [
            'page'=>'dashboard',
            'user'=>$user,
            'stats'=>$stats,
            'notifs'=>$notifs,

        ]);
    }


    
    public function datama()
    {
        $modelList = ['migrations','users', 'EmergencyContact', 'forum', 'forum_messages','bracelet','sensor','messages'];
        $db = new Database();

        if(isset($_POST['model'])) {
            $model = $_POST['model'];
        } else {
            $model = 'migrations';
        }
        // get all users
        $query = "SELECT * FROM ".$model.";";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $cols = array_keys($result[0]);
        foreach ($result as $row) { 
            $l = [];
            foreach ($row as $val) {
                $l[]=$val;
            }
            $data[] = $l;
        }

        $this->view('admin/datama', [
            'cols'=>$cols,
            'page'=>'datama',
            'model'=>$model,
            'modelList'=>$modelList,
            'data'=>$data
        ]);
    }


    public function editData()
    {
        if(isset($_POST['model']) && isset($_POST['id'])){
            $model=$_POST['model'];
            $idCol=$_POST['idCol'];
            $id=$_POST['id'];
            
            $db = new Database();
            $query = "SELECT * FROM `".$model."` WHERE ".$idCol."=".$id.";";
            $statement = $db->pdo->prepare($query);
            $statement->execute();
            $result=$statement->fetchAll(PDO::FETCH_ASSOC)[0];

            $this->view('admin/editData',[
                'data'=>$result,
                'idCol'=>$idCol,
                'model'=>$model
            ]);

        } else {

            header('Location: /admin/datama');

        }

    }

    public function updateData() 
    { 
        $model=$_POST['model'];
        $idCol=$_POST['idCol'];
        $idVal=$_POST['idVal'];

        $db = new Database();
        $code = "";
        $c=0;
        foreach($_POST as $key=>$p) {
            if($p!='') {
                if($key!='model' && $key!='idCol' && $key!='idVal' && $c!=0) {
                    $code.=", ".$key."='".$p."' ";
                } elseif($key!='model' && $key!='idCol' && $key!='idVal' && $c==0) {
                    $code.=$key."='".$p."' ";
                    $c=1;
                }
            }
        }
        $query = "UPDATE `".$model."` SET ".$code." WHERE ".$idCol."=".$idVal.";";
        //dd($query);
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        
        $this->datama();
    }

    public function deleteData()
    {
        if(isset($_POST['model']) && isset($_POST['id'])){
            $model=$_POST['model'];
            $idCol=$_POST['idCol'];
            $id=$_POST['id'];
            
            $db = new Database();
            $query = "UPDATE `".$model."` SET user_deleted=1 WHERE ".$idCol."=".$id.";";
            $statement = $db->pdo->prepare($query);
            $statement->execute();

            $this->datama();

        } else {

            header('Location: /admin/datama');

        }
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