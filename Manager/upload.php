<?php
if(isset($_POST['id'])):
    $id=$_POST['id'];
endif;

if(isset($_POST['up_id'])):
    $up_id=$_POST['up_id'];
endif;

if(!empty($_FILES['picture']['name'])){
    //Include database configuration file
    include_once 'connect.php';
    //File uplaod configuration
    $result = 0;
    $uploadDir = "images/avatar/";
    $fileName = time().'_'.basename($_FILES['picture']['name']);
    $targetPath = $uploadDir. $fileName;
    //Upload file to server
    if(@move_uploaded_file($_FILES['picture']['tmp_name'], $targetPath)){
        //Get current user ID from session

        //Update picture name in the database
        if($id){
            $update = mysqli_query($con,"UPDATE students SET Image = '".$fileName."' WHERE adm_No ='$id' ");
        }elseif($up_id){
            $update = mysqli_query($con,"UPDATE teacher SET Image = '".$fileName."' WHERE Idno ='$up_id' ");
        }

        //Update status
        if($update){
            $result = 1;
        }
    }
    //Load JavaScript function to show the upload status
    echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetPath . '\');</script>  ';
}
