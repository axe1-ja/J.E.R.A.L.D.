<?php


class m0006_sensor {

    

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE sensor(
            Sensor_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            Sensor_name VARCHAR(255) NOT NULL,
            bracelet_id INT,
            foreign key (bracelet_id) references bracelet(bracelet_id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE sensor;";
        $db->exec($SQL);
    }
}