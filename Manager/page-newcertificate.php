
<?php
include 'head.php';
include 'sidebar.php';
include 'connect.php';
include 'functions.php';
getUser();
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
                        <h1>Dasboard </h1>
                    </div>
                </div>
            </div>

              <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                               <li><a href="page-leavingcert.php" class="btn btn-info"><i class="fa fa-arrow-left"></i>BACK</a></li>
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
                            <strong class="card-title">Leaving Certificate </strong>
                        </div>
                        <div class="card-body">
                          <form class="form-validate form-horizontal" method="POST" action="newceretificate.php" id=""  style="margin-left: 250px; margin-right: 50px;">
                              <div class="form-group row">
                                  <label for="colFormLabel" class="col-sm-3 col-form-label">Date</label>
                                  <div class="col-sm-9">
                                      <input type="date" name="Date" id="" class="form-control">
                                      <!-- /# -->
                                      <!-- /# -->
                                  </div>
                              </div>
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Student's NAME</label>
                                <div class="col-sm-9">
                                    <select name="Student" id="Student" class="form-control" required>
                                        <option>---- Students's Name   ------</option>
                                        <?php
                                        $qry=mysqli_query($con," SELECT * FROM students");

                                        while($row=mysqli_fetch_array($qry)){
                                            ?>
                                            <option value="<?php echo $row['adm_No'];?>"> <?php echo $row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'];?> </option>
                                            <?php
                                        }

                                        ?>
                                    </select>

                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Remarks</label>
                                <div class="col-sm-9">
                                    <textarea name="Remarks" id="" cols="20" rows="5" class="form-control"></textarea>
                                    <!-- /# -->
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Co-curriculam Activities</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="colFormLabel" name="Activities" placeholder="Activities">
                                </div>
                              </div>
                            
                              <br>
                              <br>
                               <div class="page-title">
                                   <label for="colFormLabel" class="col-sm-3 col-form-label"></label>
                                 <input type="submit" value="Save" name ="save" class="btn btn-primary" />
                                   <a href="page-leavingcert.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                                </div>
                                   
                            </form>
                        </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel --><?php include 'footer.php';?>
