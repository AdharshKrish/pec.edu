<?php
foreach ($_POST as $param_name => $param_val) {
  echo "Param: $param_name; Value: $param_val<br />\n";
}
$flag=0;
require_once('../DB_TRANS/db_con.php');
$content=$_POST['note'];
$date_from=$_POST['date-from'];
$date_to=$_POST['date-to'];
$date_exp=$_POST['expiry'];
$vis=$_POST['visib'];
//$dept=$_SESSION['DEP'];
$id=$_SESSION['id'];

$query="INSERT INTO `news_update` (`breif`, `expires_on`, `Faculty_id`, `start`, `end`, `department`, `verified`) VALUES ('".$content."','".$date_exp."','".$id."','".$date_from."','".$date_to."','".$vis."',1)";
echo $query;

if(mysqli_query($db_con,$query)){ 
  $flag=1;
  $query_fetch="SELECT * FROM news_update where breif='".$content."' AND expires_on='".$date_exp."'";
  echo $query_fetch;
  $content_id=mysqli_fetch_assoc(mysqli_query($db_con,$query_fetch));
  $idc=$content_id['id'];
  if("" != trim($_POST['tags'])){
    $string=$_POST['tags'];
    $str_arr = explode (",", $string);  
    foreach ($str_arr as $tag) {
      $query2="INSERT INTO `tags`( `content_id`, `tagname`) VALUES (".$idc.",'".$tag."')";
      echo $query2;
      if(mysqli_query($db_con,$query2)){
        $flag=1;
      }
      else {
        $flag=0;  
      }
    }
  } 
  $countfiles = count(array_filter(($_FILES['file']['name'])));
  for($i=0;$i<$countfiles;$i++){
    $filename = $_FILES['file']['name'][$i];
    $file_type=$_FILES['file']['type'][$i];
    $filename = time().$filename;
    $filename=strtolower($filename);
    move_uploaded_file($_FILES['file']['tmp_name'][$i],'../content_upload/'.$filename);
    $query_files="INSERT INTO `attachment`( `type`, `name`, `content_id`) VALUES ('".$file_type."','".$filename."','".$idc."')";
    if(mysqli_query($db_con,$query_files)){
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
if($flag==0){
  header("location: ../pages/webmaster_viewmemo.php?message=ERROR IN ADDING ");
}
else {
  echo"ok";
  header("location: ../pages/webmaster_viewmemo.php?message=SUCCESS IN ADDING ");
}
