<?php 

/*namespace app\core;*/

class Model 
{
    public function __construct(array $properties) {
        foreach($properties as $key=>$property){
            $this->$key=$property;
        }
    }

    public static function getTableCols($model) {
        $db = new Database();

        $query = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$model."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $cols=[];
        foreach($result as $r) {
            $cols[]=$r['COLUMN_NAME'];
        }
        return $cols;
    }
    
}