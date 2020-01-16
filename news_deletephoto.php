<?php
include "perfect_function.php";
session_start();

$table_name = "news";
$id = $_GET['id'];
$page_picture = "";

$user_editedvalues = array (
    //columname from table => value from post
        "page_picture" => $page_picture
);

update($user_editedvalues, $id, $table_name);

	$recent_id = get_max($table_name);
	$whoami = _get_username_from_id($_SESSION['id']);

	$text = "Admin $whoami has successfully deleted a news photo ";
	$text.= "with an ID of $recent_id";

	save_logs($text);
header("Location: news_edit.php?id=".$id);

?>