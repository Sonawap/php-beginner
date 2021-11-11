<?php
session_start();

$_SESSION['name'] = "Paul Sola Moses";
$_SESSION['age'] = 19;

// session_destroy()
session_unset();
// echo $_SESSION['age'];
?>