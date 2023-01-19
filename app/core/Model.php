<?php 

/*namespace app\core;*/

class Model 
{
    public function __construct(array $properties) {
        foreach($properties as $key=>$property){
            $this->$key=$property;
        }
    }
    
}