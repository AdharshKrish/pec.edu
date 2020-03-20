<?php
$cntid=$_GET['id'];
require_once('../DB_TRANS/db_con.php');
$query="DELETE  FROM `staff` where id=".$cntid;

if($result=mysqli_query($db_con,"SELECT * FROM `staff` where id=".$cntid))
{
    if(mysqli_query($db_con,$query))
{
    echo "in";
   $arr=mysqli_fetch_assoc($result);  
      
    $filen=$arr['picname'];

    $file = "../profilepic/".$filen;

if (!unlink($file)) {
  echo ("Error deleting $file");
} else {
  echo ("Deleted $file");
}
}else {
    header("location: ../pages/editstaff.php?message=NO SUCCESS IN DELETING ");
    exit();
}


}
header("location: ../pages/editstaff.php?message=SUCCESS IN DELETING ");
exit();
    
?>