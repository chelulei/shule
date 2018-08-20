
<?php
error_reporting(0);
include 'connect.php';
include 'head.php';
include 'sidebar.php';

if (isset($_GET['edit'])) {

   $id=$_GET['edit'];
   
    $class_sql="SELECT * FROM students WHERE  adm_No= '$id'";
    
    $class_query=mysqli_query($con, $class_sql);

    $class_rs=mysqli_fetch_array($class_query);

    $adm_Nom=$class_rs['adm_No'];
    $Surname=$class_rs['Surname'];
    $Middlename=$class_rs['Middlename'];
    $Firstname=$class_rs['Firstname'];
    $Dateofbirth=$class_rs['Dateofbirth'];
    $Gender=$class_rs['Gender'];
    $Class=$class_rs['Class'];
    $Homeaddress=$class_rs['Homeaddress'];
    $Parentname=$class_rs['Parentname'];
    $Phone=$class_rs['Phone'];
    $Email=$class_rs['Email'];
    $Formerschool=$class_rs['Formerschool'];
    $Entrymarks=$class_rs['Entrymarks'];

}
?>
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php
    include 'header.php';
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
                        <li><a href="page-students.php" class="btn btn-info"><i class="fa fa-folder-open"></i>View Students</a></li>
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
                            <strong class="card-title">Students' Registration Form</strong>
                        </div>
                        <div class="card-body">
                            <div class="form"  style="align-content: center;padding-left: 120px;
                      padding-right: 120px">
                                <h5 class="text-center"> Student Information</h5>
                                <br>
                                <form class="form-validate form-horizontal"  action="update-student.php"  method="POST" >
                                    <input type="hidden" name="id" value="<?php echo $adm_Nom;?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label">Surname</label>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                                    <input class="form-control" id="Surname" name="Surname" type="text" value="<?php echo $Surname;?>">
                                                </div>
                                                <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label">Middle Name</label>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                                    <input class="form-control" id="Middlename" name="Middlename" type="text" value="<?php echo  $Middlename ;?>">
                                                </div>
                                                <!-- <small class="form-text text-muted">Middles Name</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label">First Name</label>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                                    <input class="form-control" id="Firstname" name="Firstname" type="text"    value="<?php echo $Firstname;?>">
                                                </div>
                                                <!-- <small class="form-text text-muted">Middles Name</small> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address" class="control-label">Birth Date</label>

                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
                                                    <input class="form-control" id="Dateofbirth" name="Dateofbirth" type="date" value="<?php echo $Dateofbirth;?>">
                                                </div>
                                                <!-- <small class="form-text text-muted">ex. 99/99/9999</small> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label">Class</label>
                                                <div class="input-group">
                                                    <select name="Class" id="Class" class="form-control">
                                                        <option>---- Class's Name   ------</option>
                                                        <?php
                                                        $qry=mysqli_query($con," SELECT * FROM class");
                                                        while($row=mysqli_fetch_array($qry)){

                                                            if($row['classId']==$Class)

                                                                $iselect="selected";
                                                            else
                                                                $iselect="";
                                                            ?>
                                                            <option value="<?php echo $row['classId'];?>" <?php echo $iselect ;?> >  <?php echo $row['Class'];?> </option>
                                                            <?php
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                                <!-- <small class="form-text text-muted">Middles Name</small> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label">Gender</label>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-asterisk"></i></div> -->
                                                    <select name="Gender"  class="form-control">
                                                        <option value="<?php echo $Gender;?>"><?php echo $Gender;?></option>
                                                        <option value="Female">Female</option>
                                                        <option value="Male">Male</option>
                                                    </select>
                                                </div>
                                                <!-- <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label">Home Address</label>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-male"></i></div> -->
                                                    <input class="form-control" id="Homeaddress" name="Homeaddress" type="text" value="<?php echo $Homeaddress ;?>">
                                                </div>
                                            </div>
                                            <!-- <small class="form-text text-muted">ex. 999-99-9999</small> -->
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div>
                                    <hr>
                                    <strong>Parent Infromation</strong>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label"> parent Name</label>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                                    <input class="form-control" id="Parentname" name="Parentname" type="text" value="<?php echo $Parentname;?>">
                                                </div>
                                                <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label">Phone Number</label>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                                    <input class="form-control" id="Phone" name="Phone" type="number" value="<?php echo $Phone;?>">
                                                </div>
                                                <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Email Address</label>
                                        <div class="input-group">
                                            <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                            <input class="form-control" id="Email" name="Email" type="email" value="<?php echo  $Email;?>">
                                        </div>
                                        <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                    </div>
                                    <br>
                                    <hr>
                                    <STRONG> Other Records </STRONG>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label"> Former School</label>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                                    <input class="form-control" id="Formerschool" name="Formerschool" type="text" value="<?php echo $Formerschool;?>">
                                                </div>
                                                <!-- <small class="form-text text-muted">Email Address </small> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" form-control-label">Entry Marks</label>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
                                                    <input class="form-control" id="Entrymarks" name="Entrymarks" type="number" value="<?php echo $Entrymarks;?>">
                                                </div>
                                                <!-- <small class="form-text text-muted">ex. 99/99/9999</small> -->
                                            </div>
                                        </div>
                                    </div
                                    <br><br>
                                    <div class="form-group text-center">
                                        <button type="submit"  title="update"  name ="update" class="btn btn-info btn-lg" style="width: 20%;"> <i class="fa fa-floppy-o fa-lg"></i> Update</button>
                                        <a href="page-students.php"> <button type="button" class="btn btn-danger btn-lg" style="width: 20%;"><i class="fa fa-ban fa-lg" aria-hidden="true"></i> Cancel</button></a>
                                    </div>
                                </form>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    </br>
                    <br>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
    <?php include 'footer.php'; ?>
