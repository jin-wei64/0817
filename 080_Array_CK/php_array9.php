<?php
function cmp($x, $y)
{
    if ($x == $y) {
        return 0;
    }
    return ($x < $y) ? -1 : 1;
}

$a = array( 3 => '1', 2=> '3', 5 => '2', 6 => '4', 1 => '5' );
usort($a, "cmp"); //會重新給key;
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}
?>