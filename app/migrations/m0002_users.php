<?php


class m0002_users {

    

    public function up($pdo){
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
            role_id int,
            FOREIGN KEY (role_id) REFERENCES roles(role_id)
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