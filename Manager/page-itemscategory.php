<?php
error_reporting(0);
include 'connect.php';
include 'functions.php';
getUser();
include 'head.php';
include 'sidebar.php';


if (isset($_GET['del_id'])) {

    $delete = "DELETE FROM categories WHERE cat_id='$_GET[del_id]'";

    $run_delete= mysqli_query($con,$delete);

    if($run_delete) {

    }else{
        header("Location:page-itemscategory.php?error=Error!!!!!");
    }
}
?>

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
                        <h1>Dashboard </h1>
                    </div>
                </div>
            </div>

              <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="page-inventory.php" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a></li>
                            <li>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#firstModal">
                                    <i class="fa fa-plus"></i>
                                    New Category
                                </a>
                            </li>

                            </a> </li>
                            <!-- <li><a href="#">Inventory Trend</a></li> -->
                            <!-- <li class="active">Inventory Gategory</li> -->
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
                            <strong class="card-title">Items Category </strong>
                        </div>
                        <div class="card-body">

                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                      <thead>
                                      <tr>
                                          <th>S.NO</th>
                                          <th>Category Name</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                      $sql="SELECT * FROM categories";
                                      $run_sql= mysqli_query($con,$sql);
                                      while ($rows= mysqli_fetch_assoc($run_sql)):
                                          $cat_id=$rows['cat_id'];
                                      ?>

                      <tr>
                        <td><?php  echo $rows['cat_id'];?></td>
                       <td><?php echo  $rows['cat_name'];?></td>
                        <td><a href="#"  id="<?php echo $cat_id;?>" class="btn btn-primary edit_cat" data-toggle="modal" data-target="#secondModal"><i class="fa fa-pencil"></i>Edit</a></td>
                        <td><a href="page-itemscategory.php?del_id=<?php echo $cat_id;?>" class="btn btn-danger delete_link"><i class="fa fa-trash-o"></i>Delete</a></td>
                      </tr> 
                     <?php endwhile;?>
                                      </tbody>
                          </tbody>
                          </table>
                        </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="firstModal" tabindex="-1" role="dialog" aria-labelledby="firstModal" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="firstModal">Add Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form  action="new_category.php"   method="POST"  class="form-inline justify-content-center" >
                                <div class="form-group row">
                                    <div class="col-md-12">
                                    <label for="title">Category:</label>
                                    <input type="text" class="form-control" id="category" name="category">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="save"  value="SAVE">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--edit modal-->
            <div class="modal fade" id="secondModal" tabindex="-1" role="dialog" aria-labelledby="secondModal" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="secondModal">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form  action="update-category.php"   method="POST"  class="form-inline justify-content-center" >
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="hidden" id="cid" name="id">
                                    <label for="title">Category:</label>
                                    <input type="text" class="form-control" id="cname" name="category">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" name="update"  value="SAVE">
                    </div>
                    </form>
                </div>
            </div>
        </div>

 <?php include 'footer.php';  ?>
