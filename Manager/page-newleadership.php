
<?php include 'head.php'; ?>
<!-- Left Panel -->
   <!-- /#left-panel -->
<?php include 'sidebar.php';
 include 'connect.php'; ?>
<!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

        <?php include 'header.php';  ?>
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
                    <div class="page-title">       <!-- <li><a href="Page-addstock.php" class="btn btn-info"><i class="fa fa-plus"></i>New Students</a></li> -->
                              <a href="page-newleadership.php" class="btn btn-info"><i class="fa fa-plus"></i> Add  New Students Placement</a>  

                              <a href="page-leadership.php" class="btn btn-info"><i class="fa fa-list"></i> List All</a> 
                            <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->
                         >
                     
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
                            <strong class="card-title">Leaving Certificate</strong>
                        </div>
                        <div class="card-body">	

                <form action="new-placement.php" method="post" accept-charset="utf-8" class="form-horizontal" id="" enctype="multipart/form-data"
                    style="margin-left: 100px; margin-right: 100px " 
                >
                      <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Students</label>
                                  <div class="col-10">
                                      <select name="Student" id="Class" class="form-control" required>
                                          <option>---- Students's Name   ------</option>
                                          <?php
                                          $qry=mysqli_query($con," SELECT * FROM students");

                                          while($row=mysqli_fetch_array($qry)){
                                              ?>
                                              <option value="<?php echo $row['adm_No'];?>"> <?php echo $row['Surname'].' '.$row['Firstname'].' ' .$row['Middlename'];?> </option>
                                              <?php
                                          }

                                          ?>
                                      </select>
                                  </div>
                                </div>

                                <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" id="colFormLabel" name="Start_date" placeholder="Start date">
                                </div>
                      </div> 

                          <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Position</label>
                                  <div class="col-10">
                                        <select name="Position"  class="form-control" Value="" required="">
                                               <option value="" selected="selected">Select Position</option>
                                                <option value="Prefect">PREFECT</option>
                                                <option value="Dorm Captain">DORM CAPTAIN</option>
                                            </select>
                                  </div>
                                </div>


                        
                             <div class="form-group row">
                                <label for="example-time-input" class="col-2 col-form-label">Representative of</label>
                                  <div class="col-10">
                                      <select name="Class" id="Class" class="form-control" required>
                                          <option>---- Class's Name   ------</option>
                                          <?php
                                          $qry=mysqli_query($con," SELECT * FROM class");

                                          while($row=mysqli_fetch_array($qry)){
                                              ?>
                                              <option value="<?php echo $row['classId'];?>"> <?php echo $row['Class'];?> </option>
                                              <?php
                                          }

                                          ?>
                                      </select>
                                  </div>
                                </div>

                           <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Date Upto</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" id="colFormLabel" name="Date_upto" placeholder="Date Upto">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="colFormLabel" name="Description" placeholder="Description" rows="2" required> </textarea>
                                </div>
                              </div>
                
                                    <div class='form-group'><div class="col-md-3"></div><div class="col-md-9">
                                        <input type="submit" name="save" value="Save" id='submit' class='btn btn-primary' />
                                        	<a href="page-extracuri.php" class="btn btn-danger">Cancel</a>

                                        </div>
                                    </div>
 
                </form> 
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>