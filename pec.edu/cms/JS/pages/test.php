<?php
$db_con=mysqli_connect("localhost","pecedu_cmsadmin","D^n29m-u%kNJ","pecedu_cms");

if($db_con)
{
  if ($result = mysqli_query($db_con,"SHOW TABLES LIKE 'publication'")) {
    if(mysqli_num_rows($result)>0) {
        echo "Table exists";
    }
}
else {
    echo "Table does not exist";
}
}


?>