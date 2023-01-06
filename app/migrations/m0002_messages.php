<?php


class m0002_messages {

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE messages(
            message_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            message_Content VARCHAR(300) NOT NULL,
            User_Id INT NOT NULL,
            message_Datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            foreign key (User_Id) references users(User_Id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE messages;";
        $db->exec($SQL);
    }
}