<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['cust_login']);
// Delete all session variables
 session_destroy();

// Jump to login page
header('Location: cust_login.html');

?>