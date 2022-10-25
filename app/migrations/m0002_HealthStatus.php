<?php


class m0002_HealthStatus {

    

    public function up($pdo){
        echo PHP_EOL.'Applying migration'.PHP_EOL;
        $db = $pdo;
        $SQL = "CREATE TABLE HealthStatus(
            Health_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            Health_HeartBeat INT NOT NULL,
            Health_Soundlevel INT NOT NULL,
            Health_Temperature FLOAT,
            Health_datetime DateTime,
            User_id INT,
            foreign key (User_id) references users(User_id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down(){
        echo 'Down migration'.PHP_EOL;
        $db = \app\core\App::$app->db;
        $SQL = "DROP TABLE HealthStatus;";
        $db->pdo->exec($SQL);
    }
}