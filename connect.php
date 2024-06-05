<?php
$servername = "localhost";
$username = "slezakdb";
$password = "Databaza1";
$dbname = "northwind24"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Spojenie zlyhalo: " . $conn->connect_error);
}
?>