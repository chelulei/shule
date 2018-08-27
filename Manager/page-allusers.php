
<?php
include 'connect.php';
include 'head.php';
  include 'sidebar.php';
include 'functions.php';
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
                            <li><a href="page-addstuff.php" class="btn btn-info"><i class="fa fa-plus"></i>Add New User</a></li>
                            <!-- <li> <a href="deletelink" class="btn btn-info" onclick="return confirm('Are you sure?'" ><i class="fa fa-bars"></i>All User</a> </li> -->
                                
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
                            <strong class="card-title">Users</strong>

                <!--FILTER BY RUNNING OUT, OUT OF STOCK AND CONSIGNED ITEMS-->
                <div class="col-md-2" style="margin-left: 85%">
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Users Roll</th>
                                        <th>Option</th>
                                
                                      </tr>
                                    </thead>
                                    <tbody>


                              <?php 

                            //set counter variable 
                            $counter = 1; 
                                                    

                                    
                                $result = "SELECT * FROM user ";
                                $select= mysqli_query($con,$result);
              
                                    //start of loop for displaying products
                                while($row = mysqli_fetch_array($select)):

                                    $id = $row['id'];
                                    $Firstname = $row['Firstname'];
                                        $Middlename = $row['Middlename']; 
                                        $Surname = $row['Surname']; 
                                        $Phone = $row['Phone'];                              
                                        $Email = $row['Email'];                                            
                                        $role=$row['role'];
                                        $status=$row['status'];
                                          ?> 
                                             <tr>
                                                 <td><?php echo $Surname.' '.$Firstname;?> </td>
                                              <td><?php echo $row['Phone'];?> </td>
                                              <td><?php echo ucwords($row['status']);?> </td>
                                              <td><?php echo ($row['role']);?> </td>
                                            
                                      <td>
                                          <div class="btn-group" role="group" >
                    <a href="page-editusers.php?edit=<?php echo $id;?>" class="btn btn-outline-info"><i class=" fa fa-edit"></i> Edit </a>
                                          <a  href="delete-users.php?delete=<?php echo $id;?>" class="btn btn-outline-danger delete_link"><i class=" fa fa-trash"></i> DELETE </a>
                                          </div>
                                              </td>
                                             </tr>
                                       <?php endwhile;   ?>
                          </tbody>
                          </table>
                        </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<!-- Edit modal -->

 <?php include 'footer.php'?>
