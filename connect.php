<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="opdrachten3a";

//Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
    die(display_melding(1, "Connection failed: " . $conn->connect_error));

} 
//else {echo "ok";}
?>