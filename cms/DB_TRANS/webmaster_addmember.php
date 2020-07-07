<?php
require_once('./db_con.php');
//$role= $_POST['tag'];
$email=$_POST['email'];
$name=$_POST['name'];
$dep=$_POST['dept'];
$desg=$_POST['role'];

$query_check_exists="SELECT * FROM login WHERE email='".$email."'";
//echo $query_check_exists;
$result=mysqli_query($db_con,$query_check_exists);
print_r($result);
if($result)
{
    
    if(mysqli_num_rows($result)==0)
    {
           //insert into table if not exists
  $query="INSERT INTO `login`( `username`, `email`, `department`) VALUES ('".$name."','".$email."','".$dep."')";
  if(mysqli_query($db_con,$query))
{
  $query_check_exists="SELECT * FROM login WHERE email='".$email."'";
//echo $query_check_exists;
$result=mysqli_query($db_con,$query_check_exists);
$arr1=mysqli_fetch_assoc($result);$idref=$arr1['id'];

$query="INSERT INTO `basic_faculty_info`(`name`,`contact_official_email`, `department`, `post_tier`) VALUES ('".$name."','".$email."','".$dep."','".$desg."')";
mysqli_query($db_con,$query);

//continue
header("Location: ../pages/webmaster_dashboard.php?message=successfully added member");
          exit();
      
}
else {
  echo 1;
  header("Location: ../pec/error/error404.html");
  exit();
}
    }
    else {
        echo 2;
       


        header("Location: ../pages/webmaster_dashboard.php?message=already exists");
          exit();
    }

}
else {
    echo "error";
    echo mysqli_error();
    
    header("Location: ../pages/webmaster_dashboard.php?message=something went wrong");
    exit();

  
   
}
?>
