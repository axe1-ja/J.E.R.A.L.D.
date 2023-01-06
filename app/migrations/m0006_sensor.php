<?php


class m0006_sensor {

    

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE sensor(
            Sensor_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            Sensor_Name VARCHAR(255) NOT NULL,
            bracelet_Id INT,
            foreign key (bracelet_Id) references bracelet(bracelet_Id)
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