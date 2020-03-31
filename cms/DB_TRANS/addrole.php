<?php
require_once('./db_con.php');
//$role= $_POST['tag'];
$email=$_POST['email'];
$role=$_POST['role'];
$dep=$_POST['dept'];

//echo "INSERT INTO `login`(`desg`, `username`, `email`, `department`) VALUES ('".$role."','".$name."','".$email."','".$dep."')";


$query_check_exists="SELECT * FROM login WHERE email='".$email."' and department!=''";
echo $query_check_exists;
$result=mysqli_query($db_con,$query_check_exists);
if($result)
{
    $arr=mysqli_fetch_assoc($result);$idref=$arr['id'];$dep=$arr['department'];
    $cv=mysqli_num_rows($result);
    if($cv>0)
    {

        $query="SELECT * FROM `role` WHERE idref=$idref AND desg='$role'";
       // echo "UPDATE login set desg='".$role."'  where id=".$arr['id'];
       $result=mysqli_query($db_con,$query);

       $cv=mysqli_num_rows($result);

       if($cv>0)
       {
           //echo $query;
           header("Location: ../pages/webmasteraddrole.php?message=already exists");
            exit();
        }
        else {  
            if($role=='HOD')
            {
                $result=mysqli_query($db_con,"SELECT r.id FROM login l INNER JOIN role r ON l.department='$dep' AND r.desg='HOD' AND l.id=r.idref");
               // echo"SELECT * FROM login l and role r ON l.department='".$dep."' AND r.role='".$role."'";
                if(mysqli_num_rows($result)>0)
                {
                    $arr1=mysqli_fetch_assoc($result);
                    $id=$arr1['id'];
                    
                    $query="UPDATE `role` set idref=".$idref." WHERE id=$id";
                   // echo $query;
                    mysqli_query($db_con,$query);
                   header("Location: ../pages/webmasteraddrole.php?message=updated HOD of ".$dep);
                    exit();

                }
                else
                {
                    $query="INSERT INTO `role`(`idref`, `desg`) VALUES ($idref,'$role')";
                    mysqli_query($db_con,$query);
                    header("Location: ../pages/webmasteraddrole.php?message=added role");
                    exit();

                }

            }  
            else
            {   
            $query="INSERT INTO `role`(`idref`, `desg`) VALUES ($idref,'$role')";
            mysqli_query($db_con,$query);
            header("Location: ../pages/webmasteraddrole.php?message=added role");
            exit();
            }
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