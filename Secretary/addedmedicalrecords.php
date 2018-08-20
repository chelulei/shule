<?php 

include("head.php");

include 'sidebar.php';

?>

    <div id="right-panel" class="right-panel">

        <!-- Header->
      <?php 
        
       include 'header.php';
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
                        <a href="#"class="btn btn-info"> New Medical Records  </a> &nbsp
                        <a href="addedmedicalrecords.php"class="btn btn-info">All Medical Records</a>
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
                            <strong class="card-title">Medical Records </strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Admin No.</th>
                                        <th>Date</th>
                                        <th>Student</th>
                                        <th>Illness</th>
                                        <th>Comment</th>
                                        <th>Action Taken</th>
                                        <th>Recorded by </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>001</td>
                                        <td>03/02/2018</td>
                                        <td>Daniel Otieno</td>
                                        <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                        <td> </td>
                                        <td></td>
                                        <td>My Nurse </td>

                                        
                                      </tr>
                                      <tr>
                                        <td>002</td>
                                        <td>03/05/2018</td>
                                        <td>Sharon Cherop</td>
                                        <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                        <td> </td>
                                        <td></td>
                                        <td>My Nurse </td>

                                      </tr>
                                      <tr>
                                        <td>003</td>
                                        <td>22/05/2018</td>
                                        <td>Nandia Njue</td>
                                        <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                        <td> </td>
                                        <td></td>
                                        <td>My Nurse </td>

                                      </tr>
                                      <tr>
                                       <td>004</td>
                                       <td>02/06/2018</td>
                                        <td>Njacha nyamira</td>
                                        <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                                         <td> </td>
                                        <td></td>
                                        <td>My Nurse </td>

                                      </tr>
                                      <tr>
                                    
                                    </tbody>
                                  </table>
                        </div>
            
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?php  include 'footer.php';  ?>

