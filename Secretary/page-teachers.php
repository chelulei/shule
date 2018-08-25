<?php

error_reporting(0);
include 'connect.php';
include 'functions.php';
getUser();
include 'head.php';
include 'sidebar.php';?>

<!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->          
        <?php include 'Header.php'; ?>
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
                             <li><a href="page-newteachers.php" class="btn btn-info"><i class="fa fa-plus"></i>New Teachers</a></li>
                            <!-- <li><a href="page-teacher.php" class="btn btn-info"><i class="fa fa-folder-open"></i>View Teachers</a></li> -->
                         
                        </ol>
                    </div>
                </div>
            </div>
              </div>

        <div class="content mt-3">
              <!--Errors starts -->
               <?php include 'errors.php';?>
               <!-- end errors -->
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Teacher </strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                   <thead>
                      <tr>
                        <th>TSC No.</th>
                        <th>Surname</th>
                        <th>FirstName</th>
                        <th>MiddleName</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                     <?php
                              include 'connect.php';
                                $result = "SELECT * FROM teacher";
                                  $select= mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row=mysqli_fetch_array($select)):
                                        $Idno=$row['Idno'];
                                        $TSC_No=$row['TSC_No'];
                                        $Surname = $row['Surname'];                                            
                                        $Middlename=$row['Middlename'];
                                        $Firstname=$row['Firstname'];
                                        $Dateofbirth=$row['Dateofbirth'];
                                        $Phone=$row['Phone'];
                                        $Homeaddress=$row['Homeaddress'];
                                        $YearsExp=$row['YearsExp'];
                                        $Email=$row['Email'];
                                        $Salary=$row['Salary'];
                                       
                                ?>
                                    <tr>
                                    <td><?php echo $TSC_No;?></td>
                                    <td><?php echo ucwords($Surname);?> </td>
                                    <td><?php echo  ucwords($Middlename); ?></td>
                                    <td><?php echo   ucwords($Middlename); ?></td>
                                     <td><?php echo $Phone;?></td>
                                     <td>
                   <div class="btn-group"> 
                  <a href="page-teacherprofile.php?teach=<?php echo $Idno?>" class="btn btn-outline-info btn-md profile"
                     id="<?php echo   $Idno; ?>"><i class="fa fa-user"></i></i>Profile</a>
                    <a href="page-editteacher.php?edit=<?php echo $Idno; ?>"
                       class="btn btn-outline-danger btn-md edit_teach"  >
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Update Records</a>
                     
                             </div>
                        </td>
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

                    </div>

   <?php  include 'footer.php'; ?>