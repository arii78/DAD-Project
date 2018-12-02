<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['staff_login']);
// Delete all session variables
 session_destroy();

// Jump to login page
header('Location: staff_login.html');

?>