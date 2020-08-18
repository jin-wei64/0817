<?php
$obj = new CAnimal ();
$obj->makeNoise ();
echo "<br>";

$obj->weight = 10;
$obj->weight = -5;
$obj->setweight(20);
echo $obj->weight;
// foreach ( get_class_methods ( "CAnimal" ) as $varName => $varValue ) {
// 	echo "$varValue <br>";
// }
//methods must be private ; maybe

class CAnimal {
	public $weight;
	private $_weight = 0;
	
	function __construct() {
		foreach ( get_class_vars ( "CAnimal" ) as $varName => $varValue ) {
			if (substr ( $varName, 0, 1 ) != "_")
				unset ( $this->$varName ); //claer weight.value
		}
		
		$this->weight = 0;
	}
	
	public function __get($varName) {
		if (method_exists ( $this, $MethodName = 'get' . $varName ))
			return $this->$MethodName ();
		else
			trigger_error ( $varName . ' is not avaliable .', E_USER_ERROR );
	}
	
	public function __set($varName, $value) {
		if (method_exists ( $this, $MethodName = 'set' . $varName ))
			return $this->$MethodName ( $value );
		else
			trigger_error ( $varName . ' is not avaliable .', E_USER_ERROR );
	}
	
	public function makeNoise() {
		echo "CAnimal: makeNoise";
	}
	
	public function setWeight($value) {
		if ($value >= 0)
			$this->_weight = $value;
	}
	
	public function getWeight() {
		return $this->_weight;
	}
}

?>
