<?php
$name = $_POST["n"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$password = $_POST["p"];

// Secure database connection
$con = new mysqli("localhost", "root", "navod", "simple_webaplication", "3306");


$q= "INSERT INTO `data` (`Name`, `Email`, `Mobile`, `Password`) VALUES ('".$name."','".$email."','".$mobile."','".$password."')";

// Bind parameters to prevent SQL injection
$d =  $con->query($q);

// Execute query
if ($q > 0) {
    echo ("success");
} else {
    echo ("failed");
}

// Close connection

?>
