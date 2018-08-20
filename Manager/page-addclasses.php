
<?php
include 'head.php';
include 'connect.php';
include 'sidebar.php';
?>
<style>
    #auto{
        background-color:#eee;
        cursor:pointer;
    }
</style>
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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="page-classes.php" class="btn btn-danger">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i></i>Back</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>`

       <div class="content mt-3">
          <div class="animated fadeIn">
            <div class="row">
             <div class="col-md-12">
                 <?php include 'errors.php'?>
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Add Classes</strong>
                        </div>
                    <div class="card-body">
                        
                      <div class="form"  style="align-content: center;padding-left: 120px; 
                             padding-right: 120px">
                         <form class="form-horizontal" role="form" method="POST" action="newclass.php">
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 control-label">Classes</label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="inputtext" name="Class" placeholder="Class"  required/>
                                </div>
                              </div>
                             <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 control-label">Class teacher</label>
                                <div class="col-sm-10">

                                    <select  id="Classteacher" name="Classteacher" class="form-control" >
                                        <option>---- Teachers's Name   ------</option>
                                        <?php
                                        $tc_name=mysqli_query($con,"SELECT * FROM user WHERE role='Teacher'");
                                        while($row=mysqli_fetch_array($tc_name)){
                                            if($row['id']==$rs_upd['Idno'])
                                                $iselect="selected";
                                            else
                                                $iselect="";
                                            ?>
                                            <option value="<?php echo $row['id'];?>" <?php echo $iselect;?> > <?php echo $row['Surname'].' '. $row['Firstname'];?> </option>
                                            <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                              </div>

                            <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. of Student</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="inputnumberer" name="Nostudents" placeholder="No. of Student" required>
                            </div>
                          </div>
                          <hr>
                            <div class="page-title" style="margin-left: 30px">
                         <input type="submit" value="Save" name ="save" class="btn btn-primary" />
                                <a href="page-classes.php"> <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button></a>
                         </div>
                         
                        </form>

                    </div>
                </div>  
            </div>
        </div>
     </div>
   </div><!-- .animated -->   
  </div><!-- .content -->
    </div><!-- /#right-panel -->
<?php include 'footer.php' ?>
