<?php
  include 'head.php';
  include 'sidebar.php';
include "functions.php";
include 'connect.php';
getUser();
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
                           
                           <li><a href="page-newgradingsystem.php" class="btn btn-info"><i class="fa fa-plus"></i>Add Grading system</a></li>
                          <li> <a href="page-gradingsystem.php" class="btn btn-info"><i class="fa fa-eye"></i> View grading System</a> </li>
                           <li><a href="Page-grades.php" class="btn btn-info"><i class="fa fa-bars"></i>Grades</a></li>
                           
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
                            <strong class="card-title"> <i class="fa fa-bullseye"></i> Grading System </strong>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" role="form" method="POST" action="newgrading.php">
                                <input type="hidden" name="user" value="<?php echo $user_id;?>">
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 control-label">Subject subject </label>
                                <div class="col-sm-4">
                                    <select name="subject" class="form-control" required>
                                        <option>---- Subject's Name   ------</option>
                                        <?php
                                        $qry=mysqli_query($con," SELECT * FROM subject");

                                        while($row=mysqli_fetch_array($qry)){
                                            ?>
                                            <option value="<?php echo $row['SubIdNo'];?>"> <?php echo $row['Name'];?> </option>
                                            <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                              </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Lowest Mark </label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control"  name="low_mark" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Highest Mark </label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control"  name="high_mark" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Aggregate </label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control"  name="aggregate" placeholder="" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                <div class="col-md-3"></div>
                                <input type="submit" name="save" class="btn btn-primary mr-2" value="Save">
                                <a href="page-gradingsystem.php"> <button type="button" class="btn btn-danger">Cancel</button></a>

                                </div>
                        </div>



                         </form>


                        </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
                  

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include 'footer.php';?>