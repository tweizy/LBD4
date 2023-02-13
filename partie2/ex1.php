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
    $ages = array("Omar" => 19, "Ahmed" => 34);
    foreach($ages as $nom => $age){
        echo $nom." a ".$age;
        echo "<br>";
    }
    ?>
</body>
</html>