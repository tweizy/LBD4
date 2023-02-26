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
    $notes = [12, 15, 12, 16, 18, 16, 19, 7, 19, 11];
    function afficher($arr){
        foreach($arr as $o){
            echo $o." ";
        }
    };

    function moyenne($arr){
        $sum=0;
        foreach($arr as $o){
            $sum+=$o;
        }
        return $sum/count($arr);
    };

    function valider($arr){
        $sum = 0;
        foreach($arr as $o){
            if($o > 10){
                $sum+=1;
            }
        }
        return $sum;
    };

    function notecomplete($arr){
        $sum = 0;
        foreach($arr as $o){
            if($o == 20){
                $sum+=1;
            }
        }
        return $sum;
    };

    function trienotes(&$arr1){
        $n1 = sizeof($arr1);
        for($i1 = 0; $i1 < $n1; $i1++){
            for ($j1 = 0; $j1 < $n1 - $i1 - 1; $j1++){
                if ($arr1[$j1] > $arr1[$j1+1]){
                $t1 = $arr1[$j1];
                $arr1[$j1] = $arr1[$j1+1];
                $arr1[$j1+1] = $t1;
                }
            }
        }
    };

    function chercher($arr, $elem){
        $i=0;
        foreach($arr as $o){
            $i++;
            if($o == $elem){
                return $i;
            }
        }
    };
    ?>
</body>
</html>