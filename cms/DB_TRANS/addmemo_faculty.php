|<?php
$flag=0;
require_once('../DB_TRANS/db_con.php');
$content=$_POST['note'];
$date_from=$_POST['date-from'];
$date_to=$_POST['date-to'];
$date_exp=$_POST['expiry'];
$vis=$_POST['visib'];
$dept=$_SESSION['DEP'];
$id=$_SESSION['id'];

$query="INSERT INTO `news_update` (`breif`, `expires_on`, `Faculty_id`, `start`, `end`, `department`, `verified`) VALUES ('".$content."','".$date_exp."','".$id."','".$date_from."','".$date_to."','".$vis."',0)";

if(mysqli_query($db_con,$query)){ 
  $flag=1;
  $query_fetch="SELECT * FROM news_update where breif='".$content."' AND expires_on='".$date_exp."'";
  $content_id=mysqli_fetch_assoc(mysqli_query($db_con,$query_fetch));
  $idc=$content_id['id'];
  if("" != trim($_POST['tags'])){
    $string=$_POST['tags'];
    $str_arr = explode (",", $string);  
    //print_r($str_arr); 
    foreach ($str_arr as $tag) {
      $query2="INSERT INTO `tags`( `content_id`, `tagname`) VALUES (".$idc.",'".$tag."')";
      if(mysqli_query($db_con,$query2)){
        $flag=1;
      }
      else {
        $flag=0;  
      }
    }
  }
  print_r($_FILES);
  $filename = $_FILES['file']['name'];
  $file_type=$_FILES['file']['type'];
  $filename = time().$filename;
  $filename=strtolower($filename);
  move_uploaded_file($_FILES['file']['tmp_name'],'../content_upload/'.$filename);
  $query_files="INSERT INTO `attachment`( `type`, `name`, `content_id`) VALUES ('".$file_type."','".$filename."','".$idc."')";
  if(mysqli_query($db_con,$query_files)){
    $flag=1;
  }
  else {
    $flag=0;
  }
}
else {
 $flag=0;
}
if($flag==0)
{
header("location: ../pages/addmemo.php?message=some error occured&error=1");
}
else {
  echo"ok";
  header("location: ../pages/addmemo.php?message=message sent wait for webmaster approval&suc=1");
}
?>