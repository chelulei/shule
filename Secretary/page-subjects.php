
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
                        <h1>Dashboard</h1>
                          <ol class="breadcrumb text-right">
<li><a href="page-addsubject.php" class="btn btn-info"><i class="fa fa-plus"></i>Add Subject</a></li>
<li><a href="page-subjects.php" class="btn btn-info"><i class="fa fa-eye"></i> View Subjects</a></li>
<li><a href="#" class="btn btn-info"><i class="fa fa-print"></i> Print </a></li>
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
                            <strong class="card-title">Subjects</strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                         <th>Class</th>
                                        <th>Term</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                              <?php 

                                //set counter variable 
                                $counter = 1; 
                              include '../connect.php';

                              // session_start();

                              // $SubIdNo=$_SESSION['SubIdNo'] //get the userID of the user logged in

                                $result = "SELECT * FROM Subject ";
                                $select= mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):

                                        $SubIdNo=$row['SubIdNo'];
                                        $Name=$row['Name'];                                
                                        $Code = $row['Code'];            
                                        $Type=$row['Type'];
                                        $Description=$row['Description'];
                                        $Class=$row['Class'];
                                        $Term=$row['Term'];
                                      
                                       echo '<tr >';
                           ?>
        <tbody>
             <td><?php echo $counter; $counter++; //increment counter by 1 on every pass 
                  ?></td>
                   <td><?php echo $row['Name'];?></td>
                  <td><?php echo ucwords($row['Code']);?> </td>
                  <td><?php echo ucwords($row['Type']);?> </td>
                  <td><?php echo ucwords($row['Description']);?> </td>
                  <td><?php echo ucwords($row['Class']);?> </td>
                  <td><?php echo ucwords($row['Term']);?></td>

                    <td>


              <!-- <a type="button" class="btn btn-info" data-toggle="modal" data-target="#mediumModal"><i class="fa fa-edit"></i>Edit</a> -->
              
              <a href="#edit<?php echo $SubIdNo; ?>" data-toggle="modal" data-target="#mediumModal" class="btn btn-primary"><i class="fa fa-edit"></i><span></span>Edit</a>                             
               <a class="btn btn-info" href="page-subjects.php" ><i class="fa fa-eye"></i>View<span class="text-muted"></span></a>
               <a class="btn btn-danger" href="page-subjects.php" ><i class="fa fa-trash-o"></i>Trash<span class="text-muted"></span></a>

               <!-- <a class="btn btn-danger btn-sm remove" role="button"> <i class="fa fa-trash-o"></i>Trash<span class="text-muted"></span></a> -->
                                              </td>
                                    
                                       <?php endwhile; 
                                        
                                echo '</tr>';
                    
                        ?>
                          </tbody>
                          </table>
                        </div>
                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


               <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                       <div class="modal-body">
                          <form class="form-validate form-horizontal" method="POST" action="addstock.php" id=""> 
                             
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" name="Productname"  value="<?php echo($Name); ?>" placeholder="Name">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Code</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Code" value="<?php echo($Code); ?>" placeholder="Code">
                                </div>
                              </div>

                                 <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Type</label>
                                  <div class="col-10">
                                  <select name="Type"  class="form-control" Value="<?php echo($Type);?>" required="">
                                              
                                          <?php if ($row['Type']== "Elective Subject") :?>
                                           <option value='Elective Subject' selected>Elective Subject</option>
                                          <?php else: ?>
                                          <option value='Elective Subject'>Elective Subject</option>
                                          <?php endif; ?>

                                         <?php if ($row['Type'] == "General Subject"): ?>
                                         <option value='General Subject' selected> General Subject </option> 
                                          <?php else: ?>
                                          <option value='General Subject'>General Subject</option>
                                          <?php endif; ?> 
                                      </select>
                                  </div>
                                </div>
                               <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Class</label>
                                  <div class="col-10">
                                        <select name="Class"  class="form-control" Value="<?php echo($Person);?>" required="">
                                              
                                          <?php if ($row['Class']== "Form 1") :?>
                                           <option value='Form Form 1' selected>Form Form 1</option>
                                          <?php else: ?>
                                          <option value='Form 1'>Form 1</option>
                                          <?php endif; ?>

                                         <?php if ($row['Class'] == "Form 2"): ?>
                                         <option value='Form 2' selected> Form 2</option> 
                                          <?php else: ?>
                                          <option value='Form 2'>Form 2</option>
                                          <?php endif; ?>

                                          <?php if ($row['Class'] == "Form 3"): ?>
                                         <option value='Form 3' selected>Form 3 </option> 
                                          <?php else: ?>
                                          <option value='Form 3'>Form 3</option>
                                          <?php endif; ?>

                                          <?php if ($row['Class'] == "Form 4"): ?>
                                         <option value='Form 4' selected>Form 4 </option> 
                                          <?php else: ?>
                                          <option value='Form 3'>Form 4</option>
                                          <?php endif; ?>

                              
                                        </select>
                                  </div>
                                </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Description </label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" value="<?php echo($Description); ?>" name="Description" nplaceholder="Product description">
                                </div>
                              </div>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>

                          </form>
                        </div>
                    </div>
                </div>
            </div>




 <div class="modal fade" id="mediumModal2" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                 
                                                   
                              </p>
                                  </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div> 

          <?php include 'footer.php';   ?>