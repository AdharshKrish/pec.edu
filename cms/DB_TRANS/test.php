<?php
$db_con=mysqli_connect("localhost","pecedu_cmsadmin","D^n29m-u%kNJ","pecedu_cms");
session_start();
if($db_con)
{
   echo"db ok";
  if( $result=mysqli_query($db_con,"ALTER TABLE `content` ADD `time` VARCHAR(100) NOT NULL;"))
  echo "query";
   print_r($result);
   
}
else {
    echo"ok not";
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>