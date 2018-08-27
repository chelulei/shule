
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM giveitems WHERE id=".$id);

    if( $query):
        header("Location:page-giveitems.php");
    else:
        header("Location:page-giveitems.php?error=Error");
    endif;
}?>