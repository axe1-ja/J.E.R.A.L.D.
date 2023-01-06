<?php


class m0001_users {
    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE users(
            User_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            User_Prenom VARCHAR(255) NOT NULL,
            User_Nom VARCHAR(255) NOT NULL,
            User_DOB DATE,
            User_Phone INT NOT NULL,
            User_Password VARCHAR(255) NOT NULL,
            User_Email VARCHAR(255) UNIQUE NOT NULL,
            User_Address VARCHAR(255) NOT NULL,
            User_Height FLOAT,
            User_Weight FLOAT,
            User_HealthIssue VARCHAR(255),
            user_Role VARCHAR(15)
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