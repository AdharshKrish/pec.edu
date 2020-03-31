<?php
require_once('./db_con.php');
$desc=$_POST['desc'];
$id=$_GET['id'];
$query="UPDATE article set body='$desc' WHERE id=$id";
$query1="SELECT * FROM `article` WHERE dep='cse' LIMIT 20 ";

if($result=mysqli_query($db_con,$query1))
{ 
    
    $arr=mysqli_fetch_assoc($result);
        
        $dep=$arr['dep'];

}
echo $query;
if(mysqli_query($db_con,$query))
{
 echo "succesfull";
 header("Location: ../../".$dep."/articles.php");
exit();
}
else{
    echo "unsuccesful";
}
?>