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

    <!-- <link rel="apple-touch-icon" href="apple-icon.png"> -->
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    <link rel="shortcut icon" href="imeges/smlogo.png" type="image/smlogo.png">

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
      <?php  include '../header.php';  ?>
      <!-- /header -->
        <!-- Header-->
      <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard </h1>
                    </div>
                </div>
            </div>

              <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <!-- <li><a href="Page-addclasses.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Class</a></li> -->
                            <li><a href="#" class="btn btn-info"><i class="fa fa-plus"></i> Add New Attendance</a></li>
                            <li> <a href="page-viewclass.php" class="btn btn-info"><i class="fa fa-eye"></i> View Attendance </a> </li>
                           
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
                            <strong class="card-title"> <i class="fa fa-user"></i> Attendance </strong>
                        </div>
                      

                        <div class="card-body">
                            <form class="form-horizontal" role="form" method="POST" action="newclass.php">
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 control-label">Attendance Date </label>
                                <div class="col-sm-4">
                                 <input type="Date" class="form-control" id="inputtext" name="Attendance " placeholder="Attendance " />
                                </div>
                              </div>
                             <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 control-label">Reasons For Attendance</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="sel1">
                                    <option>Whole day</option>
                                    <option>Morning</option>
                                    <option>Afternoon</option>
                                    <option>Evening</option>
                                    <option>Class</option>
                                  </select>
                                </div>
                              </div>

                                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Student</th>
                                        <th>
                                         <input type="checkbox" id="checkbox111" class="Filled-in checkbox not checked" >   Present</th>
                                        <th> 
                                        <input type="checkbox" id="checkbox111" class="Filled-in checkbox not checked" >
                                          Absent</th>
                                        <th>Remarks</th>
                                        <!-- <th>Option</th> -->
                                
                                      </tr>
                                    </thead>
                                    <tbody>
                           <hr>
                          

                        </form>
                            
                          </tbody>
                          </table>




                        </div>
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
