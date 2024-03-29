<?php


class m0001_users {
    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE users(
            User_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            User_Prenom VARCHAR(255) NOT NULL,
            User_nom VARCHAR(255) NOT NULL,
            User_DOB DATE,
            User_phone INT NOT NULL,
            User_password VARCHAR(255) NOT NULL,
            User_email VARCHAR(255) UNIQUE NOT NULL,
            User_address VARCHAR(255) NOT NULL,
            User_height FLOAT,
            User_Weight FLOAT,
            User_HealthIssue VARCHAR(255),
            user_role VARCHAR(15)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE users;";
        $db->exec($SQL);
    }
}