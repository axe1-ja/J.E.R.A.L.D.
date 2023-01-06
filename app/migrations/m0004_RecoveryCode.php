<?php

class m0004_RecoveryCode {
    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE RecoveryCode(
            RecoveryCode_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            RecoveryCode_datetime VARCHAR(50) NOT NULL,
            User_id INT NOT NULL,
            foreign key (User_id) references users(User_id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE RecoveryCode;";
        $db->exec($SQL);
    }

}