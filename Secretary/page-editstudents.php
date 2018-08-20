
<?php
error_reporting(0);
include 'connect.php';
include 'head.php';
include 'sidebar.php';
if (isset($_GET['edit'])) {

    $id=$_GET['edit'];

    $result = "SELECT * FROM students WHERE adm_No ='$id'";
    $select=mysqli_query($con,$result);

    //start of loop for displaying products
       $row=mysqli_fetch_array($select);
        $id=$row['adm_No'];
        $Surname=$row['Surname'];
        $Middlename=$row['Middlename'];
        $Firstname=$row['Firstname'];
        $Dateofbirth=$row['Dateofbirth'];
        $Gender=$row['Gender'];
        $Class=$row['Class'];
        $Homeaddress=$row['Homeaddress'];
        $Parentname=$row['Parentname'];
        $Phone=$row['Phone'];
        $Email=$row['Email'];
        $Formerschool=$row['Formerschool'];
        $Entrymarks=$row['Entrymarks'];


}
?>
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php
    include '../header.php';
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
                        <li><a href="page-students.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></i>Back</a></li>
                        <li><a href="page-students.php" class="btn btn-info"><i class="fa fa-folder-open"></i>View Students</a></li>
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
                        <strong class="card-title">Students' Details</strong>
                    </div>
                    <div class="card-body">
                      <div class="form"  style="align-content: center;padding-left: 120px;
                      padding-right: 120px">
                          <h5 class="text-center"> Student Information</h5>
                          <br>
                      <form class="form-validate form-horizontal" method="POST" action="updatestudent.php">

                          <div class="row">

                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class=" form-control-label">Surname</label>
                                      <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                          <input class="form-control" id="Surname" name="Surname" type="text"  value="<?php echo $Surname;?>" required="">
                                      </div>
                                      <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class=" form-control-label">Middle Name</label>
                                      <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                          <input class="form-control" id="Middlename" name="Middlename" type="text"  value="<?php echo $Middlename;?>" required="">
                                      </div>
                                      <!-- <small class="form-text text-muted">Middles Name</small> -->
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class=" form-control-label">First Name</label>
                                      <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                          <input class="form-control" id="Firstname" name="Firstname" type="text" value="<?php echo $Firstname; ?>">
                                      </div>
                                      <!-- <small class="form-text text-muted">Middles Name</small> -->
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="address" class="control-label">Birth Date</label>

                                      <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
                                          <input class="form-control" id="Dateofbirth" name="Dateofbirth" type="date"  value="<?php echo $Dateofbirth;?>" required="">
                                      </div>
                                      <!-- <small class="form-text text-muted">ex. 99/99/9999</small> -->
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class=" form-control-label">Class</label>
                                      <div class="input-group">
                                          <select name="Class" id="Class" class="form-control">
                                              <option>---- Class's Name   ------</option>
                                              <?php
                                              $qry=mysqli_query($con," SELECT * FROM class");
                                              while($rows=mysqli_fetch_array($qry)){

                                                  if($rows['classId']==$Class)

                                                      $select="selected";
                                                  else
                                                      $select="";
                                                  ?>
                                                  <option value="<?php echo $rows['classId'];?>" <?php echo $select ;?> >  <?php echo $rows['Class'];?> </option>
                                                  <?php
                                              }

                                              ?>
                                          </select>
                                      </div>
                                      <!-- <small class="form-text text-muted">Middles Name</small> -->
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class=" form-control-label">Gender</label>
                                      <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-asterisk"></i></div> -->
                                          <select name="Gender"  class="form-control"  required="">
                                              <?php if ( $Gender == "Female") : ?>
                                                  <option value='Female' selected>Female
                                                  </option>
                                              <?php else: ?>
                                                  <option value='Female'>Female</option>
                                              <?php endif; ?>
                                              <?php if ( $Gender == "Male"): ?>
                                                  <option value='Male' selected> Male
                                                  </option>
                                              <?php else: ?>
                                                  <option value='Male'>Male</option>
                                              <?php endif; ?>
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
                                      <input class="form-control" id="Homeaddress" name="Homeaddress" type="text" value="<?php echo  $Homeaddress;?>">
                                  </div>
                              </div>
                                  <!-- <small class="form-text text-muted">ex. 999-99-9999</small> -->
                              </div>
                              <div class="col-md-6">
                              </div>
                          </div>
                          <hr>
                    <strong>Parent Infromation</strong>
                    <br>
                    <br>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class=" form-control-label"> parent Name</label>
                                      <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                          <input class="form-control" id="Parentname" name="Parentname" type="text" value="<?php echo  $Parentname;?>" required="">
                                      </div>
                                      <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                  </div>

                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class=" form-control-label">Phone Number</label>
                                      <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                          <input class="form-control" id="Phone" name="Phone" type="number" value="<?php echo  $Phone;?>" required="">
                                      </div>
                                      <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                  </div>
                              </div>
                          </div>
                    <div class="form-group">
                        <label class=" form-control-label">Email Address</label>
                        <div class="input-group">
                            <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                            <input class="form-control" id="Email" name="Email" type="email" required="" value="<?php echo $Email; ?>">
                        </div>
                        <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                    </div>
                          <br>
                          <hr>
                    <STRONG> Other Records </STRONG>
                          <br>
                          <br>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class=" form-control-label"> Former School</label>
                                      <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                          <input class="form-control" id="Formerschool" name="Formerschool" type="text" required="" value="<?php echo $Formerschool;?>">
                                      </div>
                                      <!-- <small class="form-text text-muted">Email Address </small> -->
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class=" form-control-label">Entry Marks</label>
                                      <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
                                          <input class="form-control" id="Entrymarks" name="Entrymarks" type="number" required="" value="<?php echo  $Entrymarks;?>">
                                      </div>
                                      <!-- <small class="form-text text-muted">ex. 99/99/9999</small> -->
                                  </div>
                              </div>
                          </div
                    <br><br>
                    <div class="form-group text-center">
                        <input type="hidden"  value="<?php echo $id;?>"   name="id" >
                       <button type="submit"  name ="update" class="btn btn-primary btn-lg" style="width: 20%;"> <i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i>UPDATE</button>
                       <a href="page-students.php"> <button type="button" class="btn btn-danger btn-lg" style="width: 20%;"><i class="fa fa-ban fa-lg" aria-hidden="true"></i> Cancel</button></a>
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
<?php //include 'footer.php'; ?>
