<?php
session_start(); // Start the session


// Check if a session exists
if (isset($_SESSION)) {
    session_unset();     // Remove all session variables
    session_destroy();   // Destroy the session data on the server
}

// Redirect to the login page or home page
header("Location: index.html");
exit();
?>
