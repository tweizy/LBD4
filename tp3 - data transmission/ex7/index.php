<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banque</title>
</head>
<body>
    <form action="" method="POST">
        <select name="profession">
            <option value="salarié">Salarié</option>
            <option value="fonctionnaire">Fonctionnaire</option>
            <option value="profession_libérale">Profession libérale</option>
        </select>

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>

        <label for="prénom">Prénom</label>
        <input type="text" name="prénom" id="prénom" required>

        <label for="financement">Financement</label>
        <input type="text" name="financement" id="financement" required>

        <label for="durée">Durée</label>
        <input type="number" name="durée" id="durée">

        <label for="assurance">Voulez-vous une assurance: </label>
        <label for="oui">Oui</label>
        <input type="radio" name="assurance" id="oui" checked> 
        <label for="non">Non</label>
        <input type="radio" name="assurance" id="non">

        <button>Envoyer</button>
    </form>

    <?php
    if(isset($_POST["nom"]) && isset($_POST["prénom"]) && isset($_POST["financement"]) && isset($_POST["durée"]) && isset($_POST["profession"]) && isset($_POST["assurance"])){
        $profession = $_POST["profession"];
        $nom = $_POST["nom"];
        $prénom = $_POST["prénom"];
        $financement = $_POST["financement"];
        $durée = $_POST["durée"];
        $assurance = $_POST["assurance"];

        echo $profession;
        echo $assurance;
    }
    ?>
</body>
</html>