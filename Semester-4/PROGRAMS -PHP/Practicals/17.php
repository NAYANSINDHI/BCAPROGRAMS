<?php
session_start();
$value = "Value to be stored as a cookie";

// Set cookie
setcookie("cookieName", $value);

// Store session data
$_SESSION["username"]= "JohnDoe";
?>