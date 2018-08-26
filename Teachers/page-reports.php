<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';
include 'functions.php';
include 'connect.php';
getUser();

$qry = mysqli_query($con, "SELECT * FROM user WHERE id='$user_id'");
$teach = mysqli_fetch_array($qry);
   $fname=$teach['Firstname'];
    $lname=$teach['Middlename'];
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
                    <strong class="card-title"> <i class="fa fa-bullseye"></i> VIEW ALL GRADES </strong>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="page-grades.php" class="btn btn-info"><i class="fa fa-arrow-left"></i>BACK</a></li>
                        <li><a href="#" class="btn btn-info"><i class="fa fa-list"></i> List All</a></li>
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
                </div>

                <form action="" method="POST">
                    <table class="table">
                        <tr>
                            <td>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label"> Student</label>
                                    <div class="col-md-5">
                                        <select name="name" id="student" class="form-control" required>
                                            <option>---- Students's Name ------</option>
                                            <?php
                                            $qry = mysqli_query($con, " SELECT * FROM students");

                                            while ($row = mysqli_fetch_array($qry)) {
                                                ?>
                                                <option value="<?php echo $row['adm_No']; ?>"> <?php echo $row['Surname'] . ' ' . $row['Firstname'] . ' ' . $row['Middlename']; ?> </option>
                                                <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <!-- /.col-md-5 -->
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Year</label>
                                    <div class="col-sm-5">
                                        <select id="yearpicker" name="year" class="form-control"></select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Semester</label>
                                    <div class="col-md-5">
                                        <select name="term" class="form-control">
                                            <option value="Term 1">1stTERM</option>
                                            <option value="Term 2">2nd TERM</option>
                                            <option value="Term 3">3rd TERM</option>
                                        </select>
                                    </div>
                                    <!-- /.col-md-5 -->
                                </div>
                                <!-- /.form-group -->
                                <input type="submit" name="go" value="GET REPORT" class="btn btn-primary btn-block">
                            </td>
                        </tr>
                    </table>
                </form>

                <?php
                $se = mysqli_query($con, "select sum(test) as 'total' from grade");
                $count = mysqli_num_rows($se);
                while ($fetch = mysqli_fetch_array($se)) {
                }

                echo '<br/>';

                if (isset($_POST['go']) && ($_POST['name']) != '') {
                    ?>
                    <style type="text/css">

                        th {
                            border-bottom: 1px solid #333333;
                            border-left: 1px solid #333333;
                            border-top: 1px solid #666666;
                            padding-bottom: 12px;
                        }

                        td {
                            border-bottom: 1px solid #3F3F3F;
                            border-left: 1px solid #333333;
                        }

                        img {
                            border-radius: 5px;
                        }
                    </style><?php

                    $name = $_POST['name'];
                    $year = $_POST['year'];
                    $term = $_POST['term'];
                    $sel = mysqli_query($con, "SELECT *FROM students, subject, grade
 where students.adm_No='$name' AND grade.student='$name' AND grade.year='$year' AND grade.term='$term' AND subject.SubIdNo=grade.subject AND students.adm_No=grade.student");

                    $fetch = mysqli_fetch_array($sel);
                    $count = mysqli_num_rows($sel);

                    if ($count > 0) {
                        $totalT = $fetch['test'];
                        $totalE = $fetch['exam'];
                        $sname = $fetch['Surname'];
                        $fname = $fetch['Firstname'];
                        $mname = $fetch['Middlename'];
                        $totalA = (($fetch['test'] + $fetch['exam']) / 2);
                        echo '<table   style="width:100%"><tr><th width="132">';?>
                        <img src="../Secretary/images/avatar/<?php echo $fetch['Image']; ?>" width="130" height="130"   class="rounded-circle"/>
                        <?php echo '</th>
                        <th colspan="3" align="center">
                            <p CLASS="text-center">NAROK SECONADRY SCHOOL </p>
                                  <p class="text-center">P.O BOX 302, KISORO </p>
                                  <p class="text-center"><U>REPORT CARD</U> </p>
                            <p class="text-center">STUDENT\'s FULL NAME: '.$fetch['Surname'].' '.$fetch['Firstname'].' '.$fetch['Middlename'].'</p></th>
                            <th width="132">'; ?>
                        <img src="../Secretary/images/avatar/<?php echo $fetch['Image']; ?>" width="130" height="130"   class="rounded-circle"/>
                        <?php
                        echo '</th></tr><tr>
                                <td>SUBJECT</td>
                                <td>TEST</td>
                                <td>EXAM</td>
                                <td>AVERAGE</td>
                        <td>TEACHER</td>
                          </tr>
                         <tr> <td>';
                        echo $fetch['Name'] . '</td><td>' ?>
                        <?php
                        if ($fetch['test'] == NULL) {
                            echo 'missed';
                        } else
                            echo $fetch['test'];

                        ?>
                        <?php echo '</td><td>' ?>
                        <?php
                        if ($fetch['exam'] == NULL) {
                            echo 'missed';
                        } else
                            echo $fetch['exam'];

                        ?>
                        <?php echo '</td>  <td>' . (($fetch['test'] + $fetch['exam']) / 2) . '</td><td>' . $fname.' '.$lname . '</td></tr>';


                        while ($fetch = mysqli_fetch_array($sel)) {
                            $totalT += $fetch['test'];
                            $totalE += $fetch['exam'];
                            $totalA += (($fetch['test'] + $fetch['exam']) / 2);
                            echo '<tr><td>' . $fetch['Name'] . '</td><td>' ?>
                            <?php
                            if ($fetch['test'] == NULL) {
                                echo 'missed';
                            } else
                                echo $fetch['test'];

                            ?>
                            <?php echo '</td><td>' ?>
                            <?php
                            if ($fetch['exam'] == NULL) {
                                echo 'missed';
                            } else
                                echo $fetch['exam'];

                            ?>
                            <?php echo '</td> <td>' . (($fetch['test'] + $fetch['exam']) / 2) . '</td><td>' . $fname.' '.$lname . '</td></tr>';

                        }
                        echo '
             <tr>
            <td height="90" valign="bottom">TOTAL</td>
            <td valign="bottom">' . $totalT . '</td>
            <td valign="bottom">' . $totalE . '</td>
           <td valign="bottom">' . $totalA . '</td>
           <td valign="bottom">&nbsp;</td>
             </tr>
             <tr>
            <td>AVERAGE</td>
            <td>' . $totalT / $count . '</td>
            <td>' . $totalE / $count . '</td>
           <td>' . $totalA / $count . '</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>AGGREGATES</td>
            <td><a href="#">' ?>
                        <?php
                      //  include 'maths.php';
                        echo '</a></td>
    <td><a href="#">' ?>
                        <?php

                       // include 'maths2.php';

                        echo '</a></td>
  <td><a href="#">' ?>
                        <?php

                        //include 'maths3.php';

                        echo '</a></td>
   <td>&nbsp;</td>
  </tr>
  <tr>
    <td>GRADE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	 <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p class="text-center">Administrator\'s signature:....................Records officers signature......................<hr/>
      <P class="text-center">Narok seconadary school </P>
      </p></td>
  </tr></table>';
                    } else
                        echo $name . ' does not have his marks recorded. Report not available';


                } ?>
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php
include 'footer.php';
?>