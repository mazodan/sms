<?php

include "perfect_function.php";

$table_name = "manipulator";

$username = $_POST['username'];
$email = $_POST['email'];

$password = $_POST['password'];
$hashed_password = $password;

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$acct_type = $_POST['acct_type'];
$status = $_POST['status'];
if ($status!=1) {
	$status = 0;
}
$user_data = array(
	//columname from table => value from post
			"username" => $username, 
		
			"password" => $hashed_password, 
			"firstname" => $firstname,
			"lastname" => $lastname, 
			"acct_type" => $acct_type,
			"status" => $status
);
			insert($user_data, "manipulator");

	        $recent_id = get_max($table_name);
            $whoami = _get_username_from_id($_SESSION['id']);

            $text = "Super Admin $whoami has successfully added an account ";
            $text.= "with an ID of $recent_id";

            save_logs($text);

header("Location: user_manage.php");
?>