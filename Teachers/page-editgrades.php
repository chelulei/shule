<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';
include 'functions.php';
include 'connect.php';
getUser();

if (isset($_GET['update'])) {

    $id=$_GET['update'];

    $sql="SELECT * FROM grade WHERE gradeid= '$id'";

    $query=mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);

    $id=$row['gradeid'];
    $user=$row['user'];
    $student=$row['student'];
    $year=$row['year'];
    $term=$row['term'];
    $subject=$row['subject'];
    $exam=$row['exam'];
    $score=$row['test'];

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
                      <br>
                       <strong class="card-title"> <i class="fa fa-bullseye"></i> Manage Grading </strong>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                             <li><a href="Page-newgradingsystem.php" class="btn btn-info"><i class="fa fa-plus"></i> Add New grading</a></li>
                            <li><a href="page-grading.php" class="btn btn-info"><i class="fa fa-list"></i> List All</a></li>
                            <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->
                           
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
                            <strong class="card-title">Display name of the class gradings</strong>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" role="form" method="POST" action="update-grade.php">
                                <input type="hidden" name="user" value="<?php echo $user_id;?>">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Student</label>
                                    <div class="col-sm-4">
                                        <select name="student" id="student" class="form-control" required>
                                            <option>---- Students's Name   ------</option>
                                            <?php
                                            $qry=mysqli_query($con," SELECT * FROM students");

                                            while($rows=mysqli_fetch_array($qry)){


                                                if($rows['adm_No']==$student)

                                                    $select="selected";
                                                else
                                                    $select="";
                                                ?>
                                                <option value="<?php echo $rows['adm_No'];?>" <?php echo $select ;?> > <?php echo $rows['Surname'].' '.$rows['Firstname'].' '.$rows['Middlename'];?> </option>
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
                                        <select name="term" class="form-control">
                                                required="">
                                            <?php if ($term == "Term 1") : ?>
                                                <option value='Term 1' selected>Term 1
                                                </option>
                                            <?php else: ?>
                                                <option value='Term 1'>Term 1</option>
                                            <?php endif; ?>

                                            <?php if ($term == "Term 2"): ?>
                                                <option value='Term2' selected> Term 2
                                                </option>
                                            <?php else: ?>
                                                <option value='Term 2'>Term 2</option>
                                            <?php endif; ?>

                                            <?php if ($term == "Term 3"): ?>
                                                <option value='Term 3' selected> Term 3
                                                </option>
                                            <?php else: ?>
                                                <option value='Term 3'>Term 3</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Subject subject </label>
                                    <div class="col-sm-4">
                                        <select name="subject" id="subject" class="form-control">
                                            <option>---- Subjetcs's Name   ------</option>
                                            <?php
                                            $qry=mysqli_query($con," SELECT * FROM subject");
                                            while($row=mysqli_fetch_array($qry)){

                                                if($row['SubIdNo']==$subject)

                                                    $iselect="selected";
                                                else
                                                    $iselect="";
                                                ?>
                                                <option value="<?php echo $row['SubIdNo'];?>" <?php echo $iselect ;?> >  <?php echo $row['Name'];?> </option>
                                                <?php
                                            }

                                            ?>
                                        </select>
                                </div>
                              </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Exam</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="exam"  class="form-control" value="<?php echo $exam;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Score</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="test"  class="form-control" value="<?php echo $score;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-4">
                                        <input type="submit" value="Save" name ="update" class="btn btn-primary" />
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