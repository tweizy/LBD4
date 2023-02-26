<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 7</title>
</head>
<body>
    <?php
    $students = array("ET123" => array("Nom" => "AB", "Prénom" => "AC", "Moyenne" => 17), "ET676" => array("Nom" => "BC", "Prénom" => "BD", "Moyenne" => 12), "ET989" => array("Nom" => "CD", "Prénom" => "CE", "Moyenne" => 9), "ET764" => array("Nom" => "DE", "Prénom" => "DF", "Moyenne" => 16.5));

    $student_id = $_GET["student"];
    echo "Student " . $student_id . " details:<br><br>";

    echo "Nom: ".$students[$student_id]["Nom"]." ";
    echo "<br>";
    echo "Prénom: " . $students[$student_id]["Prénom"]." ";
    echo "<br>";
    echo "Moyenne: " . $students[$student_id]["Moyenne"]." ";
    echo "<br>";
    ?>
</body>
</html>