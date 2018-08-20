<?php
error_reporting(0);
include 'head.php';
include 'connect.php';
include "functions.php";
include 'sidebar.php';
getUser();

if (isset($_GET['edit'])) {

    $id=$_GET['edit'];

    $sql="SELECT * FROM exams WHERE exam_id= '$id'";

    $query=mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);

    $exam_id=$row['exam_id'];
    $exam=$row['exam'];
    $term=$row['term'];
    $class=$row['class'];
    $subject=$row['subject'];
    $date=$row['date'];

}
?>

<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php  include 'header.php';  ?>
    <!-- /header -->
    <!-- Header-->
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard </h1>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="page-newexam.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Exam</a></li>
                        <!-- <li><a href="page-management.php" class="btn btn-info"><i class="fa fa-folder-open"></i>Items</a></li> -->
                        <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">
                <div class="col-md-12">
                    <?php include 'errors.php'?>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Exams</strong>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" role="form" method="POST" action="update-exam.php">
                                <input type="hidden" name="user" value="<?php echo $user_id;?>">
                                <input type="hidden" name="id" value="<?php echo $exam_id;?>">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Exam Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="exam" value="<?php echo $exam;?>" " required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Select Term 1</label>
                                    <div class="col-sm-4">
                                        <select name="term" class="form-control" Value="<?php echo($term); ?>"
                                                required="">
                                            <?php if ($row['term'] == "Term1") : ?>
                                                <option value='Term 1' selected>Term 1
                                                </option>
                                            <?php else: ?>
                                                <option value='Term 1'>Term 1</option>
                                            <?php endif; ?>

                                            <?php if ($row['term'] == "Term 2"): ?>
                                                <option value='Term2' selected> Term 2
                                                </option>
                                            <?php else: ?>
                                                <option value='Term 2'>Term 2</option>
                                            <?php endif; ?>

                                            <?php if ($row['term'] == "Term 3"): ?>
                                                <option value='Term 3' selected> Term 3
                                                </option>
                                            <?php else: ?>
                                                <option value='Term 3'>Term 3</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Class</label>
                                    <div class="col-sm-4">
                                        <select name="class" id="Class" class="form-control">
                                            <option>---- Class's Name   ------</option>
                                            <?php
                                            $qry=mysqli_query($con," SELECT * FROM class");
                                            while($row=mysqli_fetch_array($qry)){

                                                if($row['classId']==$class)

                                                    $iselect="selected";
                                                else
                                                    $iselect="";
                                                ?>
                                                <option value="<?php echo $row['classId'];?>" <?php echo $iselect ;?> >  <?php echo $row['Class'];?> </option>
                                                <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Subject </label>
                                    <div class="col-sm-4">
                                        <select name="subject" class="form-control" required>
                                            <option>---- Subject's Name   ------</option>
                                            <?php
                                            $q=mysqli_query($con," SELECT * FROM subject");

                                            while($rows=mysqli_fetch_array($q)){

                                                if($rows['SubIdNo']==$subject)

                                                    $select="selected";
                                                else
                                                    $select="";
                                                ?>
                                                <option value="<?php echo $rows['SubIdNo'];?>" <?php echo $select;?>> <?php echo $rows['Name'];?> </option>
                                                <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control"  name="date" value="<?php echo $date;?>" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <input type="submit" name="update" class="btn btn-primary mr-2" value="Save">
                                    <a href="page-exams.php"> <button type="button" class="btn btn-danger">Cancel</button></a>

                                </div>
                        </div>

                        </form>
                        </div>
                    </div>


                </div><!-- .animated -->
            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
        <?php include 'footer.php';?>
