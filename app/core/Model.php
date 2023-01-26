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

        if($model =="users") {
            $colsToNotTake=[29,30,31,32,33,34,35,36,37,38,39];
        }

        $db = new Database();

        $query = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$model."';";
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $cols=[];
        foreach($result as $key=>$r) {
            if($model =="users" && (($key>=0 && $key<=14) || $key>=29)){

            } else {
                $cols[]=$r['COLUMN_NAME'];
            }
        }
        return $cols;
    }
    
}