<?php
$servername = "localhost";
$username = "fecske";
$password = "Admin2004";
$dbname = "fecske";

// Az alapértelmezett menüpontok
$menu = array(
    'Főoldal' => 'index.php',
    'Gondozottak' => 'gondozottak/gondozottak.php',
    'Elérhetőség' => 'Elerhetoseg/elerhetoseg.php',
    'Regisztráció' => 'regisztralas/regisztralas.php',
);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


