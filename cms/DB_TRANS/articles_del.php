<?php
$cntid=$_GET['id'];
require_once('../DB_TRANS/db_con.php');
$query="DELETE  FROM `article` where id=".$cntid;

if($result=mysqli_query($db_con,"DELETE FROM `article` where id=".$cntid))
{
    header("location: ../pages/webhandler_viewmemo.php?message=SUCCESS IN DELETING&dep=");
exit();
}else {
    header("location: ../pages/webhandler_viewmemo.php?message=ERROR IN DELETING ");
    exit();
}

    
?>