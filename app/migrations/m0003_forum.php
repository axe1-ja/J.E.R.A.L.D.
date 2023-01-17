<?php


class m0003_forum {

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE forum(
            forum_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            forum_object VARCHAR(300) NOT NULL,
            forum_content VARCHAR(300) NOT NULL,
            forum_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            User_id INT NOT NULL,
            foreign key (User_id) references users(User_id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE forum;";
        $db->exec($SQL);
    }
}