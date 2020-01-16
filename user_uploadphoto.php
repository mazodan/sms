<?php include "header.php"; ?>

<?php 
	session_start(); 
	$id = $_GET['id'];
?>

<h1 class="page-header">Upload Photo</h1>

<!-- main content -->
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Upload Image</h2>
		</div>
		<div class="box-content">
			<?php
			if (isset($_SESSION['pic_errormsg'])) {
			?>
			<div class="alert alert-warning">
				<?= $_SESSION['pic_errormsg'] ?>
			</div>
			<?php
			}
			unset($_SESSION['pic_errormsg']);
			?>

			<form method="post" action="<?= base_url() ?>user_uploadphoto_proc.php?id=<?= $id ?>" enctype="multipart/form-data">
			<p style="margin-top:24px;">
				Please choose a file from your computer and then press 'Upload'.
			</p>
			  <fieldset>
				<div class="control-group" style="height:200px;">
				  <label class="control-label" for="fileInput">File input</label>
				  <div class="controls">
					<input class="input-file uniform_on" id="fileInput" name="fileToUpload" type="file" required>
				  </div>
				</div>       
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Upload</button>
				  <a href="user_edit.php?id=<?= $id ?>" value="Cancel" class="btn">Cancel</a>
				</div>
			  </fieldset>
			</form>   
		</div>
	</div><!--/span-->
</div><!--/row-->

<!-- close main content -->

<?php include "footer.php"; ?>