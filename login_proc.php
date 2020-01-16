<?php
include "perfect_function.php";
session_start();

$table_name = "manipulator";
$username = $_POST['username'];
$password = $_POST['password'];

$pword_table = _get_pword_from_username($username, $table_name);
$user_id = _get_id_from_username($username);
$status = _get_status_from_id($user_id);

if($status == 0) {
	$_SESSION['error_msg'] = "Your account is inactive.";
	header("Location: login.php");
} elseif (isset($pword_table)) {
	$result = _verify_hash($password, $pword_table);

	if ($result==true) {
		$_SESSION['id'] = $user_id;

		$acct_type = _get_accttype_from_id($user_id);

		if ($acct_type == 1) {
			header("Location: dashboard.php");
		} else {
			header("Location: profile.php");
		}

	}
	else {
		$_SESSION['error_msg'] = "Password is incorrect. Please try again.";
		header("Location: login.php");
	}
} else {
	$_SESSION['error_msg'] = "Username invalid. Please try again.";
	header("Location: login.php");
}
	$recent_id = get_max($table_name);
	$whoami = _get_username_from_id($_SESSION['id']);

	$text = "Admin $whoami has successfully logged in ";
	$text.= "with an ID of $recent_id";

	save_logs($text);
?>