<?php


class Bracelet extends Model{
    public static function braceletExists($column, $value) {
        
        $db = new Database();

        $query = "SELECT * FROM `bracelet` WHERE ".$column."=".$value.";";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);

        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }
}