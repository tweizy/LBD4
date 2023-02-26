<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <?php 
    $num1 = $num2 = $operand = $result = null;
    ?>
    <form action="" method="POST">
        <input type="text" placeholder="NUM1" name="num1" value="<?php echo $num1; ?>" required>
        <select name="operand" id="operand" name="operand">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">x</option>
            <option value="divide">/</option>
        </select>
        <input type="text" placeholder="NUM2" name="num2" value="<?php echo $num2; ?>" required>
        <button>=</button>
    </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operand = $_POST["operand"];

        if(!(is_numeric($num1) && is_numeric($num2))){
            $result = "Please enter valid numbers!";
        }
        else{
            if($operand == "plus"){
                $result = $num1 + $num2;
            }
            elseif($operand == "minus"){
                $result = $num1 - $num2;
            }
            elseif($operand == "multiply"){
                $result = $num1 * $num2;
            }
            elseif($operand == "divide"){
                $result = $num1 / $num2;
            }
        }
        echo "Result: ".$result;
    }
    ?>
</body>
</html>