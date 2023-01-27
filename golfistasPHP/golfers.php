<?php
//require('login.php');
require('loginBD.php');

$stmt = $conn->prepare("SELECT * from golfistas");
$stmt -> execute();


$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($result);

foreach ($result as $row) {
    print $row["id"] ." ". $row["nombre"] ." ". $row["nacionalidad"] . " - ";
    print $row["altura"] ." ". $row["debut"] ." ". $row["palmares"] . " - ";
    print "<a href='editarGolfer.php'>editar</a> <a href='borrarGolfer'>Borrar</a></br>";
}
print "<a href='crearGolfer.php'>Crear golfista</a></br>";


?>