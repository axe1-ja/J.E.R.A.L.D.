<?php


class m0012_update_users {
    public function up($pdo){
        $db = $pdo;
        $SQL = "ALTER TABLE users
        ADD user_verified INT(10);";
        $db->exec($SQL);
    }
}