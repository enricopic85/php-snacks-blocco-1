<?php 
    $MatchsDay=[
        [
            "homeTeam"=>"Milan",
            "visitTeam"=>"Sampdoria",
            "goalHome"=>1,
            "goalVisit"=>0
        ],
        [
            "homeTeam"=>"Roma",
            "visitTeam"=>"Lazio",
            "goalHome"=>2,
            "goalVisit"=>1
        ],
        [
            "homeTeam"=>"Juve",
            "visitTeam"=>"San Creponzio",
            "goalHome"=>0,
            "goalVisit"=>4
        ],
        [
            "homeTeam"=>"Scapoli",
            "visitTeam"=>"Ammogliati",
            "goalHome"=>3,
            "goalVisit"=>2
        ],
        [
            "homeTeam"=>"Man",
            "visitTeam"=>"Food",
            "goalHome"=>0,
            "goalVisit"=>5
        ],
        
    ];

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
    <h3>Risultati giornata di campionato:</h3>
    <?php  for ($i=0; $i < sizeof($MatchsDay); $i++) { ?>
         <h5><?php echo $MatchsDay[$i]["homeTeam"]?> - <?php echo $MatchsDay[$i]["visitTeam"]?> | <?php echo $MatchsDay[$i]["goalHome"]?> - <?php echo $MatchsDay[$i]["goalVisit"]?></h5>
    <?php } ?> 
    <hr>
</body>
</html>