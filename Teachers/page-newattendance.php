<?php
error_reporting(0);
include 'head.php';
include 'connect.php';
  include 'sidebar.php';
include "functions.php";
if(isset($_GET['new'])):
  $class=$_GET['new'];
   $query = "SELECT * FROM `students` WHERE Class='$class'";
   $run= mysqli_query($con,$query);

endif;
?>
    <div id="right-panel" class="right-panel">
       <!-- Header-->
      <?php  include '../header.php';  ?>
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
                           <li>
                               <a href="page-attendancelist.php" class="btn btn-danger">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Cancel
                            </a></li>
                           
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
                            <strong class="card-title"> <i class="fa fa-user"></i> Attendance </strong>
                        </div>
                        <div class="card-body">

                            <form class="form-horizontal" role="form" method="POST" action="student_attendance.php">
                              <div class="form-group row">

                                <label for="" class="col-sm-3 control-label">Attendance Date </label>
                                <div class="col-sm-4">
                                 <input type="Date" class="form-control"  name="date" placeholder="Attendance " required />
                                </div>
                              </div>
                             <div class="form-group row">
                                <label for="" class="col-sm-3 control-label">Reasons For Attendance</label>
                                <div class="col-sm-4">
                                  <select class="form-control" name="day" required>
                                    <option value="Whole day">Whole day</option>
                                    <option value="Morning">Morning</option>
                                    <option value=" Afternoon">Afternoon</option>
                                    <option value="Evening ">Evening</option>
                                  </select>
                                </div>
                              </div>
                                 <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Students</th>
                                         <th>Status</th>
                                        <th>Remarks</th>

                                        <!-- <th>Option</th> -->
                                      </tr>
                                    </thead>
                                     <tbody>
                                     <?php while($row =mysqli_fetch_array($run)):
                                     $id= $row['adm_No'];
                                     ?>
                                     <tr>
                                         <td> <input type="hidden" name="class[]" value="<?php echo $class;?>"></td>
                                         <td>
                                             <input type="hidden" name="student[]" value="<?php echo $id;?>">
                                             <?php echo $row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'];?>
                                         </td>
                                         <td>
                                             <select name="status[]"  class="form-control">
                                                 <option value="Present">Present</option>
                                                 <option value="Absent">Absent</option>
                                             </select>
                                         </td>
                                         <td><textarea name="remarks[]" id="" cols="2" rows="2" class="form-control" placeholder="Remarks..."></textarea></td>
                                     </tr>
                                     <?php endwhile;?>

                                  <hr>

                          </tbody>
                          </table>
                                <p class="text-center">
                                    <button type="submit" name="save" class="btn btn-info btn-lg">
                                        <i class="fa fa-floppy-o" aria-hidden="true">  </i>
                                        SAVE
                                    </button>
                                    <a href="page-attendancelist.php" class="btn btn-danger btn-lg">
                                            <i class="fa fa-ban " aria-hidden="true">  </i>
                                            Cancel

                                    </a>
                                </p>

                            </form>
                        </div>
                </div>

            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
<?php include 'footer.php'?>
