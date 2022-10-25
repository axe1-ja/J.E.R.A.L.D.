<?php

class m0001_roles {
    public function up($pdo) {
        $db = $pdo;
        $SQL = "CREATE TABLE roles(
            role_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            role_name VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) 
        ENGINE=INNODB;
        INSERT INTO `roles`(`role_name`) VALUES ('Admin'); 
        INSERT INTO `roles`(`role_name`) VALUES ('Member'); 
        INSERT INTO `roles`(`role_name`) VALUES ('Visitor'); ";
        $db->exec($SQL);
    }

    
    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE roles;";
        $db->exec($SQL);
    }
}