<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>EX 6</title>
</head>
<body>
    <?php 
    $fnamerr = $lnamerr = $dateerr = $formationerr = $pwderr = "";
    $civilite = $fname = $lname = $date = $pwd = $pwd1= "";
    $formations = [];
    $validform = 1;

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $civilite = $_POST["civilite"];
        if(empty($_POST["fname"])){
            $fnamerr = "First name is required";
            $validform = 0;
        }
        else{
            $fname = htmlspecialchars($_POST["fname"]); 
        }
        if(empty($_POST["lname"])){
            $lnamerr = "Last name is required";
            $validform = 0;
        }
        else{
            $lname = htmlspecialchars($_POST["lname"]); 
        }
        if(empty($_POST["date"])){
            $dateerr = "Birthdate is required";
            $validform = 0;
        }
        else{
            $date = htmlspecialchars($_POST["date"]); 
        }
        if(empty($_POST["formation[]"])){
            $formationerr = "Choose at least one option";
            $validform = 0;
        }
        else{
            $formations = $_POST["formation[]"]; 
        }
        if(empty($_POST["pwd"])){
            $pwderr = "Password is required";
            $validform = 0;
        }
        else{
            $pwd = htmlspecialchars($_POST["pwd"]); 
        }
        if(empty($_POST["pwd1"])){
            $pwderr = "Password confirmation is required";
            $validform = 0;
        }
        else{
            $pwd1 = htmlspecialchars($_POST["pwd1"]); 
        }
        if($pwd != $pwd1){
            $pwderr = "Passwords do not match";
            $validform = 0;
        }
    }
    if($_SERVER['REQUEST_METHOD'] != "POST"){ ?>
    <div class="container mt-5" style="width: 600px">
        <form action="" method="POST" class="d-flex flex-column">
            <div class="form-group">
                <label for="civilite">Civilité</label>
                <select name="civilite" id="civilite" class="form-control">
                    <option value="m">M.</option>
                    <option value="mlle">Mlle</option>
                    <option value="mme">Mme</option>
                </select>
            </div>

            <div class="form-group">
                <label for="fname">First Name:</label>
                <input class="form-control" type="text" name="fname" id="fname" placeholder="First name: " required>
                <?php echo "<p class='text-danger'>".$fnamerr."</p>" ?>
            </div>

            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input class="form-control" type="text" name="lname" id="lname"  placeholder="Last name: " required>
                <?php echo "<p class='text-danger'>".$lnamerr."</p>" ?>
            </div>

            <div class="form-group">
                <label for="date">Birthday: </label>
                <input class="form-contorl" type="date" name="date" required>
                <?php echo "<p class='text-danger'>".$dateerr."</p>" ?>
            </div>

            <div class="form-group">
                <input type="checkbox" name="formation[]" id="php">
                <label for="php" class="mr-1">PHP</label>
                <input type="checkbox" name="formation[]" id="java">
                <label for="java" class="mr-1">Java</label>
                <input type="checkbox" name="formation[]" id="python">
                <label for="python" class="mr-1">Python</label>
                <input type="checkbox" name="formation[]" id="c">
                <label for="c" class="mr-1">C</label>
                <input type="checkbox" name="formation[]" id="javascript">
                <label for="javascript" class="mr-1">Javascript</label>
                <?php echo "<p class='text-danger'>".$formationerr."</p>" ?>
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Password: " required>
            </div>

            <div class="form-group">
                <label for="pwd1">Password confirmation:</label>
                <input class="form-control" type="password" name="pwd1" id="pwd1" placeholder="Retype your password: " required>
                <?php echo "<p class='text-danger'>".$pwderr."</p>" ?>
            </div>
            
            <button type="submit" class="bg-primary w-25 m-auto mt-6" style="border: 0; height: 50px; border-radius: 10px;">Submit</button>
        </form>
    </div>
    <?php } else{?>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Civilité</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Date</th>
                <th scope="col">Formations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"><?php echo $civilite ?></th>
                <td><?php echo $fname ?></td>
                <td><?php echo $lname ?></td>
                <td><?php echo $date ?></td>
                <td><?php echo implode(",",$formations) ?></td>
                </tr>
            </tbody>
        </table>
    <?php }?>
</body>
</html>