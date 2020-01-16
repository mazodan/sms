<?php include "header.php"; ?>

<h1 class="page-header">Add Account</h1>

<!-- main content -->

<div class="box-content">

	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Accounts</h2>
			</div>

			<div class="box-content">
				<?php $form_location = base_url()."user_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
					<div class="control-group">
							<label class="control-label">Username:</label>
							<div class="controls">
								<input type="text" class="span4" name="username" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Email:</label>
							<div class="controls">
								<input type="email" class="span4" name="email" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Password:</label>
							<div class="controls">
								<input type="password" class="span4" name="password" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">First Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="firstname" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Last Name:</label>
							<div class="controls">
								<input type="text" class="span4" name="lastname" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Account Type:</label>
							<div class="controls">
								<select class="span4" name="acct_type" required>
									<option value="">Select...</option>
									<option value="1">Super Admin</option>
									<option value="2">Admin</option>
								</select>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Status:</label>
							<div class="controls">
								<input type="checkbox" name="status" value="1"> Active?
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
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