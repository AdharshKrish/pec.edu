<?php
require_once('./db_con.php');
//$role= $_POST['tag'];
$email=$_POST['email'];
$name=$_POST['name'];
$dep=$_POST['dept'];

//echo "INSERT INTO `login`(`desg`, `username`, `email`, `department`) VALUES ('".$role."','".$name."','".$email."','".$dep."')";

$query_check_exists="SELECT * FROM LOGIN WHERE email='".$email."'";
echo $query_check_exists;

if($result=mysqli_query($db_con,$query_check_exists))
{
    
    if(mysqli_num_rows($result)==0)
    {
           //insert into table if not exists
  $query="INSERT INTO `login`( `username`, `email`, `department`) VALUES ('".$name."','".$email."','".$dep."')";
  if(mysqli_query($db_con,$query))
{
//continue
header("Location: ../pages/webmaster_dashboard.php?message=successfully added role");
          exit();
      
}
else {
  echo 1;
  //header("Location: ../pec/error/error404.html");
  exit();
}
    }
    else {
        header("Location: ../pages/webmaster_dashboard.php?message=already exists");
          exit();
    }

}
else {
    echo"smth";
    //header("Location: ../pages/webmaster_dashboard.php?message=something went wrong");
    exit();

  
   
}
?>
