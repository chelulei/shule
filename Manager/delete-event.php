
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM events WHERE Event_id=".$id);

    if( $query):
        header("Location:page-viewevents.php?success=Class successfully delet");
    else:
        header("Location:page-viewevents.php?success=Class successfully deleted");
    endif;
}?>