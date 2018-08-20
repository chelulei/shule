<?php
include 'head.php';
include 'connect.php';
include "functions.php";
include 'sidebar.php';
getUser();
?>

    <div id="right-panel" class="right-panel">
       <!-- Header-->
      <?php  include 'header.php';  ?>
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
                            <li><a href="page-addclasses.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Class</a></li>
                            <!-- <li><a href="page-management.php" class="btn btn-info"><i class="fa fa-folder-open"></i>Items</a></li> -->
                            <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->
                           
                        </ol>
                    </div>
                </div>
            </div>
          </div>
                        

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                     <div class="col-md-12">
                         <?php include 'errors.php'?>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Classes </strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                          <th>Class Teacher</th>
                                          <th>Students</th>
                                        <th>Max.of Students</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </thead>
                                    <tbody>

                              <?php
                            //set counter variable 
                            $counter = 1;


                          $result =mysqli_query($con, "SELECT * FROM class c JOIN user u ON(c.Classteacher=u.id) WHERE u.id='$user_id'");

                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($result)):
                                        $id=$row['classId'];
                                        $Class=$row['Class'];                                
                                        $Classteacher = $row['Classteacher'];
                                       $Nostudents=$row['Nostudents'];
                                       $students=$row['students'];
                                      echo '<tr>';

                                          ?> 
                                              <td><?php echo  $counter++; //increment counter by 1 on every pass
                                              ?></td>
                                               <td><?php echo ucwords($Class);?></td>
                                                <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename']);?></td>
                                              <td><?php echo ( $students);?> </td>
                                              <td><?php echo ($Nostudents);?> </td>

                                              <td>
                                                  <?php if ($students == $Nostudents ): ?>
                                                      <button class="btn btn-danger btn-block">Full</button>
                                                      <?php else: ?>
                                                     <button class="btn btn-success btn-block">Available</button>
                                                  <?php endif ?>
                                              </td>
                                      <td>
                    <a class="btn btn-danger" href="class-edit.php?update=<?php echo $id;?>" role="button"> <i class="fa fa-pencil-square-o"></i>EDIT</a>
                    <a class="btn btn-danger delete_link" href="delete-class.php?delete=<?php echo $id;?>" role="button"> <i class="fa fa-trash-o" aria-hidden="true"></i></i>DELETE</a>

                                      </td>
                                    
                                       <?php endwhile; 
                                        
                                echo '</tr>';
                    
                        ?>
                          </tbody>
                          </table>
                        </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
            <?php include 'footer.php';?>
