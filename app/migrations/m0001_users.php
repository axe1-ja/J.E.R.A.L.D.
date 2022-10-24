<?php


class m0001_users {

    

    public function up($pdo){
        echo PHP_EOL.'Applying migration'.PHP_EOL;
        $db = $pdo;
        $SQL = "CREATE TABLE users(
            User_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            User_Prenom VARCHAR(255) NOT NULL,
            User_nom VARCHAR(255) NOT NULL,
            User_DOB DATE NOT NULL,
            User_password VARCHAR(255) NOT NULL,
            User_email VARCHAR(255) NOT NULL,
            User_address VARCHAR(255) NOT NULL,
            User_height FLOAT,
            User_Weight FLOAT,
            User_HealthIssue VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
    }

    public function down(){
        echo 'Down migration'.PHP_EOL;
        $db = \app\core\App::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }
}