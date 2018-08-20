<?php include 'head.php'; ?>

<!-- Left Panel -->
   <!-- /#left-panel -->
<?php include 'sidebar.php'; ?> 
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

        <?php include 'header.php';  ?>
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
                              <li><a href="page-newcertificate.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Leaving Certificate </a></li>
                            <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->
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
                            <strong class="card-title">Leaving Certificate</strong>
                        </div>
                        <div class="card-body">
              

                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Studnet Name</th>
                         <th>Activities</th>
                         <th>Remarks</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      <?php
                          include 'connect.php';
                                    
                                $result = "SELECT * FROM leaving l JOIN students s ON(l.Student = s.adm_No)";
                                $select= mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):
                                 $Student=$row['Student'];
                                  $Activities=$row['activities'];
                                  $Remarks=$row['remarks'];
                                   $id=$row['leavingid'];
                                ?>
                             <tr>
                                    <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'] );?> </td>
                                    <td><?php echo $Activities;?></td>
                                    <td><?php echo substr($Remarks,0,100);?></td>
                                 <td>
                          <a class='btn btn-info'  href='page-certificate.php?view=<?php echo $id;?>' ><i class='fa fa-eye'></i> View</a>
                                     <a class='btn btn-primary'  href='page-editleaving.php?edit=<?php echo $id;?>' ><i class='fa fa-pencil'></i> EDIT</a>
                         <a class='btn btn-danger delete_link'  href='delete-leaving.php?delete=<?php echo $id;?>' ><i class='fa fa-trash'></i> Trash</a>
                                 </td>
                            </tr>
                           <?php endwhile; ?>

                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include 'footer.php'?>