<?php

class DatabaseController extends Controller
{
    public function migrate()
    {
        //dd($_POST);
        if(isset($_POST['password']) && $_POST['password']=='880CSZ92migration123_#jerald%kfed'){
            $db = new Database();
            $db->applyMigrations();

            return $this->view('database/migrate', [
                'msg' => "Les migrations ont bien été effectuées!",
            ]);
            
        }

    }

}