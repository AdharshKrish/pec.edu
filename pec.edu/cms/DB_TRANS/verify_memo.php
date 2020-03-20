<?php
$cntid=$_GET['id'];
require_once('../DB_TRANS/db_con.php');
$query="UPDATE `news_update` SET verified=1 where id=".$cntid;
if(mysqli_query($db_con,$query))
{
    header("location: ../pages/webmaster_viewmemo.php?message=SUCCESS IN ADDING ");
    
}else{
    header("location: ../pages/webmaster_viewmemo.php?message=UNSUCCESSFUL IN ADDING");
}
?>