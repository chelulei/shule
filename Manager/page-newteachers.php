<?php
error_reporting(0);
include 'connect.php';
include 'functions.php';
getUser();
include 'head.php';
include 'sidebar.php';

?>
      <div id="right-panel" class="right-panel">
        <!-- Header-->
      <?php
       include 'header.php';
        ?>
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
                             <li><a href="page-teachers.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></i>Back</a></li>
                            <li><a href="page-teachers.php" class="btn btn-info"><i class="fa fa-folder-open"></i>View Teachers</a></li>
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
                            <strong class="card-title">Teachers Registration Form </strong>
                        </div>
                        <div class="card-body">

                  <div class="form"  style="align-content: center;padding-left: 120px;
                             padding-right: 120px">
       <form class="form-validate form-horizontal" method="POST" action="newteacher.php" id="">
                            <div class="card-header">
                                <strong>Registration Form</strong>
                            </div>
                            <div class="card-body card-block">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">TSC NO </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                                <input class="form-control"  id="TSC_NO" name="TSC_NO" type="text"  required=""  >
                                            </div>
                                            <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                        </div>
                                    </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" form-control-label">Surname</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                        <input class="form-control"  id="Surname" name="Surname" type="text"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                </div>
                               </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" form-control-label">First Name</label>
                                        <div class="input-group">
                                            <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                            <input class="form-control" id="Firstname" name="Firstname" type="text"  required=""  >
                                        </div>
                                        <!-- <small class="form-text text-muted">Middles Name</small> -->
                                    </div>
                                    </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" form-control-label">Middle Name</label>
                                        <div class="input-group">
                                            <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                            <input class="form-control" id="Middlename" name="Middlename" type="text"  required=""  >
                                        </div>
                                        <!-- <small class="form-text text-muted">Middles Name</small> -->
                                    </div>
                                </div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6">
                                   <div class="form-group">
                                    <label class=" form-control-label">Date of Birth </label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
                                        <input class="form-control" id="Dateofbirth" name="Dateofbirth" type="date"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. 99/99/9999</small> -->
                                    </div>
                               </div>
                                 <div class="col-md-6">
                                 <div class="form-group">
                                    <label class=" form-control-label">Gender</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-asterisk"></i></div> -->
                                         <select name="Gender"  class="form-control" required="">
                                                <option value=""></option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                            </select>

                                    </div>
                                    <!-- <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small> -->
                                 </div>
                                 </div>
                               </div>

                                <div class="row">
                                    <div class="col-md-6">
                                     <div class="form-group">
                                    <label class=" form-control-label">Home Address</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-male"></i></div> -->
                                        <input class="form-control" id="Homeaddress" name="Homeaddress" type="email"  required=""  >
                                    </div>
                                    <!-- <small class="form-text text-muted">ex. 999-99-9999</small> -->
                                     </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" form-control-label">Email Address</label>
                                        <div class="input-group">
                                            <!-- <div class="input-group-addon"><i class="fa fa-male"></i></div> -->
                                            <input class="form-control" id="Email" name="Email" type="text"  required=""  >
                                        </div>
                                        <!-- <small class="form-text text-muted">ex. 999-99-9999</small> -->
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Mobile Phone</label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-male"></i></div> -->
                                                <input class="form-control" id="Phone" name="Phone" type="number"  required=""  >
                                            </div>
                                            <!-- <small class="form-text text-muted">ex. 999-99-9999</small> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Designation</label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-asterisk"></i></div> -->
                                                <select name="Designation"  class="form-control" id="Designation">
                                                    <option value=""></option>
                                                    <option value="Deputy Principal">Deputy Principal</option>
                                                    <option value="Principal">Principal</option>
                                                    <option value="Teacher">Teacher</option>

                                                </select>

                                            </div>
                                        </div>
                                        <!-- <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small> -->

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">No of Classes Enrolled </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                                <input class="form-control" id="Classes" name="Classes" type="number"  required=""  >
                                            </div>
                                            <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Date Employed </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                                <input class="form-control" id="DateEmp" name="DateEmp" type="Date"  required=""  >
                                            </div>
                                            <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" form-control-label">Years of Experiences</label>
                                        <div class="input-group">
                                            <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                            <input class="form-control" id="YearsExp" name="YearsExp" type="number"  required=""  >
                                        </div>
                                        <!-- <small class="form-text text-muted">Email Address </small> -->
                                    </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="exampleInputFile">Resume</label>
                                        <input type="file" name="Resume" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                        <small id="fileHelp" class="form-text text-muted">**Upload your updated resume**</small>
                                      </div> -->
                                <div class="col-md-6">
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
                        </div>
                    </div>
                        <div class="form-group text-center">
                       <button type="submit" value="Save" name ="save" class="btn btn-primary btn-lg" style="width: 20%;"> <i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i>  Save</button>
                       <a href="page-teachers.php"> <button type="button" class="btn btn-danger btn-lg" style="width: 20%;"><i class="fa fa-ban fa-lg" aria-hidden="true"></i> Cancel</button></a>
                   </div>
            </form>

                 <br>
                 <br>
                          </div>
                        </div>
                    </div>

                       </br>
                       <br>
      </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php include 'footer.php'; ?>
