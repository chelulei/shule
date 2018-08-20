
<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';
include 'functions.php';
include 'connect.php';
getUser();

if (isset($_GET['edit'])) {

    $id=$_GET['edit'];

    $class_sql="SELECT * FROM medical WHERE  medic_id= '$id'";

    $query=mysqli_query($con, $class_sql);
     $row=mysqli_fetch_array($query);

    $id=$row['medic_id'];
    $user=$row['User'];
    $Student=$row['Student'];
    $Date=$row['Date'];
    $Report=$row['Report'];
    $Action=$row['Action'];
    $Description=$row['description'];


}
?>


<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php

    include 'header.php';
    ?>
    <!-- /header -->
    <!-- Header-->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <a href="page-addmedical.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Medical Records</a>
                    <a href="page-medical.php" class="btn btn-info"><i class="fa fa-list"> </i> All Medical Records</a>

                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Medical Records</strong>
                            </div>
                            <div class="card-body">

                                <form action="update-medical.php" method="post" accept-charset="utf-8" class="form-horizontal" id="" enctype="multipart/form-data"
                                      style="margin-left: 100px; margin-right: 100px "
                                >
                                    <input type="hidden" name="user" value="<?php echo $user_id;?>" >
                                    <input type="hidden" name="id" value="<?php echo $id;?>" >
                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-2 col-form-label">Students</label>
                                        <div class="col-10">
                                            <select name="Student" id="Class" class="form-control" required>
                                                <option>---- Student's Name   ------</option>
                                                <?php
                                                $qry=mysqli_query($con," SELECT * FROM students");

                                                while($row=mysqli_fetch_array($qry)){

                                                   if($row['adm_No'] == $Student){
                                                        $selected = 'selected';
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    ?>

                                                    <option value="<?php echo $row['adm_No'];?>" <?php echo $selected ;?>> <?php echo $row['Surname'].' '.$row['Firstname'].' ' .$row['Middlename'];?> </option>
                                                    <?php
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="Date" class="form-control" id="colFormLabel" name="Date"  value="<?php echo $Date;?>" placeholder="Dte" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Sickness Rreport</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="colFormLabel" name="Report" value=" <?php echo $Report;?>" required>

                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Action Taken </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="colFormLabel" name="Action"  value="<?php echo $Action;?> " placeholder="Action Taken" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="colFormLabel" name="Description"  placeholder="Description" rows="2" required>

                                            <?php echo $Description;?>

                                            </textarea>
                                        </div>
                                    </div>

                                    <div class='form-group'><div class="col-md-3"></div><div class="col-md-9">
                                            <input type="submit" name="update" value="Update" id='submit' class='btn btn-primary' />
                                            <a href="page-medical.php" class="btn btn-danger">Cancel</a></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'?>
