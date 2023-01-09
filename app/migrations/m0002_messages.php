<?php


class m0002_messages{

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE messages_type2(
            message_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            User_Id_send INT Not NULL,
            User_Id_receive INT NOT NULL,
            message_Content VARCHAR(300) NOT NULL,
            message_Datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            foreign key (User_Id_send) references users(User_id),
            foreign key (User_Id_receive) references users(User_id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE messages_type2;";
        $db->exec($SQL);
    }
}