<?php
include 'head.php';
include 'connect.php';
include 'sidebar.php';
include 'back.php';
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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--       <div class="content mt-3">-->
        <div class="animated fadeIn">
            <?php include 'errors.php' ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><i class="fa fa-download" aria-hidden="true">

                                </i>
                                BACK UP FILES
                            </strong>
                        </div>
                        <div class="card-body">
                            <table align="center" class="table table-bordered">
                                <?php
                                echo "<tr><td>  
                              <p class='alert alert-success text-center'>
                              Database Backed Up Successfully!
                              </p> 
                                  </td>
                                  </tr>";
                                echo "<tr><td align='center'>Path: " . $filename . "</td></tr>";
                                   ?>
                                <tr>
                                    <td colspan="2" align="center">
                                        <a href="index.php" class="btn btn-primary"> Back to Home</a>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
    </div><!-- .content -->
    </div><!-- /#right-panel -->
<?php include 'footer.php' ?>