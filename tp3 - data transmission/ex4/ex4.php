<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 4</title>
</head>
<body>
    <?php 
    $fname = "";
    $lname = "";
    $email = "";
    $objet = "";
    $service = "";
    $msg = "";
    ?>
    <form action="" method="POST">
        <input type="text" name="fname" id="fname" placeholder="First name: " value="<?php echo $fname; ?>" required>

        <input type="text" name="lname" id="lname"  placeholder="Last name: " value="<?php echo $lname; ?>" required>

        <input type="email" name="email" id="email" placeholder="Email: " value="<?php echo $email; ?>" required>

        <input type="text" name="objet" id="objet"  placeholder="Objet: " value="<?php echo $objet; ?>" required>

        <select name="service" required>
            <option value="sav">Service Après Vente</option>
            <option value="technique">Service technique</option>
        </select>

        <input type="text" name="msg" id="msg"  placeholder="Message: " value="<?php echo $msg; ?>" required>
        
        <button type="submit">Submit</button>
    </form>

    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $objet = $_POST["objet"];
        $service = $_POST["service"];
        $msg = $_POST["msg"];
        
        echo "First name: ".$fname;
        echo "<br>";
        echo "Last name: ".$lname;
        echo "<br>";
        echo "Email: ".$email;
        echo "<br>";
        echo "Objet: ".$objet;
        echo "<br>";
        echo "Service: ".$service;
        echo "<br>";
        echo "Message: ".$msg;
        echo "<br>";
    }
    ?>
</body>
</html>