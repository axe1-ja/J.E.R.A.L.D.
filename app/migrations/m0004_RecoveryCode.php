<?php

class m0004_RecoveryCode {
    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE RecoveryCode(
            RecoveryCode_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            RecoveryCode_Datetime VARCHAR(50) NOT NULL,
            User_Id INT NOT NULL,
            foreign key (User_Id) references users(User_Id)
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