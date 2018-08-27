<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';
include "functions.php";
include 'connect.php';
getUser();
if (isset($_GET['edit'])) {
    $id=$_GET['edit'];
    $sql="SELECT * FROM gradingsystem";
    $query=mysqli_query($con, $sql);
      $row = mysqli_fetch_array($query);
    $subject=$row['subject'];
    $low_mark=$row['low_mark'];
    $high_mark=$row['high_mark'];
    $aggregate=$row['aggregate'];
}
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
                            <form class="form-horizontal" role="form" method="POST" action="update-grading.php">
                                <div class="form-group row">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <input type="hidden" name="user" value="<?php echo $user_id;?>">
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Low Mark </label>
                                    <div class="col-sm-5">
                                        <select name="subject" class="form-control">
                                            <option>---- Subject's Name   ------</option>
                                            <?php

                                            $qry=mysqli_query($con," SELECT * FROM subject");

                                            while($rows=mysqli_fetch_array($qry)){

                                                if($rows['SubIdNo'] == $subject)

                                                    $select="selected";
                                                else
                                                    $select="";
                                                ?>
                                                <option value="<?php echo $rows['SubIdNo'];?>" <?php echo $select ;?> > <?php echo $rows['Name'];?> </option>
                                                <?php
                                            }

                                            ?>
                                        </select>

                                    </div>
                                </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 control-label">Low Mark </label>
                                <div class="col-sm-5">
                                 <input type="text" class="form-control" name="low_mark"     value=" <?php echo $low_mark;?>" required />
                                </div>
                              </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">High Mark </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control"  name="high_mark" value=" <?php echo $high_mark;?>" placeholder="" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Aggregate</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control"  name="aggregate" value=" <?php echo $aggregate;?>" placeholder="" required />
                                    </div>
                                </div>

                                <hr>
                         <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-2 control-label"></label>
                           <button type="submit" name="update" class="btn btn-primary mr-1">Update</button>
                             <a href="page-gradingsystem.php"> <button type="button" class="btn btn-danger">Cancel</button></a>
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


