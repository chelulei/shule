<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="shortcut icon" href="images/logo/small_logo.png">
    <title>Shule Degital</title>
      <link rel="icon" type="image/ico" href="images/logo/smlogo.png"
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/logo/smlogo.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

<?php 
include '../connect.php';

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
                             <li><a href="Page-addstock.php" class="btn btn-info"><i class="fa fa-plus"></i>New Teachers</a></li>
                            <li><a href="page-management.php" class="btn btn-info"><i class="fa fa-folder-open"></i>View Teacher</a></li>
                             <li><a href="page-management.php" class="btn btn-info"><i class="fa fa-folder-open"></i>School Calendar</a></li>
                         >
                        </ol>
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
                    include '../connect.php';
                              
                          $result = "SELECT * FROM events";
                          $select= mysqli_query($con,$result);
                              
                              //start of loop for displaying products
                       while($row = mysqli_fetch_array($select)):

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
                                <a class="btn btn-small btn-default" href="#"><i class="fa fa-edit"></i> Edit Details</a>
                                <a class="btn btn-small btn-default" onClick="return confirm('Are you sure You Want to delete this record?')" href="#"><i class="fa fa-trash"></i> Trash</a>
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



    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

</body>
</html>

