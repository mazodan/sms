<?php include "header.php"; ?>

<h1><b> My Profile </h1>

<hr>
<!-- main content -->
<?php
	$id = $_GET['id'];

	$form_location = base_url()."profile_edit_proc.php?id=".$id; 
	$table_name = "manipulator";

	//select user record where ID (column from table) = user ID from URL 
	$get_userData = get_where($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($get_userData as $row) 
	{
		$id =  $row['id'];
		$username = $row['username'];
		$firstname =  $row['firstname'];
		$lastname = $row['lastname'];

	}
	?>



				<form class="form-horizontal" method="post" action="<?= $form_location ?>">

					<label>Username: &nbsp;&nbsp <input type="text" name="username" value="<?= $username ?>" required></label>

					<hr>
					

					<label>Firstname: &nbsp;&nbsp <input type="text" name="firstname" value="<?= $firstname ?>" required></label>
					
					
					<hr>

					<label>Lastname: &nbsp;&nbsp <input type="text" name="lastname" value="<?= $lastname ?>" required></label>
					

					<br>

					<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
						
							
				</form>
	

<!-- close main content -->

<?php include "footer.php"; ?>