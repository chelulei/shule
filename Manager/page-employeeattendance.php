
<?php
include 'head.php';
include 'connect.php';
include 'functions.php';
getUser();
include 'sidebar.php';
?>
<style>
    #auto{
        background-color:#eee;
        cursor:pointer;
    }
    .table-sortable tbody tr {
        cursor: move;
    }

</style>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
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
                            <li><a href="page-classes.php" class="btn btn-danger">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i></i>Back</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>`

       <div class="content mt-3">
          <div class="animated fadeIn">
            <div class="row">
             <div class="col-md-12">
                 <?php include 'errors.php'?>
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Employees Attendance</strong>
                        </div>
                    <div class="card-body">

                        <div class="container">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                        <thead>
                                        <tr >
                                            <th class="text-center">
                                                Name
                                            </th>
                                            <th class="text-center">
                                               TIME IN
                                            </th>
                                            <th class="text-center">
                                             TIME OUT
                                            </th>
                                            <th class="text-center">
                                                Option
                                            </th>
                                            <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr id='addr0' data-id="0" class="hidden">
                                            <td data-name="name">
                                                <input type="text" name='name0'  placeholder='Name' class="form-control"/>
                                            </td>
                                            <td data-name="date">
                                                <input type="text" name='mail0' placeholder='Email' class="form-control"/>
                                            </td>
                                            <td data-name="desc">
                                                <input type="text" name='mail0' placeholder='Email' class="form-control"/>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="#" id="add_row" class="btn btn-primary pull-right">Add Row</a>
                        </div>
                    </div>
            </div>
        </div>
     </div>
   </div><!-- .animated -->   
  </div><!-- .content -->
    </div><!-- /#right-panel -->
<?php include 'footer.php' ?>
