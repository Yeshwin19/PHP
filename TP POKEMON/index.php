<?php
    include_once 'includes/bag.php';
    include_once 'includes/healing.php';
    include_once 'includes/potion.php';
    include_once 'includes/superpotion.php';
    include_once 'includes/hyperpotion.php';
    include_once 'includes/potionmax.php';
    include_once 'includes/pokemon.php';
    include_once 'includes/ball.php';
    include_once 'includes/bullebizarre.php';
    include_once 'includes/cara.php';
    include_once 'includes/sala.php';
    include_once 'includes/pokeball.php';
?>

<!DOCTYPE html>
<html lang="fr">

        <head>
        <title>Poke|Ball</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">



    </head>

    <body>

    <?php
        $bag = new bag('YRB');
        $potion = new potion(10, 'YRB', $bag);
    ?>

    </body>

</html>