
<?php
include 'connect.php';
include 'head.php';
include 'sidebar.php';
if (isset($_GET['edit'])){
    $id=$_GET['edit'];
$result = "SELECT * FROM stock WHERE id='$id'";
$select= mysqli_query($con,$result);

//start of loop for displaying products
$row = mysqli_fetch_array($select);
    $id=$row['id'];
    $date=$row['date'];
    $item = $row['item'];
    $closing=$row['closing'];
    $description=$row['description'];
    $takenby=$row['takenby'];

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
                            <li><a href="Page-takestock.php" class="btn btn-info"><i class="fa fa-plus"></i>Take Stock</a></li>
                            <li><a href="page-stocktaking.php" class="btn btn-info"><i class="fa fa-bars"></i>List All</a></li>
                           
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
                            <strong class="card-title">Stock Taking</strong>
                        </div>
                        <div class="card-body">
                      <form class="form-validate form-horizontal" method="POST" action="update-stocktaking.php" id=""  style="margin-left: 250px; margin-right: 50px;">
                              <div class="form-group row">
                                  <input type="hidden" name="id" value="<?php echo $id;?>">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" value="<?php echo $date;?>" id="colFormLabel" name="date" placeholder="Date">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" value="<?php echo $item;?>" name="item" placeholder="Product">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Closing Stock</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" value="<?php echo $closing;?>"  id="colFormLabel" name="closing" placeholder="Closing Stock">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea  class="form-control" cols="30" rows="5"   name="description"  placeholder="description">
                                <?php echo $description;?>
                                    </textarea>
                                    <!-- /# -->
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Taken bY</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo $takenby;?>"  id="colFormLabel" name="takenby" placeholder="Taken by">
                                </div>
                              </div>
                             
                                 <br>
                              <br>
                               <div class="page-title">
                                   <label for="colFormLabel" class="col-sm-2 col-form-label"></label>
                                 <input type="submit" value="Save" name ="update" class="btn btn-primary" />
                                   <a href="page-stocktaking.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                                </div>
                                   
                            </form>
                        </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

 <?php include 'footer.php'?>