<?php
include "header.php"; 
include "perfect_date.php";

$acct_type = _get_accttype_from_id($_SESSION['id']);

if ($acct_type=="2")
{
//	header("Location: no_access.php");
}
?>

<h1>HELLO, <?= _get_firstname_from_id($_SESSION['id']) ?></h1>

<h3>WELCOME TO DASHBOARD!</h3>



<div class="box-content">

<?php $create_news_url = base_url()."news_create.php"; ?>
<p>
    <a href="<?= $create_news_url ?>">
        <button type="button" class="btn btn-primary"> &nbsp; &nbsp; Log &nbsp; &nbsp;</button>
    </a>
</p>


<div class="row-fluid sortable">	
    <div class="box span12"> 
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white file"></i><span class="break"></span> Log Book </h2>
        </div>
        <div class="" style="margin-top: 20px; margin-left: 10px;">
            <form method="POST" action="" class="form-inline">
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name" id="full_name">
                &nbsp;
                <label for="equipment">Equipment borrowed:</label>
                <input type="text" name="equipment" id="equipment">
                &nbsp;
                <label for="date_borrow">Date borrowed:</label>
                <input type="date" name="date_borrow" id="date_borrow" class="input-medium">
                &nbsp;
                <label for="date_return">Date returned:</label>
                <input type="date" name="date_return" id="date_return" class="input-medium">
                &nbsp;
                <label for="remark">Remarks:</label>
                <input type="text" name="remark" id="remark" class="input-small">
                &nbsp;
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
        

        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
        
                <thead>
                  <tr>
                        <th>&nbsp;</th>
                      <th>Full Name</th>
                      <th>Equipment borrowed</th>
                      <th>date borrowed</th>
                      <th>date returned</th>
                      <th>remarks</th>
                  </tr>

                </thead>
            </table>
        </div>
    </div>
</div>
    
<?php include "footer.php"; ?>