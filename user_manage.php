<?php include "header.php"; 

$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}
?>

<h1 class="page-header">Accounts</h1>

<!-- main content -->

<div class="box-content">

	<?php $create_user_url = base_url()."user_create.php"; ?>
	<p>
		<a href="<?= $create_user_url ?>">
			<button type="button" class="btn btn-primary"> &nbsp; &nbsp; Add Account &nbsp; &nbsp;</button>
		</a>
	</p>


	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Accounts</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
					  	  <th>&nbsp;</th>
						  <th> Username</th>
						  <th> Email</th>
						  <th> First Name</th>
						  <th> Last Name</th>
						  <th> Account Type</th>
						  <th> Active</th>
						  <th class="span4">Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  <?php 
				  		$table_name = "manipulator";

				  		//get all records from users table
						$user_data = get($table_name);

						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {
						$fname = $row['firstname'];
						$lname = $row['lastname'];
						$username = $row['username'];
					
						$acct_type = $row['acct_type'];
					
				  		$edit_user_url = base_url().'user_edit.php?id='.$id;
				  		$delete_user_url = base_url().'user_deleteconf.php?id='.$id;
				  ?>
					<tr>
						<td class="center span2">
							<?php
							if ($photo == "") {
							echo "<i>No photo available.</i>";
							}
							else {
							?>
							<img src="<?= $photo_url ?>" style="height: 100;width: 100;" class="img-responsive">
							<?php
							}
							?>
						</td>
						<td class="center"><?= $username ?></td>
						<td class="center"><?= $email ?></td>
						<td class="center"><?= $fname ?></td>
						<td class="center"><?= $lname ?></td>
						<td class="center">
							<?php
							if($acct_type==1) {
							?>
							<span class="label label-info">SUPER ADMIN</span>
							<?php
							} else {
							?>
							<span class="label label-warning">ADMIN</span>
							<?php
							}
							?>
						</td>
						<td style="text-align: center;">
							<?php
							if($status==1) {
							?>
							<i class="icon-ok" style="color: green;">
							<?php
							} else {
							?>
							<i class="icon-remove" style="color: red;">
							<?php
							}
							?>
						</td>
						<td class="center">
							<a class="btn btn-danger" href="<?= $delete_user_url ?>">
								<i class="halflings-icon white trash"></i> delete 
							</a>
							<a class="btn btn-info" href="<?= $edit_user_url ?>">
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