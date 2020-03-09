<?php
require_once('./db_con.php');
//$role= $_POST['tag'];
$email=$_POST['email'];
$role=$_POST['role'];
$dep=$_POST['dept'];

//echo "INSERT INTO `login`(`desg`, `username`, `email`, `department`) VALUES ('".$role."','".$name."','".$email."','".$dep."')";

$query_check_exists="SELECT * FROM login WHERE email='".$email."'";
$result=mysqli_query($db_con,$query_check_exists);
if($result)
{
    $arr=mysqli_fetch_assoc($result);
    $cv=mysqli_num_rows($result);
    if($cv>0)
    {
        $query="UPDATE login set desg='".$role."'  where id=".$arr['id'];
       // echo "UPDATE login set desg='".$role."'  where id=".$arr['id'];
        if(mysqli_query($db_con,$query))
        {
            header("Location: ../pages/webmasteraddrole.php?message=successfully added role");
            exit();
        }
        else {
            echo 1;
           // header("Location: ../pec/error/error404.html");
            exit();
        }
    }
    else {
       echo "user does not exists";
    }
}
else {
    header("Location: ../pec/error/error404.html");
    exit();
}
?>