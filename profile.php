<?php include "header.php"; ?>

<h1>My Profile</h1>

<?php
$user_data = get_where("manipulator", $_SESSION['id']);

foreach ($user_data as $key => $row) {
    $id = $row['id'];
    $email = $row['email'];
    $username = $row['username'];
    $fname = $row['firstname'];
    $lname = $row['lastname'];
    $acct_type = $row['acct_type'];
    $photo = $row['photo'];
    $photo_url = base_url().'user_pics/'.$photo;
    $status = $row['status'];
}
?>

<table class="table">

<tr>
    <td> Username: <strong><?= $username ?></strong></td>
</tr>
<tr>
    <td> First Name: <strong><?= $fname ?></strong></td>
</tr>
<tr>
    <td> Last Name: <strong><?= $lname ?></strong></td>
</tr>



<!--dapat gender ito pero dapat merong table sa sql na gender-->
<tr>
    <td> Gender: <strong><?= $gender ?></strong></td>
</tr>


</table>

<a href="profile_edit.php?id=<?= $id ?>">
    <button type="button" class="btn btn-primary"> &nbsp; &nbsp; Edit Profile &nbsp; &nbsp;</button>
</a>

<?php include "footer.php"; ?>