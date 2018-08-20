
<?php
include 'head.php';
include 'sidebar.php';

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
          <h1>Dasboard </h1>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="Page-addstock.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Stock</a></li>
            <li><a href="page-management.php" class="btn btn-info"><i class="fa fa-folder-open"></i>Items</a></li>
            <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content mt-3">
    <div class="animated fadeIn">

      <div class="row">
       <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Stocks Managements </strong>
          </div>
          <div class="card-body">
<table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Total(Buying Price)</th>
                                        <th>Person Responsible</th>
                                        <th>Add File(File Reciept)</th>
                                        <th>Description</th>
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

                                        $Date=$row['Date'];
                                        $Productname = $row['Productname'];
                                        $Quantity=$row['Quantity'];
                                        $Unitprice=$row['Unitprice'];
                                        $Total=$row['Total'];
                                        $Total=$row['Person'];
                                        $Receipt=$row['Receipt'];
                                        $Description=$row['Description'];

                                      echo '<tr>';

                                          ?>
                                              <td><?php echo $counter;   $counter++; //increment counter by 1 on every pass
                                              ?></td>
                                               <td><?php echo $row['Date'];?></td>
                                              <td><?php echo ucwords($row['Productname']);?> </td>
                                              <td><?php echo ucwords($row['Quantity']);?> </td>
                                              <td><?php echo ucwords($row['Unitprice']);?> </td>
                                              <td><?php echo ucwords($row['Total']);?></td>
                                              <td><?php echo ucwords($row['Person']);?></td>
                                              <td><?php echo ucwords($row['Receipt']);?> </td>
                                              <td><?php echo ucwords($row['Description']);?></td>

                                              <td>

                       <a type="button" class="btn btn-info" data-toggle="modal" data-target="#mediumModal"><i class="fa fa-edit"></i>Edit
                          Medium
                      </a>
                                             <a class="btn btn-danger" href="#" role="button"> <i class="fa fa-trash-o"></i>Delete <span class="text-muted"></span></a>
                                              </td>

                                       <?php endwhile;

                                echo '</tr>';

                        ?>
                          </tbody>
                          </table>



         </div>


       </div><!-- .animated -->
     </div><!-- .content -->


   </div><!-- /#right-panel -->

   <!-- Right Panel -->
   <?php include 'footer.php';?>