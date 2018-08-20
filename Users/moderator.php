<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict admin or Moderator to Access user.php page
if($_SESSION['user']['role']=='Secretary'){
 header('location:../Secretary/index.php');
}
if($_SESSION['user']['role']=='Manager'){
 header('location:../Manager/index.php');
}
if($_SESSION['user']['role']=='Teacher'){
 header('location:../Teachers/index.php');
}
if($_SESSION['user']['role']=='Accountant'){
 header('location:../Accountant/index.php');
}
?>
<h1>Wellcome to <?php echo $_SESSION['user']['username'];?> Page</h1>
 
 
<link rel="stylesheet" href="style.css" type="text/css"/>
<div id="profile">
<h2>User name is: <?php echo $_SESSION['user']['username'];?> and Your Role is :<?php echo $_SESSION['user']['role'];?></h2>
<div id="logout"><a href="logout.php">Please Click To Logout</a></div>
</div>

<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or admin to Access moderator.php page

if($_SESSION['user']['role']=='Secretary'){
 header('location:../Secretary/index.php');
}
if($_SESSION['user']['role']=='Manager'){
 header('location:../Manager/index.php');
}
if($_SESSION['user']['role']=='Teacher'){
 header('location:../Teachers/index.php');
}
if($_SESSION['user']['role']=='Accountant'){
 header('location:../Accountant/index.php');
}
?>
<h1>Wellcome to <?php echo $_SESSION['user']['username'];?> Page</h1>
 
 
<link rel="stylesheet" href="style.css" type="text/css"/>
<div id="profile">
<h2>User name is: <?php echo $_SESSION['user']['username'];?> and Your Role is :<?php echo $_SESSION['user']['role'];?></h2>
<div id="logout"><a href="logout.php">Please Click To Logout</a></div>
</div>