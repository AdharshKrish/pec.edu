<?php
$cntid=$_GET['id'];
require_once('../DB_TRANS/db_con.php');
$query="DELETE  FROM `login` where id=".$cntid;


if($result=mysqli_query($db_con,"DELETE login,basic_faculty_info FROM login INNER JOIN basic_faculty_info on login.id = basic_faculty_info.id where login.id=".$cntid))
{
    header("location: ../pages/webmaster_viewfaculty.php?message=SUCCESS IN DELETING&dep=");
exit();
}else {
    header("location: ../pages/webmaster_viewfaculty.php?message=NO SUCCESS IN DELETING ");
    exit();
}

    
?>