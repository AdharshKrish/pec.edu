<?php
$cntid=$_GET['id'];
require_once('../DB_TRANS/db_con.php');
$query="DELETE  FROM `staff` where id=".$cntid;

if($result=mysqli_query($db_con,"DELETE login,basic_faculty_info FROM login INNER JOIN basic_faculty_info on login.id = basic_faculty_info.id where login.id=".$cntid))
{
    header("location: ../pages/webmaster_editfaculty.php?message=SUCCESS IN DELETING ");
    exit();
}else {
    header("location: ../pages/editstaff_editfaculty.php?message=NO SUCCESS IN DELETING ");
    exit();
}

    
?>