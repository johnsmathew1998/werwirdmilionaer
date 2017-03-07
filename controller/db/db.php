<?php
class connection{
function con($uname, $pw){
    $servername = "localhost";
    $username = "$uname";
    $password = "$pw";
    
    // Create connection
    $conn = new PDO($username, $password, "localhost");
    // Check connection
    if ($conn->connect_error)
    {
    die("Connection failed: " . $conn->connect_error);
    }
    
    
    $conn->close();
    }
}
?>

