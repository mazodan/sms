<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SESSION['id']=="") {
	header("Location: login.php");
}

?>