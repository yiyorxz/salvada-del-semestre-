<?php 
$host = "db.inf.uct.cl";
$user = "fprieto";
$pass = "21570154";
$db = "A2023_fprieto";
$conn = new mysqli($host,$user,$pass,$db);
if ($conn-> connect_error) {
    die("Error: " . $conn-> connect_error);
} 
?>
