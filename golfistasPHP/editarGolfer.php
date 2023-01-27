<?php
require('loginBD.php');
$id = 1;
$stmt = $conn->prepare("SELECT * from golfistas WHERE id=:id");
$stmt->bindParam(':id',$id);
$stmt -> execute();


$result = $stmt->fetch(PDO::FETCH_ASSOC);

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
    <form action="modGolfer.php" method="post">
        Nombre<input type="text" name="nombre" id="id" value='<?php echo$result["nombre"] ?>'><br>
        Nacionalidad<input type="text" name="nacionalidad" id="nacionalidad" value='<?php echo$result["nacionalidad"] ?>'><br>
        Altura<input type="text" name="altura" id="altura" value='<?php echo$result["altura"] ?>'><br>
        Debut<input type="text" name="debut" id="debut" value='<?php echo$result["debut"] ?>'><br>
        Palmares<input type="text" name="palmares" id="palmares" value='<?php echo$result["palmares"] ?>'><br>
        <input type="hidden" name="id" id="id" value='<?php echo$result["id"] ?>'><br>
        <input type="submit" value="MODIFICAR"/>
    </form>
    <br><br>
    <a href="golfers.php">Volver sin modificar</a>
</body>
</html>