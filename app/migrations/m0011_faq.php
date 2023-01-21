<?php


class m0011_faq {

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE faq(
            faq_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            faq_question VARCHAR(300) NOT NULL,
            faq_answer VARCHAR(800) NOT NULL,
            faq_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE faq;";
        $db->exec($SQL);
    }
}