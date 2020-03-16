<?php
require_once('./db_con.php');
$fid=$_SESSION['id'];
$result2=mysqli_query($db_con,"SELECT * FROM login WHERE id=".$fid);
$result_val=mysqli_fetch_assoc($result2);
$name=$result_val['username'];
$email=$result_val['email'];
$dep=$result_val['department'];

$ph=$_POST['phone'];
$name=$_POST['name'];

$role= $_POST['role'];
$img = $_FILES['file']['name'];$img = time().$img;
echo $img;
$query="INSERT INTO `staff`(`name`, `dep`, `phone`, `role`,`picname`) VALUES ( '".$name."','".$dep."','".$ph."','".$role."','".$img."')";
if(mysqli_query($db_con,$query))
{ 
$filename = $img;
$file_type=$_FILES['file']['type'];
//$filename=substr($filename,3);
move_uploaded_file($_FILES['file']['tmp_name'],'../profilepic/'.$filename);
header("Location: ../pages/addstaff.php?message=succesfully entered new post !!");
exit();


}
else{
    header("Location: ../pages/addstaff.php?message=error has occured");
    exit();
}
?>