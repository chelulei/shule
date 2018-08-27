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
                            <div id="calendar"></div>
                            </table>
                        </div>
                    </div>


                </div><!-- .animated -->
            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
        <?php include 'footer.php';?>
