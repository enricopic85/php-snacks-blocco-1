<?php 
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
    var_dump(count(array_keys($posts)));
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
<?php for ($i=0; $i < count(array_keys($posts)); $i++) {    
            $key=array_keys($posts)[$i];
            $posts[$key];
            echo "<h2>" . $key . "</h2>";
            for ($j=0; $j < count($posts[$key]); $j++) {
                    $singlePost=$posts[$key][$j]; ?>     
                <h3><?php echo $singlePost["title"] ?></h3>
                <h3><?php echo $singlePost["author"] ?></h3>
                <h3><?php echo $singlePost["text"] ?></h3>
           <?php  } 
       } ?> 
</body>
</html>