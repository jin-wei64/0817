<?php
    header("content-type: text/html; charset=utf-8");
    
    $myArray = array('myName'=>'Jeremy', 'myHeight'=>191, 'myWeight'=>91);
    echo "大家好，我的名字叫".$myArray['myName']
?>
<pre>
<?php print_r($myArray) ?>
</pre>