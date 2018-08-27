
<?php
include 'head.php';
include 'connect.php';
include 'functions.php';
getUser();
  include 'sidebar.php';
?>
    <div id="right-panel" class="right-panel">
       <!-- Header-->
      <?php  include 'header.php';  ?>
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
                            <!-- <li><a href="page-addstuff.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Users Group</a></li> -->
                            <li><a type="button" href="addgroupuser.php" class="btn btn-info"> <i class="fa fa-plus"></i> Add Users Group</a></li>
                          <li><a href="page-usersgroup.php" class="btn btn-info"><i class="fa fa-bars"></i> List Group</a></li>
                                
                        </ol>
                    </div>
                </div>
            </div>
          </div>
                        

        <div class="content mt-3">
            <?php include 'errors.php';?>
            <div class="animated fadeIn">

                <div class="row">
                     <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Users</strong>
                             </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Option</th>
                                
                                      </tr>
                                    </thead>
                                    <tbody>
                              <?php 

                            //set counter variable 
                            $counter = 1;
                                $result = "SELECT * FROM usergroup ";
                                $select= mysqli_query($con,$result);
              
                                    //start of loop for displaying products
                                while($row = mysqli_fetch_array($select)):


                                        $groupid  =$row['groupid'];
                                        $role=$row['role'];
                                        $Description=$row['Description'];

                                          ?>
                                           <tr>
                                              <td><?php echo $counter;   $counter++; //increment counter by 1 on every pass 
                                              ?></td>
                                             
                                              <td><?php echo ($row['role']);?> </td>
                                              <td><?php echo ucwords($row['Description']);?> </td>
                                            
                                      <td>
                                          <div class="btn bt-group">
                                              <a href="#mediumModal" class="btn btn-outline-primary edit_g"  id="<?php echo $groupid; ?>"   data-toggle="modal" data-target="#mediumModal"><i class=" fa fa-edit"></i> Edit </a>
                                              <a href="delete-usergroup.php?delete=<?php echo $groupid;?>" class="btn btn-outline-danger delete_link"><i class="fa fa-trash-o"></i>DETE</a>
                                          </div>
                                          <!-- /.btn bt-group -->
                                             
                                         </td>
                                         </tr>
                                       <?php endwhile; ?>
                                        

                          </tbody>
                          </table>
                        </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

    <!-- add modal -->
    <!-- Edit modal -->
    <!-- Edit modal -->

          <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="mediumModalLabel">Edit UserGroup</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                                <div class="modal-body">
                                  <div class="card-body">
                                     <form class="form-validate form-horizontal" method="POST" action="update-usersgroup.php">
                                         <input type="hidden" name="id" id="groupid">
                                         <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                                        <!-- <div class="col-sm-10"> -->
                                          <input type="text" class="form-control" id="Name" name="Name">
                                        <!-- </div> -->
                                      </div>

                                      <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
                                        <!-- <div class="col-sm-10"> -->
                                          <input type="text" class="form-control" id="Description" name="Description">
                                        <!-- </div> -->
                                      </div>

                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                         <button type="submit" name="update"   class="btn btn-primary">Confirm</button>
                                     </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



<!-- View modal -->

  <div class="modal fade" id="mediumModalview" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">View Users Group</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                  <div class="modal-body">
                                      <p>
                                         
                                  <div class="card-body">
                                   <!-- <form class="form-validate form-horizontal" method="POST" action="Users.php" id="">  -->
                                    <div class="form-group row">
                                      <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                                      <!-- <div class="col-sm-10"> -->
                                        <input type="Firstname" class="form-control" id="colFormLabel" name="Name" value="Name" placeholder="Name">
                                      <!-- </div> -->
                                    </div>

                                    <div class="form-group row">
                                      <label for="colFormLabel" class="col-sm-2 col-form-label">Descriptiom</label>
                                      <!-- <div class="col-sm-10"> -->
                                        <input type="text" class="form-control" id="colFormLabel" name="Middlename" placeholder="Middlename">
                                      <!-- </div> -->
                                    </div>
                                  </p>
                              </div>
                    </div>
                </div>
            </div>



                  <!-- Delete -->
                  <div class="modal fade" id="modal-1">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button> <!--button you can click to exit the modal-->
                              <h3 class="modal-title">Delete User </h3>
                          </div>
                             <div class="modal-body">
                              <form class="form-horizontal" id="contact_form" method="POST" action="delete.php"> <!--once save is clicked, it will be redirected to the same page-->
                                       <input type="hidden" name="delete"  value="<?php echo $_SESSION['id'];?>" />
                                        <label style="text-align: right; font-size: 20px; padding-bottom: 2%">Are you sure you want to delete? <?php echo $Firstname. " " . $Surname; ?>
                                        <div style="padding-right: 30%"> Please input a reason...  </div> </label>
                                      <div class="col-sm-12"">
                                          <input id="cp1" type="text"  size="24" name="comment" id="comment" placeholder="enter a reason"  class="form-control"  required="" >
                                       
                                      </div>
                                  <div class="modal-footer" style="margin-top: 2%">
                                     <a type="button" href="page-allusers.php" class="btn btn-info"><i class=" fa fa-eye-o"></i> No </a>
                                     <input type="submit" name="delete" value="Yes"><i class=" fa fa-trash-o">
                                      <i class=" fa fa-trsh-o"></i><input  class="btn btn-danger"  value="Delete"/> 
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  </div>
<!-- end delete modal -->

<?php include 'footer.php';?>