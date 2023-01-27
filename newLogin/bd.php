<?php
$json = file_get_contents('VarabilesJson.json');
$json_data = json_decode($json);

print_r($json_data);

$severname = $json_data["servername"];
$username = $json_data["username"];
$password = $json_data["password"];


try {
    
    $conn = new PDO("mysql:host=$severname;dbname=users",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $x) {
    echo "Connection failed: ".$x->getMessage();
}




?>