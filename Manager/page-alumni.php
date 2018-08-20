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
                              <li><a href="page-newstudents.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Student</a></li>
                            <li><a href="page-students.php" class="btn btn-info"><i class="fa fa-bars"></i> View Students</a></li>

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
                            <strong class="card-title">Students List</strong>
                        </div>
                        <div class="card-body">
              

                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                         <th>#</th>
                        
                        <th>Studnet Name</th>
                         <th>Class</th>
                         <th>ADM</th>
                         <th>Parent Name</th>
                         <th>Parent Phone</th>
                         <th>Admission Date</th>
                        <th> Actions </th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      <?php 

                        $counter = 1; 
                          include 'connect.php';
                                    
                                $result = "SELECT * FROM students";
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

                            echo '<tr>';
                                       
                                ?> 
                                    <td><?php echo $counter;  
                                       $counter++; //increment counter by 1 on every pass 
                                              ?></td>
                                    <td><?php echo $row['adm_No'];?></td>
                                    <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'] );?> </td>
                                    <td><?php echo ucwords($row['Class']);?></td>
                                    <td><?php echo $row['Phone'];?></td>
                                    <td><?php echo ucwords($row['Parentname']);?></td>
                                    <td><?php echo $row['Phone'];?></td>
                                   
                          <td> 
                              
                          <button type="button" href="page-studentsprofile.php?info=<?php echo  $adm_No; ?>" class="btn btn-info"><i class="fa fa-user"> </i> Profile</button>
                          <a href="page-editstudents.php?edit=<?php echo  $adm_No; ?>">
                              <button type="button" class="btn btn-primary"><I class="fa fa-edit"></I> Edit</button>
                          </a>
                        <!-- <a href="#"class="btn btn-danger"><i class="fa fa-pencil"> </i>Suspend</a> -->
                        </td>

                           <?php endwhile; 

                      echo '</tr>'
                    ?>

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
<?php include 'footer.php'; ?>

<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollmodalLabel">Edit Student's Records</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                  
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

