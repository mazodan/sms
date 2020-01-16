<?php
include "perfect_function.php";

$table_name = "users";
$id = $_GET['id'];
$photo = "";

$user_editedvalues = array (
    //columname from table => value from post
        "photo" => $photo
);

		update($user_editedvalues, $id, $table_name);

	$recent_id = get_max($table_name);
	$whoami = _get_username_from_id($_SESSION['id']);

	$text = "Super Admin " .$whoami. " has successfully deleted a photo ";
	$text.= "with an ID of $recent_id";

	save_logs($text);

header("Location: user_edit.php?id=".$id);

?>