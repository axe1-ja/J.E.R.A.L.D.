<?php


class m0005_messages {

    

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE messages(
            message_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            content VARCHAR(300) NOT NULL,
            User_id INT NOT NULL,
            conversation_id INT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            foreign key (User_id) references users(User_id),
            foreign key (conversation_id) references users(User_id)
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