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
                        <li><a href="page-teachers.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i></i>Back</a></li>
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

              if (isset($_GET['teach'])) {

                $Idno=$_GET['teach'];

                $qry =mysqli_query( $con,"SELECT * FROM teacher WHERE Idno ='$Idno'");

                $rows = mysqli_fetch_array( $qry);

                $Idno =$rows['Idno'];
                $TSC =$rows['TSC_No'];
                $Firstname=$rows['Firstname'];
                $Middlename=$rows['Middlename'];
                $Surname=$rows['Surname'];
                $Datebirth=$rows['Dateofbirth'];
                $Gender=$rows['Gender'];
                $Homeaddress=$rows['Homeaddress'];
                $Parentname=$rows['Parentname'];
                $Phone=$rows['Phone'];
                $Email=$rows['Email'];

              }
              ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-primary p-2 mb-2 text-white text-center">
                            TEACHER DETAILS
                        </div>
                    </div>
                    <!-- /.col-md-12 -->
                        <div class="col-md-3 col-lg-3 " align="center">
                           <?php include 'image-teach.php';?>
                            <!--end of profile-->
                        </div>

                    <!-- /.col-m-3 -->
                        <div class="col-md-4">
                            Name: <strong><?php echo  $Surname.' '. $Firstname.' '. $Middlename; ?></strong><hr>
                           TSC No: <strong><?php echo  $TSC; ?></strong><hr>
                            Gender: <strong><?php echo  $Gender; ?></strong><hr>
                            Date Of Birth: <strong><?php echo  $Datebirth; ?></strong><hr>
                        </div>
                        <div class="col-md-4">
                            Residential address:<strong> <?php echo   $Homeaddress; ?></strong><hr>
                            Telephone No: <strong><?php echo $Phone; ?></strong><hr>
                            Email: <strong><?php echo  $Email; ?></strong><hr>
                        </div>
                        </div>
                        <!-- /.div -->

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