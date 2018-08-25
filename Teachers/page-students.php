<?php
include 'head.php';
include 'connect.php';
include "functions.php";
getUser();
if (isset($_GET['sus'])) {
    $query = "UPDATE students SET Suspension = 'suspended' WHERE adm_No = '$_GET[sus]' ";
    $run = mysqli_query($con, $query);
} elseif (isset($_GET['back'])){
    $query = "UPDATE students SET Suspension = 'suspend' WHERE adm_No = '$_GET[back]' ";
    $run = mysqli_query($con, $query);
}
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
                             <!-- <li><a href="Page-addstock.php" class="btn btn-info"><i class="fa fa-plus"></i>New Students</a></li> -->
                              <li><a href="page-newstudents.php" class="btn btn-info">
                                      <i class="fa fa-plus"></i>New Students</a>
                              </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <?php include 'errors.php'?>
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Students List</strong>
                        </div>
                        <div class="card-body">

                  <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                         <th>#</th>
                        <th>Admin No.</th>
                        <th>Full Name</th>
                         <th>Class</th>
                        <th> Actions </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $result = "SELECT * FROM students t JOIN class c ON(t.Class=c.classId) WHERE c.Classteacher='$user_id'";

                                $run=mysqli_query($con,$result);
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($run)):

                                        $adm_No=$row['adm_No'];
                                        $surname = $row['Surname'];
                                        $Middlename=$row['Middlename'];
                                        $Firstname=$row['Firstname'];
                                        $Class=$row['Class'];
                                        $sus=$row['Suspension'];

                                        ?>
                                    <tr>
                                    <td><?php echo $row['adm_No'];?></td>
                                    <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'] );?> </td>
                                    <td><?php echo ucwords($row['Class']);?></td>

                          <td>
                              <div class="btn-group">
                                  <a href="page-editstudents.php?edit=<?php echo  $adm_No; ?>"  class="btn btn-outline-danger">
                                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                  <?php if($sus == 'suspend' || $sus == ''): ?>
                                      <a href="page-students.php?sus=<?php echo  $adm_No; ?>"  class="btn btn-outline-danger">
                                          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Suspend</a>
                                  <?php else: ?>
                                      <a href="page-students.php?back=<?php echo  $adm_No; ?>"  class="btn btn-danger">
                                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Suspended</a>
                                  <?php endif ?>
                              </div>
                        </td>
                                    </tr>
                           <?php endwhile;?>


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

<?php include 'footer.php';?>