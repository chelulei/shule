
<?php include 'head.php'; ?>
<?php include 'count.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include '../Header.php'; ?>
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
                        <!-- <li><a href="page-teacher.php" class="btn btn-info"><i class="fa fa-folder-open"></i>View Teachers</a></li> -->

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <!--Errors starts -->
        <?php include 'errors.php';?>
        <!-- end errors -->
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Parents List </strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                              <thead>
                                              <th>#</th>
                                              <th>Name</th>
                                              <th>Phone</th>  
                                              <th>Address</th>
                                              <th>Email</th>
                                              <th>Status</th>
                                              <th>Options</th>
                                              </thead>
                                              <tbody>
                                                                  <tr>
                                                  <td>1.</td> 

                                                  <td>Jorum Mwangi</td>
                                                  <td>0724544545</td>
                                                  <td></td>
                                                  <td>jorum-016@gmail.com</td>
                                                  <td><span class="label label-success">Active</span></td>

                                                   <td width='350'>
                                                  <div class='btn-group'>
                                                          <a  class='btn btn-success' href='page-viewparents.php'><i class='fa fa-eye-open'></i> View</a>
                                                   </div>
                                                      <div class='btn-group'>
                                                     <a  class='btn btn-primary' href='page-editparent.php'> <i class='fa fa-edit'></i> Edit</a>
                                                      </div>
                                                 <div class='btn-group'>
                                                   <a onClick="return confirm('Are you sure you want to deactivate this parent')" class='btn btn-danger'  href='deactivate.php' ><i class='fa fa-trash'></i> Deactivate</a>
                                                              </div>
                                                                                                      </td>
                                              </tr>
                                                              <tr>
                                                  <td>2.</td> 

                                                  <td>FRANCIS MWAURA</td>
                                                  <td>0725415263</td>
                                                  <td></td>
                                                  <td>francis-015@gmail.com</td>
                                                  <td><span class="label label-success">Active</span></td>

                                                  <td width='350'>
                                                  <div class='btn-group'>
                                                          <a  class='btn btn-success' href='page-viewparent.php'><i class='fa fa-eye-open'></i> View</a>
                                                   </div>
                                                      <div class='btn-group'>
                                                     <a  class='btn btn-primary' href='#'> <i class='fa fa-edit'></i> Edit</a>
                                                      </div>
                                                 <div class='btn-group'>
                                                   <a onClick="return confirm('Are you sure you want to deactivate this parent')" class='btn btn-danger'  href='#' ><i class='fa fa-trash'></i> Deactivate</a>
                                                              </div>
                                                                                                      </td>
                                              </tr>

                                            </tbody>
                                          </table>
                        </div>
                    </div>

                </div><!-- .animated -->
            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
        <?php  include 'footer.php'; ?>



