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
                        <li><a href="page-newexam.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Exams</a></li>
                        <!-- <li><a href="page-management.php" class="btn btn-info"><i class="fa fa-folder-open"></i>Items</a></li> -->
                        <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content mt-3">
        <?php include 'errors.php'?>
        <div class="animated fadeIn">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Exams </strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Exam Name</th>
                                    <th>Term</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include 'connect.php';

                                $result = "SELECT * FROM exams e JOIN subject s ON(e.subject=s.SubIdNo) JOIN class c ON(e.class = c.classId) ";
                                $select= mysqli_query($con,$result);

                                while($row=mysqli_fetch_array( $select)):
                                    $id= $row['exam_id'];
                                ?>
                                <tr>
                                    <td><?php echo $row['Class'];?></td>
                                    <td><?php echo $row['Name'];?></td>
                                    <td><?php echo $row['exam'];?></td>
                                    <td><?php echo $row['term'];?> </td>
                                    <td><?php echo formatDate($row['date']);?></td>
                                    <td><a href="page-editexam.php?edit=<?php echo  $id; ?>"  class="btn btn-primary">
                                            <i class="fa fa-edit"></i><span></span>Edit</a>
                                        <a class="btn btn-danger delete_link" href="delete-exam.php?delete=<?php echo  $id; ?>" ><i class="fa fa-trash-o"></i>Trash<span class="text-muted"></span></a></td>
                                </tr>
                                <?php endwhile;?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
        <?php include 'footer.php';?>
