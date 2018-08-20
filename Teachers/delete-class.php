
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM class WHERE classId=".$id);

   if( $query):
       header("Location:page-classes.php?success=Successfully deleted");
       else:
           header("Location:page-classes.php?success=Error!!!!!");
    endif;
}?>