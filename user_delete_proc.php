<?php
session_start();
include "perfect_function.php";

$submit = $_POST['submit'];
if ($submit=='cancel') {
	header("Location: user_manage.php");
}

$table_name = "users";

//get user ID from URL
$id = $_GET['id'];

delete($id, $table_name);

	$recent_id = get_max($table_name);
	$whoami = _get_username_from_id($_SESSION['id']);

	$text = "Super Admin $whoami has successfully deleted an account ";
	$text.= "with an ID of $recent_id";

	save_logs($text);

header("Location: user_manage.php");

?>