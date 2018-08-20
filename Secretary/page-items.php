
<?php include 'head.php';
include 'connect.php';
include 'functions.php';
?>
        <!-- Left Panel -->
   <!-- /#left-panel -->
<?php include 'sidebar.php'; ?> 
    <!-- Left Panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
       <!-- Header-->
        <?php include '../header.php';  ?>
        <style>
            .table > tbody > tr > td {
                vertical-align: middle;
            }
        </style>
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
                            <li><a href="Page-addstock.php" class="btn btn-info"><i class="fa fa-plus"></i>ADD ITEM</a></li>
                             <li><a href="page-inventory.php" class="btn btn-info"><i class="fa fa-arrow-left"></i>BACK</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-2">
            <?php include 'errors.php';?>
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
               <!-- end errors -->
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Items List</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Total Price</th>
                                    <th>Person Responsible</th>
                                    <th>Reciept</th>
<!--                                    <th>Description</th>-->
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>


                                <?php

                                //set counter variable
                                $counter = 1;

                                include 'connect.php';

                                $result = "SELECT * FROM items";
                                $select= mysqli_query($con,$result);

                                //start of loop for displaying products
                                while($row = mysqli_fetch_array($select)):

                                    $id= $row['itemsIdno'];
                                    ?>
                                <tr>
                                    <td><?php echo  formatDate($row['Date']);?></td>
                                    <td><?php echo ucwords($row['Productname']);?> </td>
                                    <td><?php echo ucwords($row['Quantity']);?> </td>
                                    <td><?php echo ucwords($row['Unitprice']);?> </td>
                                    <td><?php echo ucwords($row['Total']);?></td>
                                    <td><?php echo ucwords($row['Person']);?></td>
                                    <td>
                                        <img src="images/<?php echo $row['Receipt'];?>" width="100" height="100">
                                    </td>
<!---->
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                        <a  href="page-edititem.php?edit=<?php echo $id;?>" class="btn btn-primary"><i class="fa fa-edit"></i>Edit
                                        </a>
                                        <a class="btn btn-danger delete_link" href="delete-item.php?delete=<?php echo $id;?>"> <i class="fa fa-trash-o"></i>Delete <span class="text-muted"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endwhile;?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
<!-- Modal -->

<?php include 'footer.php'; ?>
<?php include 'modal.php'; ?>
