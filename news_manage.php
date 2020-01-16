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
							$table_name = "item_logs";

							//get all records from users table
							$log_data = get($table_name);

							//fetch result set and pass it to an array (associative)
							foreach ($log_data as $key => $row) {
							$full_name = $row['full_name'];
							$equipment = $row['equipment'];
							$date_borrow = $row['date_borrow'];
							$date_return = $row['date_return'];
							$remark = $row['remark'];
							$id = $row['id'];
						?>
						<tr>
							<td class="center span2">
							<?= $id ?>
							</td>
							<td class="center"><?= $full_name ?></td>
							<td class="center"><?= $equipment ?></td>
							<td class="center"><?= $date_borrow ?></td>
							<td class="center"><?= $date_return ?></td>
							<td class="center"><?= $remark ?></td>

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