<?php include "header.php"; ?>

<h1 class="page-header">Edit Account</h1>

<!-- main content -->
<?php
	//get user ID from URL
	$id = $_GET['id'];

	$form_location = base_url()."user_edit_proc.php?id=".$id; 
	$table_name = "manipulator";

	//select user record where ID (column from table) = user ID from URL 
	$get_userData = get_where($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($get_userData as $key => $row) {
		$id =  $row['id'];
		$username =  $row['username'];
		$email =  $row['email'];
		$firstname =  $row['firstname'];
		$lastname = $row['lastname'];
		$acct_type = $row['acct_type'];
		$photo = $row['photo'];
		$photo_url = base_url().'user_pics/'.$photo;
		$status = $row['status'];
	}
	?>
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
				if ($photo == ""){
				?>
				<a href="<?= base_url() ?>user_uploadphoto.php?id=<?= $id ?>">
					<button type="button" class="btn btn-primary">Upload Photo</button>
				</a>
				<?php
				} else {
				?>
				<img src="<?= $photo_url ?>" style="height: 200px;width: 200px;" class="img-responsive">
				<br><br>
				<a href="<?= base_url() ?>user_deletephoto.php?id=<?= $id ?>">
					<button type="button" class="btn btn-danger">Delete Photo</button>
				</a>
				<br>
				<?php
				}
				?>
			</div>
		</div>
	</div>

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Accounts</h2>
			</div>
			<div class="box-content">

				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
					<div class="control-group">
							<label class="control-label">Username:</label>
							<div class="controls">
								<input type="text" class="span4" name="username" value="<?= $username ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Email:</label>
							<div class="controls">
								<input type="email" class="span4" name="email" value="<?= $email ?>" required>
							</div>
						</div>

						<!-- password (should be hidden) -->
						<input type="hidden" class="span4" name="password" value="<?= $username ?>" required>

						<div class="control-group">
							<label class="control-label">First Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="firstname" value="<?= $firstname ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Last Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="lastname" value="<?= $lastname ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Account Type:</label>
							<div class="controls">
								<select class="span4" name="acct_type" required>
									<?php
									if ($acct_type==1) {
									?>
										<option value="1">Super Admin</option>
										<option value="2">Admin</option>
									<?php
									} else {
									?>
										<option value="1">Super Admin</option>
										<option value="2">Admin</option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Status:</label>
							<?php
							if ($status==1) {
								$attribute="checked";
							} else {
								$attribute="";
							}
							?>
							<div class="controls">
								<input type="checkbox" name="status" value="1" <?= $attribute ?>> Active?
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
							<a class="btn" href="user_manage.php">Cancel</a>
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