<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username <input type="text" name="username"/>
        Password <input type="text" name="passw"/>
        <input type="submit" value="enviar"/>
    </form>
</body>
</html>
<?php
require("loginBD.php");
session_start();


if (isset($_POST["passw"])) {

    $stmt = $conn->prepare("SELECT id from users WHERE username=:us AND password=:pw");
    $stmt -> bindParam(':us',$_POST['username']);
    $stmt -> bindParam(':pw',$_POST['passw']);
    $stmt -> execute();
    
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if (count($stmt->fetchAll())==1) {
        header("Location:home.php");
    }

}







?>