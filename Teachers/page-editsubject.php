<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';

include 'connect.php';
if (isset($_GET['update'])) {
    $SubIdNo = $_GET['update'];
    $sub_sql = "SELECT * FROM subject WHERE  SubIdNo= '$SubIdNo'";

    $query = mysqli_query($con, $sub_sql);
    $row = mysqli_fetch_array($query);
    $id= $row['SubIdNo'];
    $Name= $row['Name'];
    $Type= $row['Type'];
    $Description=$row['Description'];
    $Class =$row['Class'];
    $Term=$row['Term'];
    $Code=$row['Code'];

}
?>

    <div Idno="right-panel" class="right-panel">

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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="page-classes.php" class="btn btn-danger">
                                    <i class="fa fa-arclass_rs-left" aria-hIdnoden="true"></i></i>Back</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="class_rs">
                    <div class="col-md-12">
                        <?php include 'errors.php' ?>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit Class</strong>
                            </div>
                            <div class="card-body">

                                <div class="form" style="align-content: center;padding-left: 120px;
padding-right: 120px">
                                    <form class="form-validate form-horizontal" method="POST" action="updatesubject.php"
                                          id="">
                                        <input type="hidden" name="id" value="<?php echo  $id; ?>">
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="colFormLabel" name="Name"
                                                       value="<?php echo  $Name; ?>" placeholder="Name" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">Code</label>
                                            <div class="col-sm-10">
                                                <input type="Number" class="form-control" id="colFormLabel" name="Code"
                                                       value="<?php echo $Code; ?>" placeholder="Code" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-time-input" class="col-2 col-form-label">Type</label>
                                            <div class="col-10">
                                                <select name="Type" class="form-control" Value="<?php echo($Type); ?>"
                                                        required="">
                                                    <?php if ($row['Type'] == "Term 1") : ?>
                                                        <option value='Term 1' selected>Term 1
                                                        </option>
                                                    <?php else: ?>
                                                        <option value='Term 1'>Term 1</option>
                                                    <?php endif; ?>

                                                    <?php if ($row['Type'] == "Term 2"): ?>
                                                        <option value='Term 2' selected> Term 2
                                                        </option>
                                                    <?php else: ?>
                                                        <option value='Term 2'>Term 2</option>
                                                    <?php endif; ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-time-input" class="col-2 col-form-label">Class</label>
                                            <div class="col-10">
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
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-time-input" class="col-2 col-form-label">School Term</label>
                                            <div class="col-10">
                                                <select name="Term" class="form-control" Value="<?php echo($Term); ?>"
                                                        required="">
                                                    <?php if ($row['Term'] == "Term 1") : ?>
                                                        <option value='Term 1' selected>Term 1
                                                        </option>
                                                    <?php else: ?>
                                                        <option value='Term 1'>Term 1</option>
                                                    <?php endif; ?>

                                                    <?php if ($row['Term'] == "Term 2"): ?>
                                                        <option value='Term 2' selected> Term 2
                                                        </option>
                                                    <?php else: ?>
                                                        <option value='Term 2'>Term 2</option>
                                                    <?php endif; ?>
                                                    <?php if ($row['Term'] == "Term 3"): ?>
                                                        <option value='Term 3' selected> Term 2
                                                        </option>
                                                    <?php else: ?>
                                                        <option value='Term 3'>Term 3</option>
                                                    <?php endif; ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel"
                                                   class="col-sm-2 col-form-label">Description </label>
                                            <div class="col-sm-10">
                                                <textarea name="Description" id="Description" cols="5" rows="4" class="form-control" required>
                                                    <?php echo $Description;?>
                                                </textarea>
                                            </div>
                                        </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                   <div class="col-md-2"></div>
                                    <div class="col-10">
                                        <a href="page-subjects.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                                        <button type="submit" class="btn btn-primary" name="update">Confirm</button>
                                    </div>
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
<?php include 'footer.php';
?>