
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM items WHERE itemsIdno=".$id);

    if( $query):
        header("Location:page-items.php?success=Successfully deleted");
    else:
        header("Location:page-items.php?success=Error!!!!!");
    endif;
}?>