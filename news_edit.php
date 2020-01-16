<?php include "header.php"; ?>

<?php
include "perfect_date.php";

	$id = $_GET['id'];

	$form_location = base_url()."news_edit_proc.php?id=".$id; 

	//select user record where ID (column from table) = user ID from URL 
	$get_newsData = get_where("news", $id);

	//fetch result and pass it  to an array
	foreach ($get_newsData as $key => $row) {
        $page_title = $row['page_title'];
        $page_content = $row['page_content'];
		//$date_published = $row['date_published'];
		$date_published = get_nice_date($row['date_published'], "full");
        $posted_by = $row['posted_by'];
		$page_picture = $row['page_picture'];
		$photo_url = base_url().'news_pics/'.$page_picture;
	}
?>

<h1 class="page-header">Edit News</h1>

<!-- main content -->
<div class="box-content">
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>
					<i class="halflings-icon white file"></i>
					<span class="break"></span>Additional Options
				</h2>
			</div>
			<div class="box-content">
				<?php
				if ($page_picture == ""){
				?>
				<a href="<?= base_url() ?>news_uploadphoto.php?id=<?= $id ?>">
					<button type="button" class="btn btn-primary">Upload Photo</button>
				</a>
				<?php
				} else {
				?>
				<img src="<?= $photo_url ?>" style="height: 200px;" class="img-responsive">
				<br><br>
				<a href="<?= base_url() ?>news_deletephoto.php?id=<?= $id ?>">
					<button type="button" class="btn btn-danger">Delete Photo</button>
				</a>
				<br>
				<?php
				}
				?>
		</div>
	</div>
</div>

<div class="box-content">

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>News</h2>
			</div>

			<div class="box-content">
				<?php $form_location = base_url()."news_edit_proc.php?id=".$id; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<input type="hidden" name="posted_by" value="<?= $posted_by ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Title:</label>
							<div class="controls">
							<textarea name="page_title" style="resize:none;" id="textarea2" rows="2"><?= $page_title ?></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Content:</label>
							<div class="controls">
                            <textarea name="page_content" style="resize:none;" class="span6"id="textarea2" rows="8"><?= $page_content ?></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Date:</label>
							<div class="controls">
                            <textarea name="date_published" style="resize:none;" id="textarea2" rows="2" disabled><?= $date_published ?></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Author:</label>
							<div class="controls">
                            <textarea name="posted_by" style="resize:none;" id="textarea2" rows="2" disabled><?= $posted_by ?></textarea>
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
							<a class="btn" href="news_manage.php">Cancel</a>
						</div>
						
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- close main content -->

<?php include "footer.php"; ?>