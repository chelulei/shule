
<?php
error_reporting(0);
include 'head.php';
include 'connect.php';
include "functions.php";
include 'sidebar.php';
getUser()
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
                        <!-- <li><a href="Page-addclasses.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Class</a></li> -->
                        <li><a href="#" class="btn btn-info"><i class="fa fa-print"></i> Print Class Attendance</a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <?php include 'errors.php';?>
        <div class="animated fadeIn">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Classes Attendance </strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Class</th>
                                    <th>Students</th>
                                    <th>Day</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                if (isset($_GET['view'])) {

                                $id=$_GET['view'];}
                                //set counter variable
                                include 'connect.php';
                                $counter = 1;
                                //start of loop for displaying products
                                $result =mysqli_query($con, "SELECT * 
                                  FROM attendance at JOIN students st ON(at.student=st.adm_No) 
                                  JOIN class c ON(at.class_id=c.classId) 
                                     WHERE at.class_id='$id'");

                                while($row = mysqli_fetch_array($result )):
                                    //start of loop for displaying products
                                    $id=$row['classId'];
                                    $Class=$row['Class'];
                                    $remarks=$row['remarks'];
                                    $status=$row['status'];
                                    $date=$row['date'];
                                    $day=$row['day'];?>

                                    <tr>
                                        <td>
                                            <?php echo $counter++;?>
                                        </td>

                                        <td><?php echo ucwords($Class);?> </td>
                                        <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename']);?></td>
                                        <td><?php echo $day;?> </td>
                                        <td><?php echo $date;?> </td>
                                        <td><?php echo $status;?> </td>
                                    </tr>
                                <?php endwhile; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->

        <?php include 'footer.php';?>
