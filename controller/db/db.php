<?php
if (!defined("USERNAME")) {
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("SERVER", "localhost");
    define("DATABASE", "wwm");
}
if (isset($_SERVER["HTTP_REFERER"])) {
    $_SERVER["HTTP_REFERER"] = explode("?", $_SERVER["HTTP_REFERER"])[0];
}

try {
    $con = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Keine Verbindung zur Datenbank.";
    exit;
}
?>