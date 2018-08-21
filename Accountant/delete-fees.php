<?php
include 'connect.php';

if (isset($_GET['delete'])) {

$delete = "DELETE FROM payments WHERE id='$_GET[delete]'";

$run_delete= mysqli_query($con,$delete);

if($run_delete) {
header("Location:student-fees.php?success=category has been deleted");
}else{
header("Location:student-fees.php?error=Error!!!!!");
}
}