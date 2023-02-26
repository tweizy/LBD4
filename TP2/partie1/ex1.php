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
    $tab = [1, 2, 2, 3, 7, 3, 8, 5, 1, 5];
    echo "Array: ";
    foreach($tab as $i){
        echo $i." ";
    }
    sort($tab);
    echo "<br>Sorted array: ";
    foreach($tab as $i){
        echo $i." ";
    }
    $tab = array_unique($tab, SORT_NUMERIC);
    echo "<br>Removed duplicates array: ";
    foreach($tab as $i){
        echo $i." ";
    }
    ?>
</body>
</html>