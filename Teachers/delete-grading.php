
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM gradingsystem WHERE id=".$id);

   if( $query):
       header("Location:page-gradingsystem.php?success=Grade successfully deleted");
       else:
           header("Location:page-gradingsystem.php?error=Error!!!!!");
    endif;
}?>