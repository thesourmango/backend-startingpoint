<?php
// Start the session
session_start();

// An easy way of sanitizing user input, run all user submitted data through this one to prevent XSS
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Database configuration
$servername = "localhost";
$dbname = "bistromd";
$username = "bistromd";
include "secrets.php";
// secrets.php looks something like this:
// <?php $password = "sup3rs3cr3t";


?>