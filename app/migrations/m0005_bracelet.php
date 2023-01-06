<?php


class m0005_bracelet {

    

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE bracelet(
            bracelet_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            bracelet_startDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            User_id INT,
            foreign key (User_id) references users(User_id)
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