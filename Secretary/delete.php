<?php


require('../connect.php');


if(isset($_GET['SubIDNo']))
{
     $sql = "DELETE FROM subject WHERE SubIDNo=".$_GET['SubIDNo'];
     $mysqli->query($sql);
	 echo 'Deleted successfully.';
}


?>