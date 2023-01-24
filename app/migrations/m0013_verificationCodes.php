<?php


class m0013_verificationCodes {

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE verification_codes(
            verificaiton_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            code VARCHAR(300) NOT NULL,
            User_id INT NOT NULL,
            verification_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            foreign key (User_id) references users(User_id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE verification_codes;";
        $db->exec($SQL);
    }
}