<?php
include 'head.php';
include 'sidebar.php';
include 'functions.php';
include 'connect.php';
getUser();
?>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
      <?php 
        
       include '../header.php';
        ?>
      <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                      <br>
                       <strong class="card-title"> <i class="fa fa-bullseye"></i> Manage Grading </strong>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                             <li><a href="page-grades.php" class="btn btn-info"><i class="fa fa-arrow-left"></i>BACK</a></li>
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
                            <strong class="card-title">Display name of the class gradings</strong>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" role="form" method="POST" action="newgrade.php">
                                <input type="hidden" name="user" value="<?php echo $user_id;?>">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Student</label>
                                    <div class="col-sm-4">
                                        <select name="student" id="student" class="form-control" required>
                                            <option>---- Students's Name   ------</option>
                                            <?php
                                            $qry=mysqli_query($con," SELECT * FROM students");

                                            while($row=mysqli_fetch_array($qry)){
                                                ?>
                                                <option value="<?php echo $row['adm_No'];?>"> <?php echo $row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'];?> </option>
                                                <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Year</label>
                                    <div class="col-sm-4">
                                        <select id="yearpicker" name="year" class="form-control"></select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Term </label>
                                    <div class="col-sm-4">
                                        <select name="term"  class="form-control" required="">
                                            <option>---- Select Term  ------</option>
                                            <option value="Term 1">Term 1</option>
                                            <option value="Term 2">Term 2</option>
                                            <option value="Term 3">Term 3</option>

                                        </select>
                                    </div>
                                </div>
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
                                    <label for="inputEmail3" class="col-sm-2 control-label">Exam</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="exam"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Test</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="test"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-4">
                                        <input type="submit" value="Save" name ="save" class="btn btn-primary" />
                                        <a href="page-grades.php"><button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button></a>

                                    </div>
                                </div>

                        </form>
                        </div>
            
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php
include 'footer.php';
?>