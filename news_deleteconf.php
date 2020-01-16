<?php include "header.php"; ?>

<h1 class="page-header">Delete News</h1>

<!-- main content -->

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Confirm Delete</h2>
		</div>
		<div class="box-content">
			<p>
				Are you sure you want to delete the news?
			</p>

			<?php
				//get user ID from URL
				$id = $_GET['id']; 
				$form_location = base_url()."news_delete_proc.php?id=".$id; 
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
			  <fieldset>
				<div class="control-group" style="height:200px;">
					<button type="submit" name="submit" value="Yes - Delete Blog Entry" class="btn btn-danger">Delete News</button>
					<button type="button" value="cancel" class="btn" onclick="window.location= 'http://localhost/lemunhs/news_manage.php';">Cancel</button>
			  </fieldset>
			</form> 
		</div>
	</div><!--/span-->
</div><!--/row-->

<!-- close main content -->
<?php include "footer.php"; ?>