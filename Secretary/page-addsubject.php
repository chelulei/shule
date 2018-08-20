<?php
include 'head.php';
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
<li><a href="page-addsubject.php" class="btn btn-info"><i class="fa fa-plus"></i>Add Subject</a></li>
<li><a href="page-subjects.php" class="btn btn-info"><i class="fa fa-eye"></i> View Subjects</a></li>
<li><a href="#" class="btn btn-info"><i class="fa fa-print"></i> Print </a></li>
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
                            <strong class="card-title">Subjects</strong>
                        </div>
                        <div class="card-body">

                                 <div class="form"  style="align-content: center;padding-left: 120px;
                             padding-right: 120px">
                     <form class="form-validate form-horizontal" method="POST" action="newsubject.php" id="">
                             <div class="form-group">
                                    <label class=" form-control-label">Name</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                        <input class="form-control" id="Name" name="Name" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Code</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                        <input class="form-control" id="Code" name="Code" type="text">
                                    </div>
                                    <!-- <small class="form-text text-muted">Middles Name</small> -->
                                </div>


                                <div class="form-group">
                                    <label class=" form-control-label">Type</label>
                                    <div class="input-group">
                                           <select name="Type"  class="form-control" required="">
                                            <option value=""></option>
                                            <option value="Elective Subject">Elective Subject</option>
                                            <option value="General Subject">General Subject</option>

                                            </select>
                                    </div>
                                    <!-- <small class="form-text text-muted">Middles Name</small> -->
                                </div>

                                 <div class="form-group">
                                    <label class=" form-control-label">Description</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                        <input class="form-control" id="Description" name="Description" type="text">
                                    </div>

                                </div>
                           <br>
                               <strong> Assign Subject to Class</strong>
                          <hr size="30px">
                           <br>
                           <br>
                             <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class=" form-control-label">Class </label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-asterisk"></i></div> -->
                                            <select name="Class"  class="form-control" required="">
                                                <option value=""></option>
                                                <option value="Form 1">Form 1</option>
                                                <option value="Form 2">Form 2</option>
                                                <option value="Form 3">Form 3</option>
                                                <option value="Form 4">Form 4</option>
                                            </select>

                                        </div>
                                    </div>

                                 <div class="form-group col-md-6">
                                    <label class=" form-control-label">School Terms</label>
                                    <div class="input-group">
                                        <!-- <div class="input-group-addon"><i class="fa fa-asterisk"></i></div> -->
                                            <select name="Term"  class="form-control" required="">
                                                <option value=""></option>
                                                <option value="Term 1">Term 1</option>
                                                <option value="Term 2">Term 2</option>
                                                <option value="Term 3">Term 3</option>

                                            </select>

                                        </div>
                                    </div>
                              </div>


                        <div class="page-title" style=";">
                           <input type="submit" value="Save" name ="save" class="btn btn-primary" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                        </div>


            </form>
                        </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

  <?php include 'footer.php';    ?>
