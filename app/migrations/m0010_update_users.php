<?php


class m0010_update_users {
    public function up($pdo){
        $db = $pdo;
        $SQL = "ALTER TABLE users
        ADD user_deleted INT(10);";
        $db->exec($SQL);
    }
}