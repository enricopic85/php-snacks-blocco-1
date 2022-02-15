<?php 
    $arr=[];
    

    while (count($arr) <= 15) {
        $numCas=rand(1,20);
         if (!in_array($numCas,$arr)) {
             $arr[]=$numCas;
         }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>I numeri estratti sono:</h3>
    <?php foreach ($arr as $value) { ?>
        <li><?php echo $value?></li> 
   <?php } ?>
</body>
</html>