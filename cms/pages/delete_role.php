<?php
require_once('./db_con.php');
$id=$_GET['id'];
$role=$_GET['role'];

$query='DELETE  FROM role where id='.$id.' ';
echo $query;
if($result=mysqli_query($db_con,$query))
{
   header("Location: ../pages/webmaster_role.php?message=deleted role");
    exit();
}
else
{
    header("Location: ../pages/webmaster_role.php?message=not able to delete role");
    exit();
    
}

?>