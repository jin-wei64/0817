<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color : red ;
        }
    </style>
</head>
<body>
<?php 
    $score = array (100,98,50,95);
?>
    <ul>
        <?php for($i =1 ; $i <= 3 ;$i++) { ?>
            <li>1</li>
        <?php } ?>
    </ul>
    <hr>
    <ul>
        <?php for($i =1 ; $i <= 3 ;$i++) { ?>
            <li><?= $i ?></li>
        <?php } ?>
    </ul>
    <hr>
    <ul>
        <?php foreach($score as $a) { ?>
            <?php if($a>=60){ ?>
                    <li><?= $a ?></li>
            <?php } else { ?>
                    <li class = "fail" ><?= $a ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
    <hr>
    <ul>
        <?php foreach($score as $a) { ?>
            <li class = "<?= ($a>=60) ? "" : "fail" ?>">
                <?= $a ?>
            </li>
        <?php } ?>
    </ul>
    <hr>
    <ul>
        <?php foreach($score as $a) { ?>
            <li class = "<?= ( ( $a >= 60 ) ? " ":"fail" )  ?>"> 
                <?= $a ?>
            </li>
        <?php } ?>    
    </ul>
    <hr>





    <!-- <ul>
        <?php 
            for($i =1 ; $i <= 3 ;$i++) { 
                echo '<li>1</li>';
            } 
        ?>
    </ul> -->
</body>
</html>