<?php
require_once('./db_con.php');
//session_start();
$fid=$_SESSION['id'];
$result2=mysqli_query($db_con,"SELECT * FROM login WHERE id=".$fid);
$result_val=mysqli_fetch_assoc($result2);
$name=$result_val['username'];
$email=$result_val['email'];
$department=$result_val['department'];

$desg=$_POST['designation'];
$contact=$_POST['phone'];
$ext=$_POST['extno'];
$qual=$_POST['qualification'];
$special=$_POST['specialization'];
$alma=$_POST['alma'];
$interest=$_POST['interest'];
$res=$_POST['research'];
$std=$_POST['students'];
$proj=$_POST['projects'];
$books=$_POST['books'];
$journals=$_POST['journals'];
$conf=$_POST['conferences'];
$web=$_POST['website'];
$linked=$_POST['linkedin'];
$fb=$_POST['facebook'];
$twitter=$_POST['twitter'];
$dob=$_POST['dateofbirth'];
$query1="INSERT INTO `basic_faculty_info`(`id`,`name`, `post_tier`, `contact_official_email`, `phno`, `extension`,  `qualification`, `specialization`,`dob`,`department`) VALUES ('".$fid."','".$name."','".$desg."','".$email."','".$contact."','".$ext."','".$qual."','".$special."','".$dob."','".$department."');";
$query2="INSERT INTO `academic`(`f_id`, `alma`, `interest`, `research`, `student`, `projects`) VALUES ('".$fid."','".$alma."','".$interest."','".$res."','".$std."','".$proj."');";
$query3="INSERT INTO `publication`(`f_id`, `books`, `journals`, `conference`) VALUES ('".$fid."','".$books."','".$journals."','".$conf."');";
$query4="INSERT INTO `social_links`(`f_id`, `website`, `linkedin`, `facebook`, `twitter`) VALUES ('".$fid."','".$web."','".$linked."','".$fb."','".$twitter."');";
echo $query4;

$delq1="DELETE  FROM basic_faculty_info WHERE id='".$fid."'";
$delq2="DELETE  FROM academic WHERE f_id='".$fid."'";
$delq3="DELETE  FROM publication WHERE f_id='".$fid."'";
$delq4="DELETE  FROM social_links WHERE f_id='".$fid."'";

echo $delq4;
$q1="SELECT * FROM basic_faculty_info where id='".$fid."'";
echo $q1;
if($result=mysqli_query($db_con,$q1))
{
   
//$count=mysqli_num_rows($result);
//if($count>0)
//{
 mysqli_query($db_con,$delq1);
 mysqli_query($db_con,$delq3);
 mysqli_query($db_con,$query1);
 mysqli_query($db_con,$query3);
 mysqli_query($db_con,$delq2);
 mysqli_query($db_con,$delq4);

 mysqli_query($db_con,$query2);
 
 mysqli_query($db_con,$query4);
 header("Location: ../pages/faculty_dashboard.php?message=successfully updated profile");
            exit();
}//}
else {
    //echo "habbabbaaa ";
    mysqli_query($db_con,$query1);
    mysqli_query($db_con,$query2);
    mysqli_query($db_con,$query3);
    mysqli_query($db_con,$query4);
    header("Location: ../pages/faculty_dashboard.php?message=successfully added added details");
    exit();
}


?>