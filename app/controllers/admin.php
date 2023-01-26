<?php

class Admin extends Controller
{
    /*public function index()
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
    }*/

    public function database()
    {
        $user= User::getUser();

        $this->view('admin/database', [
            'page'=>'database',
            'user'=>$user,

        ]);
    }
    
    public function datama()
    {
        $modelList = ['migrations','users', 'EmergencyContact', 'forum', 'forum_messages','bracelet','sensor','messages','faq','RecoveryCode','verification_codes'];
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

        if(count($result)==0) {

            $cols=Model::getTableCols($model);
            $data=[];

        } else {

            $cols = array_keys($result[0]);
            foreach ($result as $row) { 
                $l = [];
                foreach ($row as $val) {
                    $l[]=$val;
                }
                $data[] = $l;
            }

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

    // go to addData view
    public function addData()
    {
        if(isset($_POST['model'])){
            $model=$_POST['model'];
            $tableCols=Model::getTableCols($model);

            $this->view('admin/addData',[
                'model'=>$model,
                'tableCols'=>$tableCols
            ]);

        } else {

            header('Location: /admin/datama');

        }
    }

    //store the added data
    public function storeData()
    {
        if(isset($_POST['model'])){
            $model=$_POST['model'];
            $cols = "";
            $vals = "";
            $c=0;
            foreach($_POST as $key=>$p) {
                if($p!='') {
                    if($key!='model' && $c!=0) {
                        $cols.=", `".$key."`";
                        $vals.=', "'.$p.'"';
                    } elseif($key!='model' && $c==0) {
                        $cols.=" `".$key."`";
                        $vals.=' "'.$p.'"';
                        $c=1;
                    }
                }
            }
            $db = new Database();
            $query = "INSERT INTO `".$model."` (".$cols.") VALUES (".$vals.");";
            $statement = $db->pdo->prepare($query);
            $statement->execute();

            $this->datama();

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

            if($model=='users') {
                $query = "UPDATE `".$model."` SET user_deleted=1 WHERE '".$idCol."'='".$id."';";
            } else {
                $query = "DELETE FROM `".$model."` WHERE '".$idCol."'='".$id."';";
            }
            dd($query);
            $statement = $db->pdo->prepare($query);
            $statement->execute();

            $this->datama();

        } else {

            header('Location: /admin/datama');

        }
    }


    public function migrate()
    {
        $user= User::getUser();
        if($user->role=='admin'){
            $db = new Database();
            $db->applyMigrations();

            return $this->view('admin/database', [
                'msg' => "Les migrations ont bien été effectuées!",
            ]);
            
        } else {
            return $this->view('admin/database', [
                'error' => "Vous n'avez pas l'autorisation d'effectuer cette manipulation",
            ]);
        }

    }

    public function import() {

        $db = new Database();

        if($user->role=='admin'){
            $query = $_POST['sql'];
            $statement = $db->pdo->prepare($query);
            $statement->execute();

            return $this->view('database/import', [
                'msg' => "Les imports de données ont bien été effectuées!",
            ]);

        } else {

            return $this->view('admin/database', [
                'error' => "Vous n'avez pas l'autorisation d'effectuer cette manipulation",
            ]);
        }
        
    }
    
}