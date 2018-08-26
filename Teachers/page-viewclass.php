<?php
include 'head.php';
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
                            <li><a href="#" class="btn btn-info"><i class="fa fa-print"></i> Print Class List</a></li>
                            <li> <a href="page-viewclass.php" class="btn btn-info"><i class="fa fa-bars"></i> All Classes</a> </li>
                           
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
                            <strong class="card-title">Classes </strong>
                        </div>
                        <div style="margin-left: 40px">
                          <br>
                           <h4>History:</h4>
                           <h4>No of Registered students:</h4> 
                           <h4>Class Teacher</h4>
                         </div>

                        <div class="card-body">
                                  <table id="#" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>AdmNo</th>
                                        <th>Gender</th>
                                        <th>Admission Date</th>
                                        <th>Option</th>
                                
                                      </tr>
                                    </thead>
                                    <tbody>


                              <?php
                                include 'connect.php';
                                    
                                $result = "SELECT * FROM students";
                                $select= mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):                               
                                        $adm_No = $row['adm_No'];                                            
                                        $Gendenewdater=$row['Gender'];
                                        $Dateofbirth=$row['Dateofbirth'];
                                          ?> 

                                             <tr>
                                               <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'] );?> </td>
                                              <td><?php echo ucwords($row['adm_No']);?> </td>
                                              <td><?php echo ($row['Gender']);?> </td>
                                              <td><?php echo ucwords($row['Dateofbirth']);?> </td>
                                      <td>

                    <a type="button" href="page-studentsprofile.php" class="btn btn-info"><i class=" fa fa-eye"></i>View Profile </a>
                    <!-- <a class="btn btn-danger" href="Classedit.php" role="button"> <i class="fa fa-cogs></i>Class Settings</a> -->
                                              </td>
                                    </tr>
                                       <?php endwhile; ?>

                          </tbody>
                          </table>
                        </div>
                </div>

                     </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?php include 'footer.php';?>