

<?php
error_reporting(0);
include 'head.php';
include 'connect.php';

include 'sidebar.php';
if (isset($_GET['edit'])) {

    $id=$_GET['edit'];

    $sql="SELECT * FROM events WHERE Event_id= '$id'";
    $query=mysqli_query($con, $sql);
    $rows=mysqli_fetch_array($query);
    $id=$rows['Event_id'];
    $Title=$rows['Title'];
    $Start=$rows['Start'];
    $End=$rows['End'];
    $Description=$rows['Description'];
    $Audience=$rows['Audience'];
    $Venue=$rows['Venue'];


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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="page-viewevents.php" class="btn btn-info"><i class="fa fa-bars"></i> View Events</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<!--       <div class="content mt-3">-->
          <div class="animated fadeIn">
              <?php include 'errors.php'?>
            <div class="row">
             <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><i class="fa fa-calendar-o"></i> Events|Create Events</strong>
                        </div>
                    <div class="card-body">
                        
                      <div class="form"  style="align-content: center;padding-left: 120px; 
                             padding-right: 120px">
                        <form class="form-validate form-horizontal" method="POST" action="update-event.php">
                            <input type="hidden" name="id" value="<?php echo  $id;?>">
                            <div class="form-group row" >
                              <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                               <div class="col-sm-10">
                                 <input type="text" class="form-control"  name="Title" placeholder="Title"  value="<?php echo  $Title;?>"/>
                              </div>
                             </div>

                              <div class="form-group row" >
                              <label for="inputEmail3" class="col-sm-2 control-label">Sart Date</label>
                               <div class="col-sm-10">
                                 <input type="Date" class="form-control"  name="Start" value="<?php echo  $Start ;?>"/>
                              </div>
                             </div>

                              <div class="form-group row" >
                              <label for="inputEmail3" class="col-sm-2 control-label">End DateEnd</label>
                               <div class="col-sm-10">
                                 <input type="Date" class="form-control" id="inputEmail3" name="End"  value="<?php echo  $End ;?>"/>
                              </div>
                             </div>

                            <div class="form-group row" >
                              <label for="inputEmail3" class="col-sm-2 control-label">Event Description </label>
                               <div class="col-sm-10">
                                 <input type="text" class="form-control" id="inputEmail3" name="Description" placeholder="Description" value="<?php echo $Description;?>" />
                              </div>

                             </div>
                               <fieldset class="form-group">
                                <div class="row">
                                  <legend class="col-form-label col-sm-2 pt-0">Events Audience</legend>
                                  <div class="col-sm-10">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="Audience" id="gridRadios1" value="All" checked>
                                      <label class="form-check-label" for="gridRadios1">All students</label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Audience" id="gridRadios2" value="Few">
                                    <label class="form-check-label" for="gridRadios2">Specify group of students</label>
                                    <div class=""> </div>
                                  </div>
                                </div>
                              </div>
                            </fieldset>

                           <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Venue</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword" name="Venue" placeholder="Event Venue" value="<?php echo $Venue;?>">
                            </div>
                          </div>
                       
                      
                       <hr>

                        <div class="page-title" style=";">
                         <input type="submit" value="Update Event" name ="update" class="btn btn-primary" />
                            <a href="page-viewevents.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
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

    <?php include 'footer.php';?>
