<?php
include 'head.php';
include 'connect.php';
include "functions.php";
include 'sidebar.php';
getUser();
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
                            <form class="form-horizontal" role="form" method="POST" action="newexam.php">
                                <input type="hidden" name="user" value="<?php echo $user_id;?>">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Exam Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="exam" placeholder="" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Select Term 1</label>
                                    <div class="col-sm-4">
                                        <select name="term"  class="form-control" required="">
                                            <option value=""></option>
                                            <option value="Term1">Term 1</option>
                                            <option value="Term2">Term 2</option>
                                            <option value="Term3">Term 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Class</label>
                                    <div class="col-sm-4">
                                        <select name="class" id="Class" class="form-control" required>
                                            <option>---- Class's Name   ------</option>
                                            <?php
                                            $qry=mysqli_query($con," SELECT * FROM class");

                                            while($row=mysqli_fetch_array($qry)){
                                                ?>
                                                <option value="<?php echo $row['classId'];?>"> <?php echo $row['Class'];?> </option>
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
                                            $qry=mysqli_query($con," SELECT * FROM subject");

                                            while($row=mysqli_fetch_array($qry)){
                                                ?>
                                                <option value="<?php echo $row['SubIdNo'];?>"> <?php echo $row['Name'];?> </option>
                                                <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control"  name="date" placeholder="" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <input type="submit" name="save" class="btn btn-primary mr-2" value="Save">
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
