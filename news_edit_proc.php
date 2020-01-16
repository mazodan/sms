<?php
	include "perfect_function.php";

	$table_name = 'news';

	//get user ID from URL
	$id = $_GET['id'];

	$page_title = $_POST['page_title'];
	$page_content = $_POST['page_content'];
	$date_published = $_POST['date_published'];
	$posted_by = $_POST['posted_by'];


	$user_editedvalues = array (
			"page_title" => $page_title,
			"page_content" => $page_content, 
			"date_published" => $date_published,
			"posted_by" => $posted_by
	);

	update($user_editedvalues, $id, $table_name);

	$recent_id = get_max($table_name);
    $whoami = _get_username_from_id($_SESSION['id']);

    $text = "Admin $whoami has successfully edited a news ";
    $text.= "with an ID of $recent_id";


    save_logs($text);
	header("Location: news_manage.php");
?>