
<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';
include 'connect.php';
if (isset($_GET['edit'])) {
    $id=$_GET['edit'];
    $sql="SELECT * FROM giveitems WHERE  id= '$id'";

    $query=mysqli_query($con, $sql);
    $rs=mysqli_fetch_array($query);
    $id=$rs['id'];
    $date=$rs['date'];
    $item=$rs['item'];
    $quantity=$rs['quantity'];
    $givento=$rs['givento'];
    $comment=$rs['comment'];

}
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
                    <h1>Dashboard </h1>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="Page-addgiveitems.php" class="btn btn-info"><i class="fa fa-plus"></i> Add give items</a></li>
                        <li><a href="page-giveitems.php" class="btn btn-info"><i class="fa fa-folder-open"></i> Give Items</a></li>
                        <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <?php include 'errors.php'?>
        <div class="animated fadeIn">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Give Items</strong>
                        </div>


                        <div class="card-body">

                            <form class="form-validate form-horizontal" method="POST" action="update-give.php" id=""  style="margin-left: 250px; margin-right: 50px;">
                                <div class="form-group row">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="Date" class="form-control" value="<?php echo $date;?>" id="colFormLabel" name="date" placeholder="Date">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="colFormLabel" value="<?php echo $item;?>" name="item" placeholder="Items">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="Number" value="<?php echo $quantity;?>" class="form-control" id="colFormLabel" name="quantity" placeholder="Quantity">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Comment</label>
                                    <div class="col-sm-10">
                                        <input type="Comment" class="form-control" value="<?php echo $comment;?>"  name="comment" placeholder="Comment">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-time-input" class="col-2 col-form-label">Given to</label>
                                    <div class="col-10">
                                        <select name="givento"  class="form-control"  required="">
                                            <?php if ( $givento == "Deputy Principal") : ?>
                                                <option value='Deputy Principal' selected>Deputy Principal
                                                </option>
                                            <?php else: ?>
                                                <option value='Deputy Principal'>Deputy Principal</option>
                                            <?php endif; ?>
                                            <?php if ( $givento == "Principal"): ?>
                                                <option value='Principal' selected> Principal
                                                </option>
                                            <?php else: ?>
                                                <option value='Principal'>Principal</option>
                                            <?php endif; ?>
                                            <?php if ( $givento == "Teacher"): ?>
                                                <option value='Teacher' selected> Teacher
                                                </option>
                                            <?php else: ?>
                                                <option value='Teacher'>Teacher</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <br>
                                <br>
                                <div class="page-title">
                                    <label for="example-time-input" class="col-2 col-form-label"></label>
                                    <input type="submit" value="Save" name ="update" class="btn btn-primary" />
                                    <a href="page-giveitems.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                                </div>

                            </form>
                        </div>


                    </div><!-- .animated -->
                </div><!-- .content -->


            </div><!-- /#right-panel -->

            <!-- Right Panel -->

<?php include 'footer.php'?>