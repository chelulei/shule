<?php
     include 'connect.php';
    if (isset($_POST['update'])) {

        $Idno=$_POST['id'];
        $TSC_NO=$_POST['TSC_No'];
        $Surname=$_POST['Surname'];
        $Middlename=$_POST['Middlename'];
        $Firstname=$_POST['Firstname'];
        $Dateofbirth=$_POST['Dateofbirth'];
        $Gender=$_POST['Gender'];
        $Homeaddress=$_POST['Homeaddress'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $Designation=$_POST['Designation'];
        $Classes=$_POST['Classes'];
        $DateEmp=$_POST['DateEmp'];
        $YearsExp=$_POST['YearsExp'];
        //$Resume=$_POST['Resume'];
        $Salary=$_POST['Salary'];
        $Status=$_POST['Status'];


      $sql = "UPDATE teacher SET TSC_No='$TSC_NO',Surname='$Surname',Firstname='$Firstname',
        Middlename='$Middlename',Dateofbirth='$Dateofbirth',Gender='$Gender',Homeaddress='$Homeaddress',
        Phone='$Phone',Classes='$Classes', Designation='$Designation',DateEmp='$DateEmp',YearsExp='$YearsExp',  
             Email='$Email',Resume='$Resume',Salary='$Salary',Status='$Status'  WHERE Idno= '$Idno'";
      
        $run= mysqli_query($con, $sql);

        if ($run){
        header("Location:page-teachers.php?success= Record was updated successfully ");
        }

        else {
               header("Location:page-teachers.php?error= Error!!! ");

        }
    }
?>