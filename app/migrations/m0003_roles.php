<?php

class m0003_roles {
    public function up() {
        echo PHP_EOL.'Applying migration'.PHP_EOL;
        $db = $pdo;
        $SQL = "CREATE TABLE roles(
            role_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            role_name VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
    }
}