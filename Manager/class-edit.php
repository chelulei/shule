
<?php
error_reporting(0);
include 'connect.php';
include 'head.php';
include 'sidebar.php';
include 'functions.php';
getUser();
if (isset($_GET['update'])) {
   $id=$_GET['update'];
    $class_sql="SELECT * FROM class WHERE  classId= '$id'";

    $class_query=mysqli_query($con, $class_sql);
    $class_rs=mysqli_fetch_array($class_query);

$Idno=$class_rs['classId'];
$Class=$class_rs['Class'];
$Classteacher = $class_rs['Classteacher'];
$Nostudents=$class_rs['Nostudents'];
$students=$class_rs['students'];

}
?>
<style>
    #auto{
        background-color:#eee;
        cursor:pointer;
    }
</style>
<div Idno="right-panel" class="right-panel">

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
                    <ol class="breadcrumb text-right">
                        <li><a href="page-classes.php" class="btn btn-danger">
                                <i class="fa fa-arclass_rs-left" aria-hIdnoden="true"></i></i>Back</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="class_rs">
                <div class="col-md-12">
                    <?php include 'errors.php'?>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edit Class</strong>
                        </div>
                        <div class="card-body">

                            <div class="form"  style="align-content: center;padding-left: 120px;
                             padding-right: 120px">
                                <form class="form-horizontal" role="form" method="POST" action="update-class.php">
                                    <div class="form-group row">
                                        <input type="hidden" name="id" value="<?php echo $Idno;?>">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Classes</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" Idno="inputtext" name="Class" value="<?php echo $Class;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Class teacher</label>
                                        <div class="col-sm-10">
                                            <select name="Classteacher" class="form-control">

                                                <?php
                                                $teach=mysqli_query($con,"SELECT * FROM user WHERE role='Teacher'");
                                                while($row =mysqli_fetch_array($teach)) : ?>
                                                    <?php if($row['id'] == $Classteacher){
                                                        $selected = 'selected';
                                                    } else {
                                                        $selected = '';
                                                    }
                                                    ?>
                                                    <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>>
                                                        <?php echo $row['Surname'].' '.$row['Firstname'].' '.$row['Middlename']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">No Student</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control"  name="students" value="<?php echo $students;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Max Student</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="Nostudents" value="<?php echo $Nostudents;?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="page-title" style="margin-left: 30px">
                                        <input type="submit" value="Save" name ="update" class="btn btn-primary" />
                                        <a href="page-classes.php"> <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button></a>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->
<?php include 'footer.php' ;
?>