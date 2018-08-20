<?php 

include("../head.php");

include '../sidebar.php';

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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Class</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 

    <!-- Right Panel -->

         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Class Attendance</strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>No of students</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>English</td>
                                        <td>Janet Wa Susan</td>
                                         <td>
                                         <a href="page-newattendance.php"class="btn btn-info">New attendance</a>
                                         <a href="page-attendancelist.php"class="btn btn-success"><i> </i>View Attendance</a>
                                        </td>

                                        
                                      </tr>
                                      <tr>
                                       <td>2</td>
                                        <td>kiswahili</td>
                                       <td>Sue Chepkoech</td>
                                        <td>
                                        <a href="page-newattendance.php"class="btn btn-info">New attendance</a>
                                        <a href="page-attendancelist.php"class="btn btn-success"><i> </i>View Attendance</a>
                                        </td>


                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Science</td>
                                        <td>sarah Towett</td>
                                         <td>
                                         <a href="page-newattendance.php"class="btn btn-info">New attendance</a>
                                         <a href="page-attendancelist.php"class="btn btn-success"><i> </i>View Attendance</a>
                                        </td>


                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>Social Studies</td>
                                        <td>David Evans</td>
                                        <td>
                                        <a href="page-newattendance.php"class="btn btn-info">New attendance</a>
                                        <a href="page-attendancelist.php"class="btn btn-success"><i> </i>View Attendance</a>
                                        </td>

                                      </tr>
                                      <tr>
                                    
                                    </tbody>
                                  </table>
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
