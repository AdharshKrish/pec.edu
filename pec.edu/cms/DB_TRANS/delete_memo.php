<?php
$cntid=$_GET['id'];
require_once('../DB_TRANS/db_con.php');
$query="DELETE  FROM `news_update` where id=".$cntid;
echo "SELECT * FROM `attachment` where content_id=".$cntid;
if($result=mysqli_query($db_con,"SELECT * FROM `attachment` where content_id=".$cntid))
{
    if(mysqli_query($db_con,$query))
{
    echo "in";
    while($arr=mysqli_fetch_assoc($result))
    {
        $query="DELETE  FROM `attachment` where content_id=".$cntid;
        mysqli_query($db_con,$query);
    $filen=$arr['name'];

    $file = "../content_upload/".$filen;

if (!unlink($file)) {
  echo ("Error deleting $file");
} else {
  echo ("Deleted $file");
}


}
header("location: ../pages/webmaster_viewmemo.php?message=SUCCESS IN DELETING ");
exit();
    
}
else{
    header("location: ../pages/webmaster_viewmemo.php?message=UNSUCCESSFUL IN DELETING");
    exit();
}

}else{
    header("location: ../pages/webmaster_viewmemo.php?message=UNSUCCESSFUL IN DELETING");
    exit();
}
?>