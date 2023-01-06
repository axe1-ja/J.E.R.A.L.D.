<?php


class m0005_bracelet {

    

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE bracelet(
            bracelet_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            bracelet_StartDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            User_Id INT,
            foreign key (User_Id) references users(User_Id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE bracelet;";
        $db->exec($SQL);
    }
}