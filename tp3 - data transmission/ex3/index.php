<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 3</title>
</head>
<body>
    <form action="destination.php" method="POST">
        <input type="text" name="fname" id="fname" placeholder="First name: " required>

        <input type="text" name="lname" id="lname"  placeholder="Last name: " required>

        <input type="email" name="email" id="email" placeholder="Email: " required>

        <input type="text" name="objet" id="objet"  placeholder="Objet: " required>

        <select name="service" required>
            <option value="sav">Service Après Vente</option>
            <option value="technique">Service technique</option>
        </select>

        <input type="text" name="msg" id="msg"  placeholder="Message: " required>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>