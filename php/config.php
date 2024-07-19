<?php

// Database connection details
$host = 'localhost';
 $dbname = 'u944597293_askshopkeeper';
 $username = 'u944597293_askshopkeeper';
 $password = 'ASKshopkeeper@124';

//$dbname = 'u944597293_successdesire';
//$username = 'root';
//$password = '';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If there is an error, display the error message
    die("Connection failed: " . $e->getMessage());
}

// Export the PDO instance as a global variable
$GLOBALS['pdo'] = $pdo;