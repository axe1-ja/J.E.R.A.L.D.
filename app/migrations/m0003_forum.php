<?php


class m0003_forum {

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE Forum(
            Forum_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            Forum_Type VARCHAR(300) NOT NULL,
            Forum_Object VARCHAR(300) NOT NULL,
            Forum_Content VARCHAR(300) NOT NULL,
            Forum_Datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            User_Id INT NOT NULL,
            foreign key (User_Id) references users(User_Id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE Forum;";
        $db->exec($SQL);
    }
}