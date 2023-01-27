<?php
require('loginBD.php');

$sql = "UPDATE golfistas SET nombre = :nombre,
                        nacionalidad = :nacionalidad,
                        altura = :altura,
                        debut = :debut,
                        palmares = :palmares
        WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':nombre', $_POST["nombre"], PDO::PARAM_STR);
$stmt->bindParam(':nacionalidad', $_POST["nacionalidad"], PDO::PARAM_STR);
$stmt->bindParam(':altura', $_POST["altura"], PDO::PARAM_STR);
$stmt->bindParam(':debut', $_POST["debut"], PDO::PARAM_STR);
$stmt->bindParam(':palmares', $_POST["palmares"], PDO::PARAM_STR);
$stmt->bindParam(':id', $_POST["id"], PDO::PARAM_STR);


if ($stmt->execute()==true) {
    header("Location: golfers.php");
}

?>