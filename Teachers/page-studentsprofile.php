<?php include 'head.php';   ?>
<!-- Left Panel -->
<!-- /#left-panel -->
<?php include 'sidebar.php'; ?>
<!-- Left Panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php
    include '../header.php';
    ?>
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
                        <li><a href="page-students.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></i>Back</a></li>
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
                        <div class="card-body">
                            <table>

                                <?php
                                include '../connect.php';

                                if (isset($_GET['info'])) {

                                    $adm_No=$_GET['info'];

                                    $qry = "SELECT * FROM students WHERE adm_No ='$adm_No'";
                                    $run = $db->query($qry);
                                    $rows = $run->fetch_assoc();

                                    $_SESSION['student'] =$rows['adm_No'];
                                    $Firstname=$rows['Firstname'];
                                    $Middlename=$rows['Middlename'];
                                    $Surname=$rows['Surname'];
                                    $Class=$rows['Class'];
                                    $Gender=$rows['Gender'];
                                    $Homeaddress=$rows['Homeaddress'];
                                    $Parentname=$rows['Parentname'];
                                    $Phone=$rows['Phone'];
                                    $Formerschool=$rows['Formerschool'];
                                    $Entrymarks=$rows['Entrymarks'];

                                }

                                ?>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Student Details</th>
                                    <th>Admnission Details </th>
                                    <th>Other Details</th>
                                    <th> Fee Payments Details</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>

                                    <td>

                                        <form action="#" method="post">
                                            <label class="header">Profile Photo:</label>
                                            <br>
                                            <image id="profileImage" src="images/default.png" width="100" height="100"/>
                                            <br><br><br>
                                            <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                                        </form>
                                    </td>
                                    <td width="250px">
                                        <b>Name:</b> <?php echo  $Surname.' '. $Firstname.' '. $Middlename; ?><br>
                                        <b>Admin No.</b> <?php echo $rows['adm_No']; ?><br>
                                        <b>Birthday:</b> <?php echo  $Class; ?><br>
                                        <b>Gender:</b><?php echo  $Gender; ?>  <br>
                                    </td>
                                    <td width="250px">
                                        <b>Class:</b> Form One <br>
                                        <b>Admitted By:</b> March 30 2017<br>
                                        <b>Admitted By:</b> John Kiyamo
                                    </td>
                                    <td width="300px">
                                        <b>Residential address:</b> <?php echo $Homeaddress; ?> <br>
                                        <b>Former school:</b><?php echo $Formerschool; ?> <br>
                                        <b>Entry Marks:</b> <?php echo $Entrymarks; ?> <br>
                                        <b>Medical History:</b> High Fever<br>
                                        <b>Doctors' Name:</b> Ann Nji<br>
                                        <b>Dr. Phone No:</b> 07354264362476
                                    </td>
                                    <td width="200px">
                                        </br>
                                        <ul style="list-style-type: none;">
                                            <li><a href="#"class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i>Fee Payable Ksh.8,000</a></li>&nbsp &nbsp
                                            <li> <a href="#"class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i>Fee Paid Ksh. 5, 000 </a> </li>&nbsp &nbsp
                                            <li>  <a href="#"class="btn btn-danger"><i class="glyphicon glyphicon-pencil"> </i> Fee Balance Ksh. 3000</a> </li>&nbsp&nbsp
                                            <br>
                                            <li>  <a href="page-accountstatement.php"class="btn btn-Info"><i class="glyphicon glyphicon-pencil"> </i>View Account Breakdown </a> </li>&nbsp&nbsp



                                        </ul>




                                        </ul>
                                        </li>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                    </td>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary mb-1"  class="Active">
                            Parents' Details
                        </button>

                        <button type="button" class="btn btn-secondary mb-1" >
                            student's Academic Records
                        </button>
                        <button type="button" class="btn btn-secondary mb-1">
                            Leadership Position
                        </button>
                        <button type="button" class="btn btn-secondary mb-1">
                            Displinary Records
                        </button>
                        <button type="button" class="btn btn-secondary mb-1">
                            Dorm Records
                        </button>

                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

</div><!-- /#right-panel -->
<?php include 'footer.php';   ?>
