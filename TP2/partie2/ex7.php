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

    echo "<h3> Question 1 </h3>";
    $i = 0;
    foreach($students as $student){
        echo array_keys($students)[$i]." ";
        echo "Nom: ".$student["Nom"]." ";
        echo "Prénom: " . $student["Prénom"]." ";
        echo "Moyenne: " . $student["Moyenne"]." ";
        echo "<br>";
        $i++;
    }

    echo "<h3> Question 2 </h3>";
    $max_grade_student = $students["ET123"];
    foreach($students as $student){
        if($student["Moyenne"] > $max_grade_student["Moyenne"]){
            $max_grade_student = $student;
        }
    }
    echo "Nom: ".$max_grade_student["Nom"]." ";
    echo "Prénom: " . $max_grade_student["Prénom"]." ";
    echo "Moyenne: " . $max_grade_student["Moyenne"]." ";

    echo "<h3> Question 3 </h3>";
    $min_grade_student = $students["ET123"];
    foreach($students as $student){
        if($student["Moyenne"] < $min_grade_student["Moyenne"] && $student["Moyenne"] >= 10){
            $min_grade_student = $student;
        }
    }
    echo "Nom: ".$min_grade_student["Nom"]." ";
    echo "Prénom: " . $min_grade_student["Prénom"]." ";
    echo "Moyenne: " . $min_grade_student["Moyenne"]." ";

    echo "<h3> Question 4 </h3>";
    $failed_students = array();
    $i=0;
    foreach($students as $student){
        if($student["Moyenne"] < 10){
            $failed_students[$i] = array("Nom" => $student["Nom"], "Prénom" => $student["Prénom"], "Moyenne" => $student["Moyenne"]);
            $i++;
        }
    }
    foreach($failed_students as $student){
        echo "Nom: ".$student["Nom"]." ";
        echo "Prénom: " . $student["Prénom"]." ";
        echo "Moyenne: " . $student["Moyenne"]." ";
        echo "<br>";
    }
    ?>
</body>
</html>