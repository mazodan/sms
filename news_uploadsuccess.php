<?php include "header.php"; ?>

<h1 class="page-header">Upload Success</h1>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Upload Success</h2>
		</div>
		<div class="box-content">
			<div class="alert alert-success">Your file was successfully uploaded!</div>

			<p>
				<a href="<?= base_url() ?>news_manage.php"><button type="button" class="btn btn-primary">Return to Manage News Page</button></a>
			</p>
		</div>
	</div><!--/span-->
</div><!--/row-->

<?php include "footer.php"; ?>