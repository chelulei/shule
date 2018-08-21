
   <?php include 'head.php'; ?>
    <?php include 'count.php'; ?>
   <?php include 'sidebar.php'; ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->          
        <?php include '../Header.php'; ?>
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
                        <th>#</th>
                        <th>TSC No.</th>
                        <th>Surname</th>
                        <th>FirstName</th>
                        <th>MiddleName</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                      </tr>
                    </thead>

                     <?php 
                        $counter = 1; 
                         
                          include '../connect.php';
                                    
                                $result = "SELECT * FROM teacher";
                                  $select= $db->query($result);
                                    
                                    //start of loop for displaying products
                             while($row=$select->fetch_assoc()):
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


                            echo '<tr>';
                                       
                                ?> 
                                  <td><?php echo $counter;   $counter++; ?></td>
                                    <td><?php echo $TSC_No;?></td>
                                    <td><?php echo ucwords($Surname);?> </td>
                                    <td><?php echo  ucwords($Middlename); ?></td>
                                    <td><?php echo   ucwords($Middlename); ?></td>
                                     <td><?php echo $Phone;?></td>
                             <td>
                   <div class="btn-group"> 
                  <a href="#scrollmodal" class="btn btn-outline-info btn-md profile"
                             data-toggle="modal" id="<?php echo   $Idno; ?>"><i class="fa fa-user" aria-hidden="true"></i></i>Profile</a>
                    <a href="page-editteacher.php?edit=<?php echo $Idno; ?>"
                       class="btn btn-outline-success btn-md edit_teach"  >
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Update Records</a>
                     
                             </div>
                        </td>
                           <?php endwhile; 
                      echo '</tr>'
                    ?>

                    </tbody>
                  </table>
                        </div>
                    </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

      <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollmodalLabel">Teachers's Records</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="padding-left: 50px;">
                                <p>
                                     <form action="editteacher.php" method="POST">

                                      <input type="hidden" name="adm_No" id="adm_No" />

                                    <label class="header">Profile Photo:</label>
                                    <br>
                                     <image id="profileImage" src="images/default.png" width="100" height="100"/>
                                        <br><br><br>
                                       <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                                     </form>
                                     <p>

                                    <b> Full name:</b><span id="surname"></span>&nbsp;<span id="firstname"></span>&nbsp;<span id="middlename"></span>
                                         <br>
                                    <b> Date Of Birth: </b><span id="dateofbirth"></span><br>
                                    <b> Email Address:</b> <span id="email"></span><br>
                                    <b> Mobile Number:</b> <span id="phone"></span> <br>
                                    <b> Home Address: </b> <span id="homeaddress"></span><br>
                                    <b> Subjects Enrolled:</b><span id=""></span><br>
                                    <b> Date Of employement</b><span id="dateEmp"></span><br>
                                  <b> Resume/CV:</b><br>
                                    <b> Salary:</b> <br>
                                
                                </p>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                                <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            <style>
                #profile{
                    background-color: red;
                }

            </style>
 <div class="modal fade" id="scrollmodal1" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollmodalLabel">Update Records</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                        <form class="form-validate form-horizontal" method="POST" action="editteacher.php" id="profile">
                                      <input type="hidden" name="Idno" id="Idno" />
                            <div class="card-header">
                                <strong>Teacher's Records</strong> 
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">TSC NO </label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                        <input class="form-control"  id="TSC_No" name="TSC_No" type="text"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Surname</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                        <input class="form-control"  id="Surname" name="Surname" type="text"  required=""  >
                                        <hr>
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">First Name</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                        <input class="form-control" id="Firstname" name="Firstname" type="text"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">Middles Name</small> -->
                                </div>

                                 <div class="form-group">
                                    <label class=" form-control-label">Middle Name</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                        <input class="form-control" id="Middlename" name="Middlename" type="text"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">Middles Name</small> -->
                                </div>

                                   <div class="form-group">
                                    <label class=" form-control-label">Date of Birth </label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
                                        <input class="form-control" id="Dateofbirth" name="Dateofbirth" type="date"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. 99/99/9999</small> -->
                                </div>

                                 <div class="form-group">
                                    <label class=" form-control-label">Gender</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-asterisk"></i></div> -->
                                          <input  type="text" class="form-control" id="Gender" name="Gender">
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small> -->
                              
                                   <div class="form-group">
                                    <label class=" form-control-label">Home Address</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-male"></i></div> -->
                                        <input class="form-control" id="Homeaddress" name="Homeaddress" type="text"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. 999-99-9999</small> -->
                                </div>


                                <div class="form-group">
                                    <label class=" form-control-label">Email Address</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-male"></i></div> -->
                                        <input class="form-control" id="Email" name="Email" type="text">
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. 999-99-9999</small> -->
                                </div>

                                  <div class="form-group">
                                    <label class=" form-control-label">Mobile Phone</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-male"></i></div> -->
                                        <input class="form-control" id="Phone" name="Phone" type="number"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. 999-99-9999</small> -->
                                </div>
                    
                                    <div class="form-group">
                                    <label class=" form-control-label">Designation</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-asterisk"></i></div> -->
                                        <input  type="text" class="form-control" id="Designation" name="Designation">
                                                        
                                    </div>
                                </div>
                                    <!-- <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small> -->

                                   <div class="form-group">
                                    <label class=" form-control-label">No of Classes Enrolled </label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                        <input class="form-control" id="Classes" name="Classes" type="number"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                </div>

                
                             <div class="form-group">
                                    <label class=" form-control-label">Date Employed </label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                        <input class="form-control" id="DateEmp" name="DateEmp" type="date"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                </div>


                                <div class="form-group">
                                    <label class=" form-control-label">Years of Experiences</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                        <input class="form-control" id="YearsExp" name="YearsExp"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">Email Address </small> -->
                                </div>

                                <!-- <div class="form-group">
                                    <label for="exampleInputFile">Resume</label>
                                    <input type="file" name="Resume" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">**Upload your updated resume**</small>
                                  </div> -->

                                   <div class="form-group">
                                    <label class=" form-control-label">Salary</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
                                        <input class="form-control" id="Salary" name="Salary" type="number">
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. 99/99/9999</small> -->
                                </div>
                                
                          </div>
                        </div>
                    </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary" name="update" value="Confirm" />                               
                            </div>

                     </form>
                        </div>
                    </div>
                </div>
   <?php  include 'footer.php'; ?>