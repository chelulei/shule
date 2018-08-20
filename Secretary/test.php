<?php 
include '../head.php';
// include 'functions.php';
include 'sidebar.php';
 ?>

<section id="container" class="">
<?php
  include 'header.php';   
?>

<link href="css/bootstrapValidator.css" rel="stylesheet">
<style>       
#success_message{ display: none;}
</style>
<section id="main-content" style="padding-left: 2%; padding-right: 2%">
<section class="wrapper">
<div class="row">
<div class="col-lg-12">
<?php
include '../connect.php';    

$userID=$_SESSION['userID']; //get the userID of the user logged in

$qryUserInfo="SELECT * FROM teacher WHERE IDno='$IDno'"; //get the personal information of the user       
$run=mysqli_query($con, $qryUserInfo);
$row=mysqli_fetch_array($run);

        $TSC_NO=$_POST['TSC_NO'];
        $Surname=$_POST['Surname'];
        $Middlename=$_POST['Middlename'];
        $Firstname=$_POST['Firstname'];
        $Dateofbirth=$_POST['Dateofbirth'];
        $Gender=$_POST['Gender'];
        $Homeaddress=$_POST['Homeaddress'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $Designation=$_POST['Designation'];
        $Classes=$_POST['Classes'];
        $DateEmp=$_POST['DateEmp'];
        $YearsExp=$_POST['YearsExp'];
        $Resume=$_POST['Resume'];
        $Salary=$_POST['Salary'];

?>
<h1 class="page-header"><br>Profile</h1>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<div class="panel-body">
<header><h3 style="color:Back"><b><?php echo ucwords($Firstname." ".$Middlename." ".$Surname); ?>
</b></h3> </header><br>
<table class ="table">
<tr>
<td style="align-content: center">
<!-- start image -->
<link rel="stylesheet" href="ui/style.css"/>

</Firstnametd>

<td>
     <!-- Image update link -->
<h2><b>Personal Information</b></h2>
<h3><b>Civil Status: </b> <?php echo ucwords($Gender); ?> </h3>
<h3><b>Birth Date: </b>  <?php echo $Dateofbirth; ?> </h3>
<h3><b>Home Address: </b>  <?php echo $Homeaddress; ?> </h3>
<h3><b>Current Address: </b>  <?php echo $Classes; ?> </h3>
<h3><b>Contact Number 2: </b>  <?php echo $Phone; ?> </h3>
<h3><b>Email Address: </b>  <?php echo $Email; ?> </h3><br>

</td>
</tr>
</table>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Edit Contact Information</button>
 &nbsp; &nbsp;

<!--modal will be displayed once Edit Contact Information is clicked-->
<div class="modal fade" id="modal-1">
<div class="modal-dialog modal-lg">
   <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button> <!--button you can click to exit the modal-->
            <h3 class="modal-title">Edit Contact Information </h3>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" id="contact_form" method="POST" action="editContactInfo.php"> <!--once save is clicked, it will be redirected to the same page-->
                 <input type="hidden" name="id"  value="<?php echo $id;?>" />
                <div class="form-group">
                    <label class="control-label col-lg-4" class="control-label col-lg-2">Email Address<span class="required">*</span></label>
                    <div class="col-sm-6">
                        <input id="cp1" type="text"  size="16" name="emailAdd"  value="<?php echo $emailAdd;?>"  class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4" class="control-label col-lg-2">Contact Number 1<span class="required">*</span></label>
                    <div class="col-sm-6">
                        <input type="telephoneNum"  size="16" name="contactNum"  value="<?php echo $contactNum?>" onkeypress="return isNumber(event)"
                         class="form-control" maxlength="11"   required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4" class="control-label col-lg-2">Contact Number 2</label>
                    <div class="col-sm-6">
                        <input    size="16" name="contactNum2" value="<?php echo $contactNum2?>"  type="telephoneNum"  
                          onkeypress="return isNumber(event)"  class="form-control"  maxlength="11">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4" class="control-label col-lg-2">Current Address <span class="required">*</span></label>
                    <div class="col-sm-6">
                        <input id="cp1" type="text"  size="16" name="currentAddress"  value="<?php echo $currentAddress?>"  class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                   
                    <input type="submit" class="btn btn-primary" name="save" value="Save"> 
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--End of editing info modal -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-2">Edit Password</button>
<div class="modal fade" id="modal-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Edit Password</h3>
            </div>

            <div class="modal-body">
                <form class="form-validate form-horizontal " 
                method="POST" action="editPassword.php" id="contact_form">
                    <div class="form-group">
                        <label class="control-label col-lg-4" class="control-label col-lg-4" style="font-weight: bold;">Current password <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input id="cp1" type="password"  size="16" name="currentPass" class="form-control" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" class="control-label col-lg-4" style="font-weight: bold;">New password<span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input id="cp1" type="password"  size="16" name="newPass" class="form-control" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" class="control-label col-lg-4" style="font-weight: bold;">Confirm password<span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input id="cp1" type="password"  size="16" name="confirmNewPass" class="form-control" required="" onchange="myFunction(this.value)">
                        </div>
                    </div>
                            
                    <div class="modal-footer">
                        
                        <button class="btn btn-primary" name="submitPass" type="submit" value="<?php echo $id;?>">Save</button>
                    </div>
                </form>  
            </div>  
        </div>
    </div>
</div>
<!--End of editing password profile-->
</div>
</section>
</div>
</div>
</section>
</section>

<script>
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
</script>
<script src="js/bootstrapValidator.js"></script>
<script src="js/script.js"></script>