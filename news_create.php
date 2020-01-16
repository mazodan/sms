<?php include "header.php"; ?>

<h1 class="page-header">Input Log</h1>

<!-- main content -->

<div class="box-content">

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Log Entries</h2>
			</div>

			<div class="box-content">
				<?php $form_location = base_url()."news_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Title:</label>
							<div class="controls">
								<input type="text" class="span4" name="page_title" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Content:</label>
							<div class="controls">
							<textarea name="page_content" style="resize:none;" class="span6"id="textarea2" rows="8" required></textarea>
							</div>
						</div>

						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save Log</button>
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