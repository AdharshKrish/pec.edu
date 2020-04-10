<?php
$cntid=$_GET['id'];
require_once('../DB_TRANS/db_con.php');
$query="DELETE  FROM `gallery` where id=".$cntid;

if($result=mysqli_query($db_con,"SELECT * FROM `gallery` where id=".$cntid))
{
    if(mysqli_query($db_con,$query))
{
    echo "in";
   $arr=mysqli_fetch_assoc($result);  
      
  
    $filen=$arr['name'];

    $file = "../galleryimages/".$filen;

if (!unlink($file)) {
  echo ("Error deleting $file");
} else {
  echo ("Deleted $file");
}
}else {
   header("location: edit.php?message=ERROR IN DELETING ");
    exit();
}


}
header("location: edit.php?message=SUCCESS IN DELETING ");
exit();
    
?>