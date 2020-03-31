<?php



require_once('./db_con.php');
$desc=$_POST['desc'];
$id=$_SESSION['id'];

$name=$_GET['name'];
$query1="SELECT * FROM `article` WHERE author=$id";

if($result=mysqli_query($db_con,$query1))
{ 
    if(mysqli_num_rows($result)>0)
    {
    $arr=mysqli_fetch_assoc($result);
    $idref=$arr['id'];
    $query="UPDATE article set body='$desc' WHERE id=$idref";
    if(mysqli_query($db_con,$query))
{
 echo "succesfull";
 header("Location: ../pages/ccc_dashboard.php?message=succesfully updated post");
exit();
}
else{
    echo "unsuccesfull";
}
    }
    else
    {


        $query="INSERT INTO `article`(`name`,`dep`, `body`,`author`) VALUES ($name,'ccc','$desc','".$id."')";
        
        echo $query;
if(mysqli_query($db_con,$query))
{ 

header("Location: ../pages/ccc_dashboard.php?message=succesfully entered new post !!");
exit();


}
else{
  header("Location: ../pages/ccc_dashboard.php?message=error has occured");
    exit();
}
    }

}
echo $query;

?>