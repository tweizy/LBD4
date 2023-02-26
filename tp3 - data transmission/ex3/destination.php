<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
</head>
<body>
    <?php 
    @$fname = $_POST["fname"];
    @$lname = $_POST["lname"];
    @$email = $_POST["email"];
    @$objet = $_POST["objet"];
    @$service = $_POST["service"];
    @$msg = $_POST["msg"];

    echo $fname;
    echo "<br>";
    echo $lname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $objet;
    echo "<br>";
    echo $service;
    echo "<br>";
    echo $msg;
    echo "<br>";
    ?>
</body>
</html>