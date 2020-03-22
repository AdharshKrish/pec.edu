<?php
require_once('./db_con.php');
//$role= $_POST['tag'];
$email=$_POST['email'];
if($_POST['title']!='')
$role=$_POST['title'];
else
$role=$_POST['name'];

//$dep=$_POST['dept'];

//echo "INSERT INTO `login`(`desg`, `username`, `email`, `department`) VALUES ('".$role."','".$name."','".$email."','".$dep."')";

$query_check_exists="SELECT * FROM login WHERE username='".$role."'";
echo $query_check_exists;
$result=mysqli_query($db_con,$query_check_exists);
if($result)
{
    $arr=mysqli_fetch_assoc($result);$idref=$arr['id'];
    $cv=mysqli_num_rows($result);
    if($cv>0)
    {
        $query="UPDATE login set email='".$email."'  where id=".$arr['id'];
       // echo "UPDATE login set desg='".$role."'  where id=".$arr['id'];
       $result=mysqli_query($db_con,$query);  
       header("Location: ../pages/webmasteraddrole.php?message=successfully updated role");
       exit();   
       
    }
    else {
        $query="INSERT INTO `login`( `username`, `email`) VALUES ('".$role."','".$email."')";
            mysqli_query($db_con,$query);    
            header("Location: ../pages/webmasteraddrole.php?message=successfully added role");
            exit();
    }
}
else {
    header("Location: ../pec/error/error404.html");
    exit();
}
?>