
<?php
include 'connect.php';
include 'head.php';
include 'sidebar.php';
include 'functions.php';
getUser();
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
          <h1>Dasboard </h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
              <li><a href="page-items.php" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</a></li>

          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content mt-3">
      <?php include  'errors.php';?>
    <div class="animated fadeIn">

      <div class="row">
       <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Items Managements </strong>
          </div>
          <div class="card-body">

            <form class="form-validate form-horizontal" method="POST" action="additem.php" enctype="multipart/form-data">
                <input type="hidden" class="form-control" id="colFormLabel" name="user"  <?php echo $user_id; ?>>
              <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="colFormLabel" name="Productname" placeholder="Product name">
                </div>
              </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select name="Category" id="Category" class="form-control">
                            <option>---- Category Name   ------</option>
                            <?php
                            $qry=mysqli_query($con," SELECT * FROM categories");

                            while($row=mysqli_fetch_array($qry)){
                                ?>
                                <option value="<?php echo $row['cat_id'];?>"> <?php echo $row['cat_name'];?> </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
              <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                  <input type="Number" class="form-control" id="colFormLabel" name="Quantity" placeholder="Quantity">
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Unit Price</label>
                <div class="col-sm-10">
                  <input type="Number" class="form-control" id="colFormLabel" name="Unitprice" placeholder="Unit Price">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-time-input" class="col-2 col-form-label">Person Responsible</label>
                <div class="col-10">
                  <select name="Person"  class="form-control" required="">
                    <option value="Person Responsible">Select person responsible</option>
                    <option value="Deputy Principal">Deputy Principal</option>
                    <option value="Principal">Principal</option>
                    <option value="Teacher">Teacher</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputFile" class="col-2 col-form-label">Receipt Number</label>
                <div class="col-10">
                    <input type="number" name="Receipt" id="" class="form-control">
                    <!-- /# -->
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Description </label>
                <div class="col-sm-10">
                    <textarea name="Description"  cols="20" rows="4" class="form-control"></textarea>
                </div>
              </div>
              <br>
              <br>
                <div class="form-group row">
                    <label for="exampleInputFile" class="col-2 col-form-label"></label>
                    <div class="col-10">
                        <input type="submit" value="Save" name ="save" class="btn btn-primary" />
                        <a href="page-inventory.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </div>
           </form>
         </div>
       </div><!-- .animated -->
     </div><!-- .content -->
   </div><!-- /#right-panel -->
   <!-- Right Panel -->
   <?php include 'footer.php';?>