<?php
include 'head.php';
include 'sidebar.php';
include 'functions.php';
include 'connect.php';
getUser();
?><!-- Left Panel -->
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
                            <li><a href="student-fees.php" class="btn btn-info"><i class="fa fa-info-circle"></i>View ALL Fees</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <?php include 'errors.php'?>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">School Fees</strong>
                            </div>
                            <div class="card-body">

                                <div class="form"  style="align-content: center;padding-left: 120px;
                             padding-right: 120px">
                                    <form class="form-horizontal" role="form" method="POST" action="newfess.php">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Stundent</label>
                                            <div class="col-sm-6">

                                                <select name="Student" id="student" class="form-control" required>
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
                                            <label for="inputPassword3" class="col-sm-2 control-label">Class</label>
                                            <div class="col-sm-6">
                                                <select name="Class" id="Class" class="form-control" required>
                                                    <option>---- Class's Name   ------</option>
                                                    <?php
                                                    $qry=mysqli_query($con," SELECT * FROM class");

                                                    while($row=mysqli_fetch_array($qry)){
                                                        ?>
                                                        <option value="<?php echo $row['classId'];?>"> <?php echo $row['Class'];?> </option>
                                                        <?php
                                                    }

                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Term </label>
                                            <div class="col-sm-6">
                                                <select name="Term"  class="form-control" required="">
                                                    <option>---- Select Term  ------</option>
                                                    <option value="Term 1">Term 1</option>
                                                    <option value="Term 2">Term 2</option>
                                                    <option value="Term 3">Term 3</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Year</label>
                                            <div class="col-sm-6">
                                                <select id="yearpicker" name="Year" class="form-control"></select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Fees</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="Tuition" id="" class="form-control" placeholder="CURRENT TUTION">
                                                <!-- /# -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Amount</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="Amount" id="" class="form-control">
                                                <!-- /# -->
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="page-title" style="margin-left: 30px">
                                            <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                            <input type="submit" value="Save" name ="save" class="btn btn-primary" />
                                            <a href="student-fees.php"> <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button></a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include 'footer.php';?>