<?php
//$db_con=mysqli_connect("localhost","pecedu_cmsadmin","D^n29m-u%kNJ","pecedu_cms");
$db_con=mysqli_connect("localhost","root","","pec_edu");
session_start();
if($db_con)
{
   // echo"db ok";

}
else {
    echo"ok not";
}
?>