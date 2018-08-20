
<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';
include 'connect.php';

if (isset($_GET['edit']) ){

    $id = $_GET['edit'];

    $sql = "SELECT * FROM user WHERE  id = '$id'";

    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    $Firstname = $row['Firstname'];
    $Middlename = $row['Middlename'];
    $Surname = $row['Surname'];
    $Phone = $row['Phone'];
    $Email = $row['Email'];
    $role = $row['role'];

}
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
                            <li><a href="page-addstuff.php" class="btn btn-info"><i class="fa fa-plus-circle"></i> Add New User</a></li>
                            <li><a href="page-allusers.php" class="btn btn-info"><i class="fa fa-bars"></i> All Users</a> </li>
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
                            <strong class="card-title">Update User </strong>
                        </div>
                        <div class="card-body">
                                 
                          <form class="form-validate form-horizontal" method="POST" action="update-user.php">
                              <input type="hidden" name="id" value="<?php echo $id;?>">
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-6">
                                  <input type="Firstname" class="form-control" id="colFormLabel" name="Firstname"  value="<?php echo $Firstname; ?>" >
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Middle Name</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="colFormLabel" name="Middlename" value="<?php echo $Middlename; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Surname</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="colFormLabel" name="Surname" value="<?php echo $Surname; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-6">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Phone" value="<?php echo $Phone; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                  <input type="Email" class="form-control" id="colFormLabel" name="Email" value="<?php echo $Email; ?>">
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Role</label>
                                  <div class="col-sm-6">
                                      <select name="role"  class="form-control"  required="">
                                          <?php if ( $Person == "Deputy Principal") : ?>
                                              <option value='Deputy Principal' selected>Deputy Principal
                                              </option>
                                          <?php else: ?>
                                              <option value='Deputy Principal'>Deputy Principal</option>
                                          <?php endif; ?>
                                          <?php if ( $Person == "Principal"): ?>
                                              <option value='Principal' selected> Principal
                                              </option>
                                          <?php else: ?>
                                              <option value='Principal'>Principal</option>
                                          <?php endif; ?>
                                          <?php if ( $Person == "Teacher"): ?>
                                              <option value='Teacher' selected> Teacher
                                              </option>
                                          <?php else: ?>
                                              <option value='Teacher'>Teacher</option>
                                          <?php endif; ?>
                                      </select>
                                  </div>
                                </div>

                                 <br>
                              <br>
                               <div class="page-title">
                                   <label for="example-time-input" class="col-2 col-form-label"></label>
                                 <input type="submit" value="UPDATE" name ="update" class="btn btn-primary" />
                                   <a href="page-allusers.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                                </div>
                                   
                            </form>
                        </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

 <?php include 'footer.php';?>