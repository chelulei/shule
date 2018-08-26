<?php
include 'head.php';
include 'sidebar.php';
include 'functions.php';
include 'connect.php';
getUser();
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
                            <li><a href="page-fess.php" class="btn btn-info"><i class="fa fa-plus"></i>New Payment</a></li>
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
                                <strong class="card-title">Pay Fees</strong>
                            </div>
                            <div class="card-body">

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>student</th>
                                        <th>Class</th>
                                        <th>Tearm</th>
                                        <th>Year</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    include 'connect.php';

                                    $result = "SELECT * FROM payments p JOIN students s ON(p.Student=s.adm_No)
                                    JOIN class c ON(p.Class=c.classId)";
                                    $select= mysqli_query($con,$result);
                                    //start of loop for displaying products
                                    while($row=mysqli_fetch_array($select)):
                                        $Id =$row['id'];
                                        $Student =$row['Student'];
                                        $class=$row['Class'];
                                        $term=$row['Term'];
                                        $year=$row['Year'];
                                        $amount =$row['Amount'];
                                        $Balance =$row['Balance'];
                                        $Surname =$row['Surname'];
                                        $Firstname =$row['Firstname'];
                                        $Middlename =$row['Middlename'];
                                        ?>
                                      <tr>
                                          <td><?php echo ucwords($Surname.' '.$Firstname.' '.$Middlename);?> </td>
                                        <td><?php echo  ucwords($class);?> </td>
                                        <td><?php echo  $term; ?></td>
                                        <td><?php echo   $year; ?></td>
                                        <td><?php echo $amount;?></td>
                                          <td><?php echo $Balance;?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="page-editfees.php?edit=<?php echo $Id; ?>"
                                                   class="btn btn-outline-primary"  >
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    EDIT</a>
                                                <a href="delete-fees.php?delete=<?php echo $Id; ?>"
                                                   class="btn btn-outline-danger delete_link"  >
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    DELETE</a>

                                            </div>
                                        </td>
                                          </tr>
                                    <?php endwhile;?>
                                    </tbody>
                                </table>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include 'footer.php';?>