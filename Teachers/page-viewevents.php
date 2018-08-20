
<?php
include 'head.php';
include 'connect.php';

include 'sidebar.php';

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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                             <li><a href="page-events.php" class="btn btn-info"><i class="fa fa-plus"></i>New Event</a></li>

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
                            <strong class="card-title">All Events</strong>
                        </div>
                    <div class="card-body">

           <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                 </tr>
            </thead>
            
            <tbody>


                 <?php

                 $counter = 1; 
                    include 'connect.php';
                              
                          $result = "SELECT * FROM events";
                          $select= mysqli_query($con,$result);
                              
                              //start of loop for displaying products
                       while($row = mysqli_fetch_array($select)):

                 $Event_id=$row['Event_id'];
                $Title=$row['Title'];
                $Start=$row['Start'];
                $End=$row['End'];
                $Description=$row['Description'];
                $Audience=$row['Audience'];
                $Venue=$row['Venue'];

                  echo '<tr>';

                ?>

                <div class="block-fluid"> 
                <div class="widget">
                    <div class="block-fluid events">
                        <div class="item">
                              <div class="date ">
                                 <td>
                                 <div class="date">
                                     <div><span class="fa fa-calendar"></span></div>
                                     <br>
                                     <br>
                                         <span class="month" style=""><?php echo ucwords($row['Start']); ?></span> <br>
                                        <b style="font-size: 24px">Start Date</b>
                                    </div> 
                                </td>

                                   <td> 
                                    <div class="info">
                                    <a href="#"><b>Title:</b> <span style="margin-left:20px;"><?php echo ucwords($row['Title']); ?></span></a>
                                    <ul class="sList ui-sortable" id="sort_1">
                                    <li  style="list-style-type: none;">
                                    <b>End Date:</b> <span style="margin-left:20px;margin-right:20px;"><?php echo ucwords($row['End']); ?></span> <br>
                                    <b>Venue:</b> <span style="margin-left:20px; margin-right:20px;"><?php echo ucwords($row['Venue']); ?></span> <br>
                                    <b>Audience:</b> <span style="margin-left:20px; margin-right:20px;"><?php echo ucwords($row['Audience']); ?></span></li>
                                    <li style=" list-style-type: none;"><b>Description:</b>
                                        <span style="margin-left:20px;"><?php echo ucwords($row['Description']); ?></span>
                                    </li>

                                    </ul>   
                           <div class="TAR">
                              <a class="btn btn-small btn-default" href="#"><i class="fa fa-eye-open"></i> View Details</a>
                                <a class="btn btn-small btn-default" href="page-editevents.php?edit=<?php echo $Event_id; ?>"><i class="fa fa-edit"></i> Edit Details</a>
                                <a class="btn btn-small btn-default" onClick="return confirm('Are you sure You Want to delete this record?')" href="delete-event.php?delete=<?php echo $Event_id; ?>"><i class="fa fa-trash"></i> Trash</a>
                            </div>                                          
                    </div>
                    </td>

                    <?php endwhile; 
                                        
                                echo '</tr>';
                                ?>
                  </div>    
                  </div>
                </div> 
            </div>
            <!-- end of the table -->

</tbody>
</table>
                        
                      
                </div>  
            </div>
        </div>
     </div>
   </div><!-- .animated -->   
  </div><!-- .content -->


    </div><!-- /#right-panel -->

<?php include 'footer.php';?>

