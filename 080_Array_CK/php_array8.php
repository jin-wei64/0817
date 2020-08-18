<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray); //會把0~9判斷為數字 ex~ 18>2
	var_dump($testArray);
?>
