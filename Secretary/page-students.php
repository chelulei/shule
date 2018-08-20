
<?php include 'head.php';
include 'connect.php';
?>
        <!-- Left Panel -->
   <!-- /#left-panel -->
<?php include 'sidebar.php'; ?> 
    <!-- Left Panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
       <!-- Header-->
        <?php include '../header.php';  ?>
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
                             <li><a href="page-newstudents.php" class="btn btn-info"><i class="fa fa-plus"></i>New Students</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-2">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                 <?php include 'errors.php'?>
               <!-- end errors -->
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Students List</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
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
                                $result = "SELECT * FROM students";
                                $select=mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row=mysqli_fetch_array($select)):

                                        $adm_No=$row['adm_No'];
                                        $Surname = $row['Surname'];                                            
                                        $Middlename=$row['Middlename'];
                                        $Firstname=$row['Firstname'];
                                        $Class=$row['Class'];
                                        $Parentname=$row['Parentname'];
                                        $Phone=$row['Phone'];

                            echo '<tr>';
                                       
                                ?>
                                    <td><?php echo  $adm_No;?></td>
                                    <td><?php echo ucwords($Surname .' '. $Firstname.' '.$Middlename );?> </td>
                                    <td><?php echo ucwords($Class);?></td>
                                    <td><?php echo ucwords($Parentname);?></td>
                                    <td><?php echo $Phone;?></td>
                          <td> 
                             <div class="btn-group">
                              <a href="page-studentsprofile.php?info=<?php echo  $adm_No; ?>"  class="btn btn-outline-primary">
                                <i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                                 <a href="page-editstudents.php?edit=<?php echo  $adm_No; ?>"  class="btn btn-outline-danger">
                                     <i class="fa fa-pencil" aria-hidden="true"></i>EDIT</a>
                              </div>

                        </td>
                           <?php endwhile; 

                      echo '</tr>'
                    ?>

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
