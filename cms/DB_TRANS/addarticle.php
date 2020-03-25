<?php
require_once('./db_con.php');
$email=$_POST['email'];
$name=$_POST['name'];
$dep=$_POST['dept'];
$img = $_FILES['file']['name'];$img = time().$img;
$author=$_POST['author'];
$query="INSERT INTO `article`(`name`, `email`, `dep`, `img`,`author`) VALUES ( '".$name."','".$email."','".$dep."','".$img."','".$author."')";

if(mysqli_query($db_con,$query))
{ 
$filename = $img;
$file_type=$_FILES['file']['type'];
//$filename=substr($filename,3);
move_uploaded_file($_FILES['file']['tmp_name'],'../articles/'.$filename);
header("Location: ../pages/webhandler_viewmemo.php?message=succesfully entered new post !!");
exit();


}
else{
    header("Location: ../pages/webhandler_viewmemo.php?message=error has occured");
    exit();
}
?>