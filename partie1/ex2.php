<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
    'Octobre', 'Novembre', 'Décembre');
    echo "For loop:<br>";
    for($i=1; $i<count($moisFr)+1; $i++){
        echo $moisFr[$i]." ";
    }
    echo "<br>";
    echo "Foreach loop:<br>";
    foreach($moisFr as $mois){
        echo $mois." ";
    }
    echo "<br>".$moisFr[(int)date("m")];

    $moisFr1 = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 13=>'Juillet', 'Aout', 'Septembre',
    'Octobre', 'Novembre', 'Décembre');
    echo "<br>";
    for($i=1; $i<count($moisFr1)+1; $i++){
        echo $moisFr[$i]." ";
    }
    ?>
</body>
</html>