<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start(); // Start the session here
$db = mysqli_connect("localhost", "root", "", "gamehub");

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

require_once 'functions.php';
?>
