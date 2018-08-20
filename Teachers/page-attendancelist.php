
<?php
//error_reporting(0);
include 'head.php';
include 'connect.php';
include "functions.php";
include 'sidebar.php';
getUser()
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
                            <!-- <li><a href="Page-addclasses.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Class</a></li> -->
                            <li><a href="#" class="btn btn-info"><i class="fa fa-print"></i> Print Class List</a></li>
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
                            <strong class="card-title">Classes </strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>Registered Students</th>
                                        <th>Class Teacher</th>
                                        <th>Option</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                              <?php
                             //set counter variable
                              include 'connect.php';
                            $counter = 1;

                              //start of loop for displaying products
                              $result =mysqli_query($con, "SELECT * FROM class c JOIN user u ON(c.Classteacher=u.id) WHERE c.Classteacher='$user_id'");
                              while($row = mysqli_fetch_array($result )):
                                    //start of loop for displaying products
                                  $id=$row['classId'];
                                  $Class=$row['Class'];
                                  $Classuser = $row['Classteacher'];
                                  $Nostudents=$row['Nostudents'];
                                  $students=$row['students'];?>
                                       <tr>
                                              <td>
                                                  <?php echo $counter++;?>

                                             </td>

                                              <td><?php echo ucwords($Class);?> </td>
                                              <td><?php echo $students;?> </td>
                                  <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename']);?></td>
                                      <td>

                                 <a href="page-newattendance.php?new=<?php echo $id;?>"class="btn btn-info"><i class="fa fa-plus"> New attendance</i></a>
                                  <a href="page-attendanceview.php?view=<?php echo $id;?>"class="btn btn-success"><i class="fa fa-eye"> View Attendance</i></a
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

<?php include 'footer.php';?>
