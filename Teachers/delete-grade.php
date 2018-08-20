
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM grade WHERE gradeid=".$id);

   if( $query):
       header("Location:page-grades.php?success=Successfully deleted");
       else:
           header("Location:page-grades.php?error=Error!!!!!");
    endif;
}?>