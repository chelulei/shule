<?php 

include("head.php");

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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Students</a></li>
                            <li><a href="#">Rollcall</a></li>
                            <li class="active">Grades</li>
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
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Stud. Index</th>
                                        <th>Grades</th>
                                        <th>Marks</th>
                                        <th>Remarks</th>
                                        <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>001</td>
                                        <td>A</td>
                                        <td>80</td>
                                        <td>Excellent</td>

                                        <td>
                                         <a href="#"class="btn btn-info"> Edit</a>
                                         <a href="#"class="btn btn-danger"><i> </i>  Move to Trash</a>
                                        </td>

                                        
                                      </tr>
                                      <tr>
                                        <td>002</td>
                                        <td>A</td>
                                        <td>80</td>
                                        <td>Excellent</td>
                                         <td>
                                          <a href="#"class="btn btn-info"> Edit</a>
                                         <a href="#"class="btn btn-danger"><i> </i>  Move to Trash</a>
                                        </td>

                                      </tr>
                                      <tr>
                                        <td>003</td>
                                        <td>A</td>
                                        <td>80</td>
                                        <td>Excellent</td>
                                         <td>
                                         <a href="#"class="btn btn-info"> Edit</a>
                                         <a href="#"class="btn btn-danger"><i> </i>  Move to Trash</a>
                                        </td>

                                      </tr>
                                      <tr>
                                       <td>004</td>
                                        <td>A</td>
                                        <td>80</td>
                                        <td>Excellent</td>
                                         <td>
                                         <a href="#"class="btn btn-info"> Edit</a>
                                         <a href="#"class="btn btn-danger"><i> </i>  Move to Trash</a>
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
