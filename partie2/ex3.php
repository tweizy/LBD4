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
    $tableau = array("Ahmed" => 14, "Joudia" => 19, "Samir" => 14, "Yasser" => 14.5, "Aya" => 12, "Ilham" => 16, "Yassine" => 17);

    foreach($tableau as $nom => $note){
        echo "Nom: ".$nom.", note = ".$note;
        echo "<br>";
    }
    ?>
</body>
</html>