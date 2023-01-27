<?php
require('loginBD.php');

var_dump($_POST["nombre"]);

$sql = "INSERT INTO golfistas (nombre,nacionalidad,altura,debut,palmares) VALUES 
                                (:nombre,:nacionalidad,:altura,:debut,:palmares)";

var_dump($_POST["nombre"]);

$stmt = $conn->prepare($sql);
var_dump($_POST["nombre"]);
$stmt->bindParam(':nombre', $_POST["nombre"], PDO::PARAM_STR);
$stmt->bindParam(':nacionalidad', $_POST["nacionalidad"], PDO::PARAM_STR);
$stmt->bindParam(':altura', $_POST["altura"], PDO::PARAM_STR);
$stmt->bindParam(':debut', $_POST["debut"], PDO::PARAM_STR);
$stmt->bindParam(':palmares', $_POST["palmares"], PDO::PARAM_STR);

if ($stmt->execute()==false) {
    header("Location: golfers.php");
}

?>