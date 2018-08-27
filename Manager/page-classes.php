<?php
include 'head.php';

include 'connect.php';
include 'sidebar.php';
include 'functions.php';
getUser();
?>

    <div id="right-panel" class="right-panel">
    <!-- Header-->
<?php include 'header.php'; ?>
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
                        <li><a href="Page-addclasses.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Class</a>
                        </li>
                        <!-- <li><a href="page-management.php" class="btn btn-info"><i class="fa fa-folder-open"></i>Items</a></li> -->
                        <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content mt-3">
    <?php include  'errors.php';?>
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Classes </strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>Class Teacher</th>
                                <th>No.of Students</th>
                                <th>Status</th>
                                <th>Option</th>

                            </tr>
                            </thead>
                            <tbody>


                            <?php

                            //set counter variable 
                            $counter = 1;


                            $result = "SELECT * FROM class c JOIN user u ON(c.Classteacher=u.id) ";

                            $select = mysqli_query($con, $result);

                            //start of loop for displaying products
                            while ($row = mysqli_fetch_array($select)):
                                $c_id = $row['classId'];
                                $Class = $row['Class'];
                                $Classteacher = $row['Classteacher'];
                                $Nostudents = $row['Nostudents'];
                                $students = $row['students'];
                                ?>
                            <tr>
                                <td><?php echo $counter;
                                    $counter++; //increment counter by 1 on every pass
                                    ?></td>
                                <td><?php echo ucwords($row['Class']); ?></td>
                                <td><?php echo ucwords($row['Surname'] . ' ' . $row['Firstname']); ?> </td>
                                <td><?php echo($row['students']); ?> </td>
                                <td><?php if ($students == $Nostudents): ?>
                                        <p class="text-danger">Full</p>
                                    <?php else: ?>
                                        <p class="text-primary">Available</p>
                                    <?php endif ?></td>
                                <td>
                                    <a class="btn btn-primary" href="class-edit.php?update=<?php echo  $c_id ;?>" role="button"> <i
                                                class="fa fa-pencil"></i>EDIT</a>
                                    <a class="btn btn-danger delete_link" href="delete-class.php?delete=<?php echo  $c_id ;?>" role="button"> <i
                                                class="fa fa-trash-o"></i>DELETE</a>
                                </td>
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
<?php include 'footer.php' ?>