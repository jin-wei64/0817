<?php


class Ctest{
    public $price = 100 ;
    private $data;
    public function __set($k,$v){
        echo "__set is running. $k, $v<br>";
        $this->data[$k] = $v;
    }
    public function __get($k){
        echo "__get be called. <br>";
        return $this->data[$k];
    }


}
$obj = new Ctest();
echo $obj->price ," <br>";
$obj->location = "TaiChung";
echo $obj->location,"<br>";

?>