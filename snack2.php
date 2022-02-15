<?php 
   $name=$_GET["name"]; 
   $mail=$_GET["mail"]; 
   $age=$_GET["age"];
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
    <h2>Inserisci nome,mail ed età. Ricorda che il nome deve contenere più di 3 caratteri <br> la mail una chioccola ed un punto <br> e l'età deve essere un numero(lo dico perchè non mi sembri sveglio) <br> Cerca di non sbagliare, sappiamo dove abiti</h2>
    <hr>
    <?php 
        if ((strlen($name) > 3) && (strpos($mail,".") && strpos($mail,"@")) && (is_numeric($age)))  { ?>
           <h3>Ti è andata bene</h3>
       <?php }  else {
           echo "<h3>U tiempo tuo è fernuto</h3>";
       } ?>
</body>
</html>
