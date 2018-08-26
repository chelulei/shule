
<?php
include 'connect.php';
include 'head.php';
include 'sidebar.php';
include 'functions.php';
getUser();
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
          <h1>Dasboard </h1>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
              <li><a href="page-inventory.php" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</a></li>

          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content mt-3">
      <?php include  'errors.php';?>
    <div class="animated fadeIn">

      <div class="row">
       <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Stocks Managements </strong>
          </div>
          <div class="card-body">
   <h1>ADD STOCK</h1>


        </div>

       </div><!-- .animated -->
     </div><!-- .content -->


   </div><!-- /#right-panel -->

   <!-- Right Panel -->
   <?php include 'footer.php';?>