<?php
//$db_con=mysqli_connect("localhost","pecedu_cmsadmin","D^n29m-u%kNJ","pecedu_cms");
$db_con=mysqli_connect("localhost","root","","pec.edu");
session_start();
if($db_con)
{
   // echo"db ok";

}
else {
    echo"ok not";
}

$id=$_SESSION['id'];

$img = $_FILES["image"]["name"];//stores the original filename from the client
$tmp = $_FILES["image"]["tmp_name"];// stores the name of the designated temporary file
$errorimg = $_FILES["image"]["error"] ;//stores any error code resulting from the transfer
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = '../../../profilepic/'; // upload directory
if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$img = time().$img;
$img=strtolower($img);
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
//$final_image = rand(1000,1000000).$img;
// check's valid format
//if($tmp['size'] > 500000){
  //  die('<div class="alert alert-danger" role="alert"> File is too big </div>');
 //}
 if($errorimg > 0){
    die('<div class="alert alert-danger" role="alert"> An error occurred while uploading the file </div>');
 }
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.$img; 
if(move_uploaded_file($tmp,$path)) 
{
$path='..\profilepic/';
$path = $path.strtolower($img); 


//include database configuration file

//insert form data in the database
$result=mysqli_query($db_con,"select * from uploading where id=".$id);
$count=mysqli_num_rows($result);
if($count>0)
{
  $result1=mysqli_query($db_con,"update uploading set file_name='".$img."' where id=".$id );

 if($result1)
  echo "<img src='$path'   class='img-responsive'/>";
  else {
   echo 'invalid';
  }
}
else{
   $result1=mysqli_query($db_con,"insert into uploading (id,file_name) values(".$id.",'".$img."') " );
   if($result1)
    echo "<img src='$path'   class='img-responsive' />";
    else {
     echo 'invalid';
    }

}
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}
?>
