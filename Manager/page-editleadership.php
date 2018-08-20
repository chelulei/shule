
<?php include 'head.php'; ?>
<!-- Left Panel -->
   <!-- /#left-panel -->
<?php include 'sidebar.php';
 include 'connect.php';

if (isset($_GET['edit'])) {
    $Id = $_GET['edit'];
    $sql = "SELECT * FROM placements  WHERE  place_id= '$Id'";

    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);

    $place_id=$row['place_id'];
    $Student=$row['Student'];
    $Start_date=$row['Start_date'];
    $Position=$row['Position'];
    $Class=$row['Class'];
    $Date_upto=$row['Date_upto'];
    $Description=$row['Description'];
}?>
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

                <form action="update-placement.php" method="post" accept-charset="utf-8" class="form-horizontal" id="" enctype="multipart/form-data"
                    style="margin-left: 100px; margin-right: 100px " 
                ><input type="hidden" name="id" value="<?php echo $place_id;?>">
                      <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Students</label>
                                  <div class="col-10">
                                      <select name="Student" id="Student" class="form-control">
                                          <option>---- Students's Name    ------</option>
                                          <?php

                                          $qry=mysqli_query($con,"SELECT * FROM students");
                                          while($rows=mysqli_fetch_array($qry)){

                                              if($rows['adm_No']==$Student)

                                                  $iselect="selected";
                                              else
                                                  $iselect="";
                                              ?>
                                              <option value="<?php echo $rows['adm_No'];?>" <?php echo $iselect;?> > <?php echo $rows['Surname'].' '.$rows['Firstname'].' ' .$rows['Middlename'];?> </option>
                                              <?php
                                          }

                                          ?>
                                      </select>
                                  </div>
                                </div>

                                <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" id="colFormLabel" value="<?php echo  $Start_date;?>" name="Start_date" placeholder="Start date">
                                </div>
                      </div> 

                          <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Position</label>
                                  <div class="col-10">
                                      <select name="Position" class="form-control" Value="<?php echo($Position); ?>"
                                              required="">
                                          <?php if ($row['Position'] == "Prefect") : ?>
                                              <option value='Prefect' selected>Prefect
                                              </option>
                                          <?php else: ?>
                                              <option value='Prefect'>Prefect</option>
                                          <?php endif; ?>

                                          <?php if ($row['Position'] == "Dorm Captain"): ?>
                                              <option value='Dorm Captain' selected> Dorm Captain
                                              </option>
                                          <?php else: ?>
                                              <option value='Dorm Captain'>Dorm Captain</option>
                                          <?php endif; ?>

                                      </select>
                                  </div>
                                </div>


                        
                             <div class="form-group row">
                                <label for="example-time-input" class="col-2 col-form-label">Representative of</label>
                                  <div class="col-10">
                                      <select name="Class" id="Class" class="form-control">
                                          <option>---- Class's Name   ------</option>
                                          <?php
                                          $c=mysqli_query($con," SELECT * FROM class");
                                          while($ro=mysqli_fetch_array($c)){

                                              if($ro['classId']==$Class)

                                                  $select="selected";
                                              else
                                                  $select="";
                                              ?>
                                              <option value="<?php echo $ro['classId'];?>" <?php echo $select ;?> >  <?php echo $ro['Class'];?> </option>
                                              <?php
                                          }

                                          ?>
                                      </select>
                                  </div>
                                </div>

                           <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Date Upto</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" Value="<?php echo  $Date_upto;?>" id="colFormLabel" name="Date_upto" placeholder="Date Upto">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="colFormLabel" name="Description" placeholder="Description" rows="2" required>
                                  <?php echo $Description;?>
                                  </textarea>
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