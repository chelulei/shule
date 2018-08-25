
<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';
require('connect.php');
include 'connect.php';
include 'count.php';
include 'functions.php';
getUser();
if(isset($_GET['id'])):
    $id=$_GET['id'];
endif;


?>
<!-- Left Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include 'header.php'; ?>
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
                        <li><a href="page-studentsprofile.php?info=<?php echo $id;?>" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></i>Back</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <!-- /. -->
        <div class="container">
            <div class="row">
                <div class="col-m-3">
                   <div class="profile"></div>
                    <?php
                    $result = "SELECT * FROM students  WHERE adm_No='$id'";
                    $run=mysqli_query($con,$result);
                    //start of loop for displaying products
                    $row = mysqli_fetch_array($run);
                    $image= $row['Image']
                    ?>
                    <img src="images/avatar/<?php echo $image;?>"
                        width="80" height="80" class="rounded-circle" alt="profile"
                         onerror="this.style.display='none'"/>
                </div>
                <!-- /.col-m-3 -->
        </div>
        <!-- /.container -->
        </div>
        <br>
        <!-- /.row -->
        <table class="table table-hover">
            <!-- /.row -->
            <thead>
            <!-- /.row -->
            <tr>
                <th></th>
                <th scope="col">SUBJECT</th>
                <th scope="col">TEST</th>
                <th scope="col">EXAM</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <?php
        $result = "SELECT * FROM grade  WHERE student='$id'";

                $run=mysqli_query($con,$result);
                //start of loop for displaying products
                while($row = mysqli_fetch_array($run)):
                  $subject=$row['subject'];
                  $exam = $row['exam'];
                  $score=$row['score'];?>
                <tr>
                <td></td>
                <td><?php echo $subject;?></td>
                <td><?php echo $exam;?></td>
                <td><?php echo $score;?></td>
              </tr>
            <?php endwhile;?>
            <tr><td>TOTAL</td><td>1</td><td>2</td><td>3</td></tr>
            <tr><td>AVERAGE</td><td><td><td></td></td></td><td></td></tr>
            </tbody>
        </table>
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include 'footer.php';    ?>