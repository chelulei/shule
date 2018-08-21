
<?php
include 'head.php';
include 'sidebar.php';
include 'functions.php';
include 'connect.php';
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
             <a href="page-addmedical.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Medical Records</a>			 
			 <a href="page-medical.php" class="btn btn-info"><i class="fa fa-list"> </i> All Medical Records</a> 
             
                 </div>
                </div>
            </div>
        </div>


       <div class="content">
           <?php include 'errors.php'?>
            <div class="row">

                <div class="col-md-12">
                         <div class="widget">
    		   <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Medical Record </strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
					 <thead>
								<th>Date</th>
								<th>Student</th>
								<th>Sickness Reported</th>
								<th>Action Taken</th>
								<th>Comment</th>	
								<th>Recorded by</th>	
								<th >Options</th>
						</thead>
						<tbody>
                       <?php
                        //set counter variable
                        $counter = 1;
                        $result = "SELECT * FROM medical m JOIN students s ON(m.Student=s.adm_No) JOIN user u ON(m.User=u.id) ";
                        $select= mysqli_query($con,$result);

                        //start of loop for displaying products
                        while($row = mysqli_fetch_array($select)):
                            $medic_id=$row['medic_id'];
                            $Student=$row['Student'];
                            $Date=$row['Date'];
                            $Report=$row['Report'];
                            $Action=$row['Action'];
                            $Description=$row['description'];
                            $user=$row['username'];
                            ?>
                            <td><?php echo  formatDate($Date);?> </td>
                            <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename'] );?> </td>
                            <td><?php echo $Report;?> </td>
                            <td><?php echo  $Action;?> </td>
                            <td><?php echo $Description;?> </td>
                            <td><?php echo $user;?> </td>

							 <td>
                                 <div class="btn-group">
								<a  href='page-editmedical.php?edit=<?php echo $medic_id;?>' class="btn btn-primary"><i class='fa fa-edit '></i> Edit</a>
							  
								<a  class="btn btn-danger" onClick="return confirm('Are you sure You Want to delete this record?')" href='delete-medical.php?delete=<?php echo $medic_id;?>'><i class='fa fa-trash'></i> Trash</a>
                                 </div>
                             </td>
								</tr>
                        <?php endwhile;?>
                        </tbody>

					</table>

	
</div>
                        <?php include 'footer.php';?>
