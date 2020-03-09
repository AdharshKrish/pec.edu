<?php
//session_start();
require_once('./db_con.php');
if($_SESSION['otp']==1)
{
   
    $user_id=$_SESSION['id'];
    $query="SELECT * FROM login where id='".$user_id."'";
    $count=mysqli_query($db_con,$query);
    $cv=mysqli_num_rows($count);
    $arr=mysqli_fetch_assoc($count);
    //echo $arr['f_id'];
    //echo $cv;
    if($cv>0)
    {
        $query="SELECT * FROM login where id='".$user_id."'";
        $result=mysqli_query($db_con,$query);
        $arr=mysqli_fetch_assoc($result);
        echo $_POST['otp'];
         if($_POST['otp']==$arr['otp'])
        {
            echo"otp entered is corrrect ";
            //redirect to profile CMS and set cookie and session
            $_SESSION['loggedin_status']=900;
            header("Location: ../pages/".$_SESSION['role']."_dashboard.php");
            exit();
        }
        else
        {
           // error html
           header("Location: ../otp.php?error=1");
        }

    }
}
else
{
   // echo"is exiting";
    exit();
}




?>
