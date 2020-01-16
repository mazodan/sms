<?php
	session_start();
	include "perfect_function.php";

	$table_name = 'manipulator';

	//get user ID from URL
	$id = $_GET['id'];

	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$status = _get_status_from_id($_GET['id']);
	if ($status!=1) {
		$status = 0;
	}

	$user_editedvalues = array (
			"username" => $username, 
			"firstname" => $firstname,
			"lastname" => $lastname, 
			"status" => $status
	);

	update($user_editedvalues, $id, $table_name);

	$recent_id = get_max($table_name);
	$whomai = _get_username_from_id($_SESSION['user_id']);

	$text = "User $whomai has successfully edited his/her Profile.";
	save_logs($text); 

	header("Location: profile.php");
?>