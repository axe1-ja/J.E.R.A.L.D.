<?php


class m0008_Measure {

    

    public function up($pdo){
        $db = $pdo;
        $SQL = "CREATE TABLE Measure(
            Measure_Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            Measure_Value INT(250) NOT NULL,
            Sensor_Id INT,
            Measure_Datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            foreign key (Sensor_Id) references sensor(Sensor_Id)
            ) 
        ENGINE=INNODB;";
        $db->exec($SQL);
        
    }

    public function down($pdo){
        $db = $pdo;
        $SQL = "DROP TABLE Measure;";
        $db->exec($SQL);
    }
}