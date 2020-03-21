<?php
$cntid=$_GET['id'];
require_once('../DB_TRANS/db_con.php');
$query="DELETE  FROM `staff` where id=".$cntid;

if($result=mysqli_query($db_con,"SELECT * FROM `login` where id=".$cntid))
{
    header("location: ../pages/webmaster_editfaculty.php?message=SUCCESS IN DELETING ");
    exit();
}else {
    header("location: ../pages/editstaff_editfaculty.php?message=NO SUCCESS IN DELETING ");
    exit();
}

    
?>