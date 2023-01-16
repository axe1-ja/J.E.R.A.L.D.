<?php


class m0009_forumMessage {

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE forum_messages(
            forum_message_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            forum_message_content VARCHAR(300) NOT NULL,
            forum_message_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            User_id INT NOT NULL,
            foreign key (User_id) references users(User_id),
            forum_id INT NOT NULL,
            foreign key (forum_id) references forum(forum_id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE forum_messages;";
        $db->exec($SQL);
    }
}