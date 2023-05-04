<?php
    session_start();
   
   
?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">

    <style>
        h1{
            display: grid;
            justify-content: center;
            align-items: center;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 >This is the home Page</h1>
  <form action="index.php" method="post">
    <input type="submit" name="logout" value="Logout">
  </form>
</body>
</html>
<?php

        if(isset($_POST["logout"])){
          session_destroy();
          header("location: locations.php");
        }


 
?>