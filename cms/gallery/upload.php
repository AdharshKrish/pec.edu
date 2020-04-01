<?php
require_once('../DB_TRANS/db_con.php');
$id=$_SESSION['id'];
$tags=$_POST['tag'];
$desc=$_POST['desc'];
$query="SELECT * FROM `login`  WHERE id=".$id;
$result=mysqli_query($db_con,$query);
$dep=mysqli_fetch_assoc($result);
$department=$dep['department'];
if($department=='HSS'||$department=='chem'||$department=='phy'||$department=='Maths')
$department='hs';
$visib=$_POST['visib'];
if($visib=='department')
{
//
}
else
{
$department=$visib;
}

$img = $_FILES['file']['name'];$img = time().$img;
$query="INSERT INTO `gallery`( `tags`, `description`, `department`,`name`,`uploader`) VALUES ('$tags','$desc','$department','$img',$id)";

echo $img,$query;
//$query="INSERT INTO `staff`(`name`, `dep`, `phone`, `role`,`picname`) VALUES ( '".$name."','".$dep."','".$ph."','".$role."','".$img."')";
if(mysqli_query($db_con,$query))
{ 
$filename = $img;
$file_type=$_FILES['file']['type'];
//$filename=substr($filename,3);
move_uploaded_file($_FILES['file']['tmp_name'],'../galleryimages/'.$filename);
header("Location: index.php?message=succesfully entered new image");
exit();


}
else{
    header("Location: index.php?message=error has occured");
    exit();

}
?>

?>