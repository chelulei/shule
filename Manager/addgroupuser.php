<?php

include("head.php");
include 'connect.php';
include 'functions.php';
include 'sidebar.php';
getUser();
?>
    <!-- Left Panel -->



    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include 'header.php'; ?>
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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-xs-4 col-sm-10">
                        <div class="card" style="
                             align-content: center;
                             padding-left: 120px;
                             padding-right: 120px">

                            <br>
                            <br>
                            <form class="form-validate form-horizontal" method="POST" action="new-group.php" id="">
                                <div class="card-header">

                                    <strong>Register Group</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label class=" form-control-label">Name</label>
                                        <div class="input-group">
                                            <!-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> -->
                                            <input class="form-control"  id="Name" name="Name" type="text">
                                        </div>
                                        <!-- <small class="form-text text-muted">ex. (999) 999-9999</small> -->
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Description</label>
                                        <div class="input-group">
                                            <!-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> -->
                                            <input class="form-control" id="description" name="description" type="text">
                                        </div>
                                        <!-- <small class="form-text text-muted">Middles Name</small> -->
                                    </div>
                                    

                                <div class="page-title" style=";">
                                    <input type="submit" value="Save" name ="submit" class="btn btn-primary" />
                                    <a href="page-usersgroup.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>

                                </div>


                            </form>
                            </br>
                            <br>
                        </div>
                    </div>

                </div><!-- .animated -->
            </div><!-- .content -->

        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
<?php include 'footer.php';?>