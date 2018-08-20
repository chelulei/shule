<?php 

include("head.php");
include "functions.php";
include 'connect.php';
getUser();
include 'sidebar.php';

if (isset($_GET['sus'])) {
    $query = "UPDATE students SET Suspension = 'suspended' WHERE adm_No = '$_GET[sus]' ";
    $run = mysqli_query($con, $query);
} elseif (isset($_GET['back'])){
    $query = "UPDATE students SET Suspension = 'suspend' WHERE adm_No = '$_GET[back]' ";
    $run = mysqli_query($con, $query);
}
?>
    <!-- Left Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
       <?php include 'header.php'; ?>
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
                            <!-- <li><a href="Page-addstock.php" class="btn btn-info"><i class="fa fa-plus"></i>New Students</a></li> -->
                            <li><a href="page-newstudents.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Student</a></li>
                            <li><a href="page-students.php" class="btn btn-info"><i class="fa fa-bars"></i> View Students</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

<?php include 'errors.php'?>
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Admin No.</th>
                    <th>Full Name</th>
                    <th>Class</th>
                    <th>Parent Name</th>
                    <th>Parent Mobile Number</th>
                    <th> Actions </th>
                </tr>
                </thead>
                <tbody>

                <?php

                $counter = 1;

                $result = "SELECT * FROM students s JOIN class c ON(s.Class=c.classId)";
                $select= mysqli_query($con,$result);

                //start of loop for displaying products
                while($row = mysqli_fetch_array($select)):

                    $adm_No=$row['adm_No'];
                    $surname = $row['Surname'];
                    $Middlename=$row['Middlename'];
                    $Firstname=$row['Firstname'];
                    $Class=$row['Class'];
                    $Parentname=$row['Parentname'];
                    $Phone=$row['Phone'];
                    $sus=$row['Suspension'];
                    ?>
                <tr>
                    <td><?php echo $counter;
                        $counter++; //increment counter by 1 on every pass
                        ?></td>
                    <td><?php echo $row['adm_No'];?></td>
                    <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'] );?> </td>
                    <td><?php echo ucwords($row['Class']);?></td>
                    <td><?php echo ucwords($row['Parentname']);?></td>
                    <td><?php echo $row['Phone'];?></td>

                    <td>
                        <div class="btn-group" role="group">
                        <a href="page-studentsprofile.php?info=<?php echo  $adm_No; ?>"  class="btn btn-outline-info">
                            <i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                        <a href="page-editstudents.php?edit=<?php echo  $adm_No; ?>"  class="btn btn-outline-primary">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>

                        <?php if($sus == 'suspend' || $sus == ''): ?>
                            <a href="page-students.php?sus=<?php echo  $adm_No; ?>"  class="btn btn-outline-danger">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Suspend</a>
                        <?php else: ?>
                            <a href="page-students.php?back=<?php echo  $adm_No; ?>"  class="btn btn-danger">
                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Suspended</a>
                        <?php endif ?>
                         </div>
                    </td>
                </tr>
                <?php endwhile;

                echo '</tr>'
                ?>

                </tbody>
            </table>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
    <?php include 'footer.php';?>