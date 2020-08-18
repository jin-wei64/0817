<?php 
class animal{
    public function __construct($weightvalue = 13){ 
        $this->weight = $weightvalue;
        echo "Object craeating... <br>";
    }
    public function __destruct(){
        echo "Object destrust .....<br>";
    }
    public $weight = 1;
    public function makenoise(){ //ddfault public
        echo "animal : .....<br>";
    }
}

$obj = new animal(11);
$a = $obj->weight = 12;
$obj->makenoise();  
// $c = $obj->test;
echo $a ."<br>";
$obj = $obj2;
$obj = null;

?>