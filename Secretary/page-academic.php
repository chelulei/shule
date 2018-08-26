<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';
include 'connect.php';
include 'count.php';
include 'functions.php';
getUser();
if (isset($_GET['id'])):
    $id = $_GET['id'];
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
                            <li><a href="page-studentsprofile.php?info=<?php echo $id; ?>" class="btn btn-danger"><i
                                            class="fa fa-arrow-left" aria-hidden="true"></i></i>Back</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <table class="table table-hover">
                <?php
                $result = "SELECT * FROM grade  g JOIN students s ON(g.student=s.adm_No)
                       WHERE student='$id'";
                $run = mysqli_query($con, $result);
                //start of loop for displaying products
                $row = mysqli_fetch_array($run);
                $subject = $row['subject'];
                $exam = $row['exam'];
                $score = $row['test'];
                $Image = $row['Image'];

                $teach = "SELECT * FROM user 
                       WHERE id='$id'";
                $sql = mysqli_query($con, $teach );
                $row1 = mysqli_fetch_array($run);
                $fn = $row1['Firstname'];
                $mn = $row1['Middlename'];
                $sn = $row1['Surname'];
                ?>
                <thead>
                <tr>
                    <th colspan="2">
                    </th>
                    <th colspan="3">
                        <p class="text-dark">NAROK SECONADRY SCHOOL </p>
                        <p class="text-dark">P.O BOX 302, NAROK </p>
                        <p class="text-dark">REPORT CARD</p>
                        <p class="text-dark">STUDENT's FULL
                            NAME: <?php echo ucwords($row['Surname'] . ' ' . $row['Firstname'] . ' ' . $row['Middlename']); ?></p>
                    </th>
                    <th>
                        <img src="images/avatar/<?php echo $Image; ?>" width="100" height="100"
                             class="rounded-circle" />
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th>SUBJECT</th>
                    <th>TEST</th>
                    <th>EXAM</th>
                    <th colspan="2">TEACHER</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <tr>
                    <td></td>
                    <td><?php echo $subject; ?></td>
                    <td><?php echo $score; ?></td>
                    <td><?php echo $exam; ?></td>
                    <td colspan="2"><?php echo  ucwords($fn.' '.$mn.' '.$sn); ?></td>
                </tr>
                <tr>
                    <td>TOTAL</td>
                    <td>1</td>
                    <td>2</td>
                    <td colspan="3">3</td>

                </tr>
                <tr>
                    <td>AVERAGE</td>
                    <td>40</td>
                    <td>50</td>
                    <td colspan="3">90</td>
                </tr>
                </tbody>
            </table>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?php include 'footer.php'; ?>