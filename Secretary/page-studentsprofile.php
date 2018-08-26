<?php
error_reporting(0);
include 'connect.php';
include 'functions.php';
getUser();
include 'head.php';
?>
<!-- Left Panel -->
<!-- /#left-panel -->
<?php include 'sidebar.php'; ?>
<!-- Left Panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
  <!-- Header-->
    <?php
    include 'header.php';
    ?>
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
                        <li><a href="page-students.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></i>Back</a></li>
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
           <div class="card-body">
              <?php


              if (isset($_GET['info'])) {

                $adm_No=$_GET['info'];

                $qry =mysqli_query( $con,"SELECT * FROM students WHERE adm_No ='$adm_No'");

                $rows = mysqli_fetch_array( $qry);

                $Id =$rows['adm_No'];
                $Firstname=$rows['Firstname'];
                $Middlename=$rows['Middlename'];
                $Surname=$rows['Surname'];
                $Class=$rows['Class'];
                $Gender=$rows['Gender'];
                $Homeaddress=$rows['Homeaddress'];
                $Parentname=$rows['Parentname'];
                $Phone=$rows['Phone'];
                $Formerschool=$rows['Formerschool'];
                $Entrymarks=$rows['Entrymarks'];
                $Email=$rows['Email'];

              }
              ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-info p-2 mb-2 text-white text-center">
                            STUDENT DETAILS
                        </div>
                    </div>
                    <!-- /.col-md-12 -->
                        <div class="col-md-3 col-lg-3 " align="center">
                           <?php include 'image.php';?>
                            <!--end of profile-->
                        </div>

                    <!-- /.col-m-3 -->
                        <div class="col-md-4">
                            Name: <strong><?php echo  $Surname.' '. $Firstname.' '. $Middlename; ?></strong><hr>
                            Admin No: <strong><?php echo $rows['adm_No']; ?></strong><hr>
                            Gender: <strong><?php echo  $Gender; ?></strong><hr>
                            Date Of Birth: <strong><?php echo  $Entrymarks; ?></strong><hr>
                            Class:<strong><?php echo  $Class; ?></strong><hr>
                            Admitted By: <strong>mike</strong><hr>
                        </div>
                        <div class="col-md-4">
                            Residential address:<strong> <?php echo   $Homeaddress; ?></strong><hr>
                            Former school: <strong><?php echo $Formerschool; ?></strong><hr>
                            Entry Marks: <strong><?php echo  $Entrymarks; ?></strong><hr>
                            Parent's Name: <strong><?php echo   $Parentname; ?></strong><hr>
                            Telephone No: <strong><?php echo $Phone; ?></strong><hr>
                            Email: <strong><?php echo  $Email; ?></strong><hr>
                        </div>
<!--                    <div class="col-md-12">-->
<!--                        <div class="bg-info p-2 mb-2 text-white text-center">-->
<!--                            OTHER DETAILS-->
<!--                        </div>-->
<!--                    </div>-->
<!--                        <hr>-->
<!--                        <div style="margin: 0 auto;">-->
<!--                            <div class="btn-group" role="group" aria-label="Basic example";">-->
<!--                            <a href="page-medical.php?id=--><?php //echo  $Id;?><!--"><button type="button" class="btn-outline-info btn-lg mr-1">Medical History</button></a>-->
<!--                            <a href="page-studentfee.php?id=--><?php //echo  $Id;?><!--"><button type="button" class="btn-outline-danger btn-lg btn-lg mr-1">Fees Details</button></a>-->
<!--                            <a href="page-academic.php?id=--><?php //echo  $Id;?><!--"><button type="button" class="btn-outline-success btn-lg mr-1">Academic Records</button></a>-->
<!--                        </div>-->
<!--                        </div>-->
<!--                        <!-- /.div -->

</div>
</div>
</div>

</div>
</div><!-- .animated -->
</div><!-- .content -->
</div><!-- /#right-panel -->
<?php include 'footer.php'; ?>

<script>
    $(document).ready(function () {
        //If image edit link is clicked
        $(".editLink").on('click', function(e){
            e.preventDefault();
            $("#fileInput:hidden").trigger('click');
        });

        //On select file to upload
        $("#fileInput").on('change', function(){
            var image = $('#fileInput').val();
            var img_ex = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            //validate file type
            if(!img_ex.exec(image)){
                alert('Please upload only .jpg/.jpeg/.png/.gif file.');
                $('#fileInput').val('');
                return false;
            }else{
                $('.uploadProcess').show();
                $('#uploadForm').hide();
                $( "#picUploadForm" ).submit();
            }
        });
    });

    //After completion of image upload process
    function completeUpload(success, fileName) {
        if(success == 1){
            $('#imagePreview').attr("src", "");
            $('#imagePreview').attr("src", fileName);
            $('#fileInput').attr("value", fileName);
            $('.uploadProcess').hide();
        }else{
            $('.uploadProcess').hide();
            alert('There was an error during file upload!');
        }
        return true;
    }

</script>