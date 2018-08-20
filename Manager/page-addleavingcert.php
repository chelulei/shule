<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shuledigital</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="imegs/logo/smlogo.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<?php 
include 'sidebar.php';

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
                        <h1>Dasboard </h1>
                    </div>
                </div>
            </div>

              <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="page-addstuff.php" class="btn btn-info"><i class="fa fa-plus-circle"></i> Add New User</a></li>
                            <li><a href="page-allusers.php" class="btn btn-info"><i class="fa fa-bars"></i> All Users</a> </li>
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
                            <strong class="card-title">Add Users </strong>
                        </div>
                        <div class="card-body">
                                 
                          <form class="form-validate form-horizontal" method="POST" action="Leavingcert.php" id=""> 
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                  <input type="Firstname" class="form-control" id="colFormLabel" name="Firstname" placeholder="Firstname">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Leaving Date/label>
                                <div class="col-sm-10">
                                  <input type="Date" class="form-control" id="colFormLabel" name="Date" placeholder="Date">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Student Nametext</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" name="name" placeholder="name" required="*">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Headteachers Remarks </label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" name="Remarks" placeholder="Remarks">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Co-Curriculum</label>
                                <div class="col-sm-10">
                                  <input type="texr" class="form-control" id="colFormLabel" name="currriculum" placeholder="currriculum">
                                </div>
                              </div>
                                 <br>
                              <br>
                               <div class="page-title">
                                 <input type="submit" value="Save" name ="save" class="btn btn-primary" /> 
                                  <button type="button" class="btn btn-secondary">Cancel</button>
                                </div>
                                   
                            </form>
                        </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->






 <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
