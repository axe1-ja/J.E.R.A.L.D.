<?php


class m0008_EmergencyContact {

    

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE EmergencyContact(
            Emergency_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            Emergency_Name VARCHAR(255) NOT NULL,
            Emergency_Number INT(10) NOT NULL,
            User_Id INT,
            foreign key (User_Id) references users(User_Id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE EmergencyContact;";
        $db->exec($SQL);
    }
}