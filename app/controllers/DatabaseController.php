<?php

class DatabaseController extends Controller
{
    public function migrate()
    {
        //dd($_POST);
        if(isset($_POST['password']) && $_POST['password']=='migration80123_#987jerald%kfed'){
            $db = new Database();
            dd('aa');
            $db->applyMigrations();

            return $this->view('database/migrate', [
                'msg' => "Les migrations ont bien été effectuées!",
            ]);
            
        } else {
            return $this->view('database/migrate', [
                'error' => "Le mot de passe est incorrect...",
            ]);
        }

    }

    public function import() {
        if(isset($_POST['password']) && $_POST['password']=='migration80123_#987jerald%kfed@'){
            $db = new Database();

            $query = $_POST['sql'];
            $statement = $db->pdo->prepare($query);
            $statement->execute();

            return $this->view('database/import', [
                'msg' => "Les imports de données ont bien été effectuées!",
            ]);
            
        } else {
            return $this->view('database/import', [
                'error' => "Le mot de passe est incorrect...",
            ]);
        }
    }

}