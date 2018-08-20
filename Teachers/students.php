<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

   <?php include 'sidebar.php'; ?>
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
                             <li><a href="Page-newteacher.php" class="btn btn-info"><i class="fa fa-plus"></i>New Teachers</a></li>
                            <li><a href="page-teacher.php" class="btn btn-info"><i class="fa fa-folder-open"></i>View Teachers</a></li>
                         >
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
                            <strong class="card-title">Teacher </strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>TSC No.</th>
                        <th>Full Name</th>
                        <th>No. Of Classes Enrolled</th>
                        <th>Phone Number</th>
                        <th>Resume</th>
                        <th>Actions</th>
                      </tr>
                    </thead>

                     <?php 
$counter = 1; 
                         
                          include 'connect.php';
                                    
                                $result = "SELECT * FROM teacher";
                                $select= mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):

                                        $TSC_No=$row['TSC_No'];
                                        $Surname = $row['Surname'];                                            
                                        $Middlename=$row['Middlename'];
                                        $Firstname=$row['Firstname'];
                                        $Dateofbirth=$row['Dateofbirth'];
                                        $Classes=$row['Classes'];
                                        $Disignation=$row['Designation'];
                                        $Phone=$row['Phone'];
                                        $Homeaddress=$row['Homeaddress'];
                                        $Resume=$row['Resume'];
                                        $YearsExp=$row['YearsExp'];
                                        $Email=$row['Email'];
                                        $Salary=$row['Salary'];


                            echo '<tr>';
                                       
                                ?> 
                                     <td><?php echo $counter;   $counter++; //increment counter by 1 on every pass 
                                              ?></td>
                                    <td><?php echo $row['TSC_No'];?></td>
                                    <td><?php echo $row['TSC_No'];?></td>
                                    <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'] );?> </td>
                                    <td><?php echo ucwords($row['Classes']);?></td>
                                    <td><?php echo ucwords($row['Phone']);?></td>
                                    <td><?php echo $row['Resume'];?></td>
                              <td> 
                   <div class="btn-group">             
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#scrollmodal">Profile</button>
                              <br>
                              <br>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#scrollmodal1">Update Records</button>

                        <!-- <a href="#"class="btn btn-danger"><i class="glyphicon glyphicon-pencil"> </i>Suspend</a> -->
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
                                <h5 class="modal-title" id="scrollmodalLabel">Edit Student's Records</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="padding-left: 50px;">
                                <p>
                                     <form action="#" method="post">
                                    <label class="header">Profile Photo:</label>
                                    <br>
                                     <image id="profileImage" src="images/default.png" width="100" height="100"/>
                                        <br><br><br>
                                       <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                                     </form>
                                     <p>

                                    <b> Full name:</b> <?php echo ucwords($Firstname.' '.$Middlename.' '. $Surname); ?><br>
                                    <b> Date Of Birth:</b> <?php echo $Dateofbirth; ?><br>
                                    <b> Email Address:</b> <?php echo $Email; ?><br>
                                    <b> Mobile Number:</b> <?php echo $Phone; ?> <br>
                                    <b> Home Address: </b> <?php echo $Homeaddress; ?><br>
                                    <b> Subjects Enrolled: </b> <?php echo $Classes; ?><br>
                                    <b> Date Of employement:</b> DateEmp<br>
                                    <b> Resume/CV:</b> <?php echo $Resume; ?><br>
                                    <b> Salary:</b> <?php echo $Salary; ?><br>
                                
                                </p>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                                <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
                            </div>
                        </div>
                    </div>
                </div>


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
                        <form class="form-validate form-horizontal" method="POST" action="editteacher.php" id=""> 
                         <input type="hidden" name="id" >   
                            <div class="card-body card-block">

                                 <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Email Address</label>
                                  <div class="col-10">
                                     <input class="form-control" id="Email" name="Email"  value="<?php echo($Email) ?>" type="text">
                                  </div>
                                </div>


                                 <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Mobile Phone</label>
                                  <div class="col-10">
                                     <input class="form-control" id="Phone" name="Phone" value="<?php echo($Phone); ?> " type="text">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Designation</label>
                                  <div class="col-10">
                                        <select name="Designation"  class="form-control" Value="<?php echo($Designation);?>" required="">
                                                <option value=""></option>
                                                <option value="Female">Deputy Principal</option>
                                                <option value="Male">Principal</option>
                                                <option value="Female">Teacher</option>
                                                <!-- <option value="Male">Principal</option> -->
                                            </select>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">No of Classes Enrolled</label>
                                  <div class="col-10">
                                     <input class="form-control" id="Classes" name="Classes" value="<?php echo($Classes); ?>" type="text">
                                  </div>
                                </div>

                             <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Email Address</label>
                                  <div class="col-10">
                                     <input class="form-control" id="Email" name="Email" value="<?php echo($Email); ?>" type="text">
                                  </div>
                                </div>

                              <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Date Employed</label>
                                  <div class="col-10">
                                     <input class="form-control" id="DateEmp" name="DateEmp"  value="<?php echo($DateEmp); ?>" type="Date">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Years of Experiences</label>
                                  <div class="col-10">
                                    <input class="form-control" id="YearsExp" name="YearsExp"  value="<?php echo($YearsExp); ?>" type="Number">
                                  </div>
                                </div>
                               
                                <div class="form-group row">
                                  <label for="exampleInputFile" class="col-2 col-form-label">Resume</label>
                                  <div class="col-10">
                                    <input type="file" name="Resume" class="form-control-file" value="<?php echo($Resume); ?>" id="exampleInputFile" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">**Upload your updated resume**</small>
                                  </div>
                                </div>


                             <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Salary</label>
                                  <div class="col-10">
                                     <input class="form-control" id="Salary" name="Salary" value="<?php echo($Salary); ?>" type="Number">
                                  </div>
                                </div>
                        </div>
                    </div>
           
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" name="submit" data-dismiss="modal">Confirm</button>                               
                            </div>

                     </form>
                        </div>
                    </div>
                </div>

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
