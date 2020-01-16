<?php
	session_start();
	include "perfect_function.php";

	$table_name = 'users';

	//get user ID from URL
	$id = $_GET['id'];

	$username = $_POST['username'];
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$acct_type = $_POST['acct_type'];
	$status = $_POST['status'];
	if ($status!=1) {
		$status = 0;
	}

	$user_editedvalues = array (
			"username" => $username, 
			"email" => $email, 
			"firstname" => $firstname,
			"lastname" => $lastname, 
			"acct_type" => $acct_type,
			"status" => $status
	);

	update($user_editedvalues, $id, $table_name);

	$recent_id = get_max($table_name);
	$whoami = _get_username_from_id($_SESSION['id']);

	$text = "Super Admin " .$whoami. " has successfully edited an account ";
	$text.= "with an ID of $recent_id";

	save_logs($text);


	header("Location: user_manage.php");
?>