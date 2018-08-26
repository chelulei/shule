<?php
include 'head.php';
include 'sidebar.php';
include 'functions.php';
include 'connect.php';
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
                      <br>
                       <strong class="card-title"> <i class="fa fa-bullseye"></i> Manage Grading </strong>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                             <li><a href="page-addgrades.php" class="btn btn-primary mr-1"><i class="fa fa-plus"></i> Add New grades</a></li>
                               <li>
                                   <a class="btn btn-info" href="page-reports.php" role="button"> <i class="fa fa-search" aria-hidden="true">
                                       </i>VIEW REPORTS
                                   </a>
                               </li>
                        </ol>
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
                            <strong class="card-title">Display name of the class gradings</strong>
                        </div>
                        <div class="card-body">

                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Students</th>
                                    <th>Years</th>
                                    <th>Terms</th>
                                    <th>Subjects</th>
                                    <th>Exam</th>
                                    <th>Score</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //set counter variable
                                $counter = 1;

                                $result =mysqli_query($con, "SELECT * FROM grade g JOIN students s ON(g.student=s.adm_No)
                                    JOIN subject su ON(g.subject=su.SubIdNo)
                                  WHERE user= '$user_id'");
                                //start of loop for displaying products
                                while($row = mysqli_fetch_array($result)):
                                    $id=$row['gradeid'];
                                    $user=$row['user'];
                                    $student=$row['student'];
                                    $year=$row['year'];
                                    $term=$row['term'];
                                    $subject=$row['Name'];
                                    $exam=$row['exam'];
                                    $score=$row['test'];
                                    ?>
                                  <tr>
                                    <td><?php echo ucwords($row['Surname'].' '.$row['Firstname'].' '.$row['Middlename']);?></td>
                                    <td><?php echo $year;?> </td>
                                      <td><?php echo ($term);?> </td>
                                      <td><?php echo ($subject);?> </td>
                                      <td><?php echo $exam ;?> </td>
                                      <td><?php echo $score ;?></td>
                                    <td>
                                        <div class="btn btn-group">
                                        <!-- /.btn btn-group -->
                                        <a class="btn btn-primary" href="page-editgrades.php?update=<?php echo $id;?>" role="button"> <i class="fa fa-pencil-square-o"></i>EDIT</a>
                                        <a class="btn btn-danger delete_link" href="delete-grade.php?delete=<?php echo $id;?>" role="button"> <i class="fa fa-trash-o" aria-hidden="true"></i></i>DELETE</a>
                                        </div>
                                    </td>
                                     </tr>
                                <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>
            
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->
    <!-- Right Panel -->

<?php
include 'footer.php';
?>