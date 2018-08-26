
<?php
include 'head.php';
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
                      <br>
                       <strong class="card-title"> <i class="fa fa-bullseye"></i> Manage Grading </strong>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                             <li><a href="Page-newgradingsystem.php" class="btn btn-info"><i class="fa fa-plus"></i> Add New grading</a></li>
                            <li><a href="page-grading.php" class="btn btn-info"><i class="fa fa-list"></i> List All</a></li>
                            <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->
                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>

         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">ss

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Display name of the class gradings</strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Maximum Score</th>
                                        <th>Minimum Score</th>
                                        <th>Remarks</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>80</td>
                                        <td>Excellent</td>
                                        
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>80</td>
                                        <td>Excellent</td>
                                         

                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>80</td>
                                        <td>Excellent</td>
                                        
                                        </tr>
                                    
                                    </tbody>
                                  </table>
                        </div>
            
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?php include 'footer.php'?>