<?php
include "perfect_function.php";
session_start();
$page_title = $_POST['page_title'];
$page_content = $_POST['page_content'];
$table_name="manipulator";


	$whoami = _get_username_from_id($_SESSION['id']);
	$recent_id = get_max($table_name);
	


$news_data = array(
	"page_title" => $page_title, 
	"page_content" => $page_content, 
	"date_published" => time(),
	"posted_by" => $whoami
);

insert($news_data, "logs");


	$text = "Admin $whoami has successfully added a news ";
	$text.= "with an ID of $recent_id";

	save_logs($text);

header("Location: news_manage.php");

?>