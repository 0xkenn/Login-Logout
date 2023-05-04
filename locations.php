<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
    <form action="locations.php" method="post">
        <nav>Username: </nav>
        <input type="text" name="username">
        <nav>Password: </nav>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    if(!empty($_POST["login"])){
       $pass = $_POST["password"];
        $errors = array();
if (strlen($pass) < 8 || strlen($pass) > 16) {
    $errors[] = "Password should be min 8 characters and max 16 characters";
}
if (!preg_match("/\d/", $pass)) {
    $errors[] = "Password should contain at least one digit";
}
if (!preg_match("/[A-Z]/", $pass)) {
    $errors[] = "Password should contain at least one Capital Letter";
}
if (!preg_match("/[a-z]/", $pass)) {
    $errors[] = "Password should contain at least one small Letter";
}
if (!preg_match("/\W/", $pass)) {
    $errors[] = "Password should contain at least one special character";
}
if (preg_match("/\s/", $pass)) {
    $errors[] = "Password should not contain any white space";
}

if ($errors) {
    foreach ($errors as $error) {
        echo $error . "\n";
    }
    die();
} else {
    echo "$pass => MATCH\n";
}

        if(!empty($_POST["username"]) && !empty($_POST["password"])){

                $_SESSION["username"] =  $_POST["username"];
                $_SESSION["password"] = $_POST["password"];

                header("location: index.php");
            }
            elseif(empty($_POST["username"])){
                echo "Please fill in your username";
            }
            elseif(empty($_POST["password"])){
                echo "Please fill in your password";
            }
           
                
            }
    
  

   
?>