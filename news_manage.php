<?php include "header.php"; ?>
<?php include "perfect_date.php"; ?>

<h1 class="page-header">Logs</h1>

<!-- main content -->

<div class="box-content">

	<?php $create_news_url = base_url()."news_create.php"; ?>
	<p>
		<a href="<?= $create_news_url ?>">
			<button type="button" class="btn btn-primary"> &nbsp; &nbsp; Add Logs &nbsp; &nbsp;</button>
		</a>
	</p>


	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Logs</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
					  	  <th>&nbsp;</th>
						  <th>Fullname</th>
						  <th>Equipment Borrowed</th>
						  <th>Date borrowed</th>
						  <th>Date Returned</th>
						  <th>Remarks</th>
					  </tr>
				  </thead>   
				  <tbody>
				  <?php 
				  		$table_name = "manipulator";

				  		//get all records from users table
						$news_data = get($table_name);

						//fetch result set and pass it to an array (associative)
				  		foreach ($news_data as $key => $row) {
						$page_title = $row['page_title'];
						$page_content = $row['page_content'];
						//$date_published = $row['date_published'];
						$date_published = get_nice_date($row['date_published'], "full");
                        $posted_by = $row['posted_by'];
                        $page_picture = $row['page_picture'];
						$photo_url = base_url().'news_pics/'.$page_picture;
						$id = $row['id'];

				  		$edit_news_url = base_url().'news_edit.php?id='.$id;
				  		$delete_news_url = base_url().'news_deleteconf.php?id='.$id;
				  ?>
					<tr>
						<td class="center span2">
							<?php
							if ($page_picture == "") {
							echo "<i>No photo available.</i>";
							}
							else {
							?>
							<img src="<?= $photo_url ?>" style="height: 100;width: 100;" class="img-responsive">
							<?php
							}
							?>
						</td>
						<td class="center"><?= $page_title ?></td>
						<td class="center"><?= $page_content ?></td>
						<td class="center"><?= $date_published ?></td>
						<td class="center"><?= $posted_by ?></td>

						<td class="center">
							<a class="btn btn-danger" href="<?= $delete_news_url ?>">
								<i class="halflings-icon white trash"></i> delete 
							</a>
							<a class="btn btn-info" href="<?= $edit_news_url ?>">
								<i class="halflings-icon white edit"></i> edit
							</a>
						</td>
					</tr>
					<?php } ?>
				  </tbody>
				</table> 
			</div>
		</div>
	</div>
</div>

<!-- close main content -->

<?php include "footer.php"; ?>