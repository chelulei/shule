

        <!-- Left Panel -->
   <!-- /#left-panel -->
        <?php include 'head.php'; ?>
        <?php include 'sidebar.php'; ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

        <?php include '../header.php';  ?>
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
                              <a href="page-addextracuri.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Studnet to Activity </a>  
                              <a href="page-extracuri.php" class="btn btn-info"><i class="fa fa-list"></i> All Extra Currivcular Activities</a> 
                            <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->
                         >
                     
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
                            <strong class="card-title">Leaving Certificate</strong>
                        </div>
                        <div class="card-body">	

                <form action="" method="post" accept-charset="utf-8" class="form-horizontal" id="" enctype="multipart/form-data"
                    style="margin-left: 100px; margin-right: 100px " 
                >
                    
                       

                      <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Students</label>
                                  <div class="col-10">
                                        <select name="Position"  class="form-control" Value="" required="">
                                            <option value="" selected="selected">Select Student</option>
                                                <option value="321">ABIGAEL ,MWENDE NZIOKI (Form Four )</option>
                                                <option value="221">GIDDY BARASA (Form Three )</option>
                                                <option value="222">GITHUA ALEX (Form Three )</option>
                                                <option value="268">GLENNIS WANJIRU (Form Two )</option>
                                                <option value="341">GRACE KAVATI (Form One )</option>
                                                <option value="344">Gabrel Karisa (Form One )</option>
                                                <option value="312">HILDA KYALO (Form Four )</option>
                                                <option value="325">IAN ADIKA KIBISU (Form Four )</option>
                                                <option value="263">ISAAC MAINA NDIRANGU (Form Two )</option>
                                            </select>
                                  </div>
                                </div>

                               

                          <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Activity</label>
                                  <div class="col-10">
                                        <select name="Activity"  class="form-control" Value="" required="">
                                               <option value="" selected="selected">Select Position</option>
                                                <option value="2">PREFECT</option>
                                                <option value="1">DORM CAPTAIN</option>
                                            </select>
                                  </div>
                                </div>

                           <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                  <input type="Date" class="form-control" id="colFormLabel" name="Start_date" placeholder="Start date">
                                </div>
                      </div> 

                          <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Date To </label>
                                <div class="col-sm-10">
                                  <input type="Date" class="form-control" id="colFormLabel" name="date-to" placeholder="Date to">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Remarks</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="colFormLabel" name="Description" placeholder="Description" rows="2"> </textarea>
                                </div>
                              </div>
                
                                    <div class='form-group'><div class="col-md-3"></div><div class="col-md-9">
                                        <input type="submit" name="submit" value="Save" id='submit' class='btn btn-primary' />
                                        	<a href="page-newleadership" class="btn btn-danger">Cancel</a></div>
                                    </div>
 
                </form> 
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div><?php include 'footer.php'; ?>

