
<?php
include 'head.php';
include 'sidebar.php';
require('../connect.php');
include '../connect.php';
include 'count.php';
if(isset($_GET['id'])):
    $id=$_GET['id'];
endif;
?>
<!-- Left Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include '../header.php'; ?>
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
        <h1>medical</h1>

    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include 'footer.php';    ?>