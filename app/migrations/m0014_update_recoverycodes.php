<?php


class m0014_update_recoverycodes {
    public function up($pdo){
        $db = $pdo;
        $SQL = "ALTER TABLE recoverycode
        ADD recoverycode_code VARCHAR(300) NOT NULL;";
        $db->exec($SQL);
    }
}