<?php
$cntid=$_GET['id'];
require_once('../DB_TRANS/db_con.php');
$query="DELETE  FROM `staff` where id=".$cntid;

if($result=mysqli_query($db_con,"DELETE FROM `login` where id=".$cntid))
{
    header("location: ../pages/webmaster_viewfaculty.php?message=SUCCESS IN DELETING&dep=");
exit();
}else {
    header("location: ../pages/webmaster_viewfaculty.php?message=NO SUCCESS IN DELETING ");
    exit();
}

    
?>