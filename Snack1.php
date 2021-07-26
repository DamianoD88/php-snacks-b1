<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
 $partite = [
     // array multidimensionali
     [
        'squadra di casa' => 'Boston Celtics - ',
        'squadra ospite' => ' Brooklyn Nets',
        'punti squadra di casa' => ' 55',
        'punti ospite' => '- 60'
     ],
     [

        'squadra di casa' => 'New York Knicks - ',
        'squadra ospite' => ' Philadelphia Sixers',
        'punti squadra di casa' => ' 43',
        'punti ospite' => '- 32'
     ],
     [
        'squadra di casa' => 'Chicago Bulls - ',
        'squadra di casa' => ' Cleveland Cavaliers',
        'punti squadra di casa' => ' 60',
        'punti ospite' => '- 32'
     ],
    ];

$lunghezza = count($partite);

 for ($i = 0; $i < $lunghezza; $i++) {
    echo $partite [$i]['squadra di casa'];
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
    
    <?php for($i = 0; $i < $lunghezza; $i++){ ?>
        <div>
            <ul>
                <li> <?php echo $partite [$i]['squadra di casa']; ?> </li>
                <li> <?php echo $partite [$i]['squadra di casa']; ?> </li>
                <li> <?php echo $partite [$i]['punti squadra di casa']; ?> </li>
                <li> <?php echo $partite [$i]['punti ospite']; ?> </li>
            </ul>
            
        </div>
    <?php } ?>

     <div>

     <ul>

     </ul>
         <?php
            
         ?>
     </div>

</body>
</html>