<?php
$db_con=mysqli_connect("localhost","pecedu_cmsadmin","D^n29m-u%kNJ","pecedu_cms");

if($db_con)
{
  if ($result = mysqli_query($db_con,"INSERT INTO `publication`(`f_id`, `books`, `journals`, `conference`) VALUES ('10','ooo','ooo','ooo')")) {
   echo "ok";
}
else {
    echo "Table does not exist";
}
}


?>