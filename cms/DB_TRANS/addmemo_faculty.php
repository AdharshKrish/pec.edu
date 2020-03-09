|<?php
$flag=0;
 require_once('../DB_TRANS/db_con.php');
$content=$_POST['note'];
//date
$date_from=$_POST['date-from'];
$date_to=$_POST['date-to'];
$date_exp=$_POST['expiry'];
$vis=$_POST['visib'];
$dept=$_SESSION['DEP'];
$id=$_SESSION['id'];

$query="INSERT INTO `news_update` (`breif`, `expires_on`, `Faculty_id`, `start`, `end`, `department`, `verified`) VALUES ('".$content."','".$date_exp."',".$id.",'".$date_from."','".$date_to."','".$vis."',0)";

//echo "INSERT INTO `news_update`( `breif`, `expires_on`, `Faculty_id`, `start`, `end`, `department`) VALUES ('".$content."','".$date_exp."',".$id.",'".$date_from."','".$date_to."','".$dept."',0)";
//hastags
if(mysqli_query($db_con,$query))
{ 
$string=$_POST['tags'];
$str_arr = explode (",", $string);  
//print_r($str_arr); 
$query_fetch="SELECT * FROM news_update where breif='".$content."' AND expires_on='".$date_exp."'";
$content_id=mysqli_fetch_assoc(mysqli_query($db_con,$query_fetch));
$idc=$content_id['id'];
foreach ($str_arr as $tag) {

 
  $query2="INSERT INTO `tags`( `content_id`, `tagname`) VALUES (".$idc.",'".$tag."')";
  
   if(mysqli_query($db_con,$query2))
   {
       //files

  }
  else {
    $flag=0;
    echo "INSERT INTO `tags`( `content_id`, `tagname`) VALUES (".$content_id.",'".$tag."')";
    echo "SELECT id FROM news_update where breif='".$content."' AND expire_on=".$date_exp;
  }
}
$countfiles = count($_FILES['file']['name']);
// Looping all files
for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
  $file_type=$_FILES['file']['type'][$i];
  $filename=substr($filename,3);
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'][$i],'../content_upload/'.$filename);
  $query_files="INSERT INTO `attachment`( `type`, `name`, `content_id`) VALUES ('".$file_type."','".$filename."',".$idc.")";
  
  if(mysqli_query($db_con,$query_files))
  {
    $flag=1;
  }
  else {
    $flag=0;
  }
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
  header("location: ../pages/addmemo.php?message=message sent please contact webmaster for further&suc=1");
}
?>