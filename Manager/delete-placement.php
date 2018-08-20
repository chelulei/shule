
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM placements WHERE place_id=".$id);

   if( $query):
       header("Location:page-extracuri.php?success=successfully Deleted");
       else:
           header("Location:page-extracuri.phpp?error=Error!!!");
    endif;
}?>