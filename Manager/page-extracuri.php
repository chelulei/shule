
<?php
include 'head.php';
include 'functions.php';
?>
<!-- Left Panel -->
   <!-- /#left-panel -->
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
                              <a href="page-newleadership.php" class="btn btn-info"><i class="fa fa-plus"></i> Add  New Students Placement</a>  

                              <a href="page-leadership.php" class="btn btn-info"><i class="fa fa-list"></i> List All</a> 

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
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">

 
               <thead>
                <th>#</th>
                <th>Student</th>    
                <th>Activity</th>   
                <th>Date From</th>  
                <th>Date To</th> 
                <th>Remarks</th>  
                
                <th>Options</th>
        </thead>
        <tbody>
               <?php
                            //set counter variable
                            $counter = 1;

                            include 'connect.php';

                            $result = "SELECT * FROM placements p JOIN students s ON(p.Student=s.adm_No) ";

                            $select = mysqli_query($con, $result);

                            //start of loop for displaying products
                            while ($row = mysqli_fetch_array($select)):

                                $place_id=$row['place_id'];
                                $Student=$row['Student']; 
                                $Start_date=$row['Start_date'];
                                $Position=$row['Position'];
                                $Class=$row['Class'];
                                $Date_upto=$row['Date_upto'];
                                $Description=$row['Description'];
                                ?>
                                <td>
                                <?php echo  $counter++; //increment counter by 1 on every pass
                                    ?></td>
                                <td><?php echo ucwords($row['Surname'] . ' ' . $row['Firstname']); ?> </td>
                                <td><?php echo($Position); ?> </td>
                                <td><?php  echo  formatDate($Start_date); ?></td>
                                 <td><?php echo  formatDate( $Date_upto); ?></td>
                                  <td><?php echo   $Description; ?></td>
                 <td width="20%">

                 <div class="btn-group">
                    <a href="page-editleadership.php?edit=<?php echo $place_id?>" class="btn btn-danger"><i class="fa fa fa-edit"></i> Edit</a>
                    <a href="" class="btn btn-info"><i class="fa fa-eye"></i> View</a>
                    <a class="btn btn-danger" onClick="return confirm('Are you sure You Want to delete this record?')" href='delete-placement.php?delete=<?php echo $place_id?>'><i class="fa fa-trash"></i> Trash</a>
                </div>
                </td>
                </tr>
                <?php endwhile;?>
        </tbody>

    </table>
</div>
    </div>
 
                    </div>
                </div>
            </div>
        </div>


        <?php include 'footer.php'; ?>