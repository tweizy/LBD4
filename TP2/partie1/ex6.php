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
    $emails = ["hdfsjk@gmail.com", "dfhsh@hotmail.com", "dshjfds@outlook.com", "dfhsfsd@gmail.com"];
    $occurence = array();
    foreach($emails as $email){
        $occurence[explode("@", $email)]=1;
    }
    foreach($occurence as $i){
        echo $i." ";
    }
    ?>
</body>
</html>