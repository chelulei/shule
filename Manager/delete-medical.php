
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM medical WHERE medic_id=".$id);

   if( $query):
       header("Location:page-medical.php?success=successfully deleted");
       else:
           header("Location:page-medical.php?error=Error!!!");
    endif;
}?>