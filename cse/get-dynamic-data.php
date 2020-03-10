<?php
include_once("../header/header.php"); 
?>
<!DOCTYPE html>
<!-- saved from url=(0047)http://127.0.0.1:5500/noticeNupdate/notice.html -->
<html lang="en" class="gr__127_0_0_1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <title>ARTICLES</title>


<body data-gr-c-s-loaded="true">
   
    <div style="padding:40px" class="container-fluid tb1 card-container">
        <div class="row " style="height:400px">

<?php
require_once('../db_con.php');
$id=$_GET['id'];


$query="SELECT * FROM `news_update` WHERE id=".$id;
$query2="SELECT * FROM `attachment` WHERE  content_id=".$id;
if($result=mysqli_query($db_con,$query))
{ 
    
    while($arr=mysqli_fetch_assoc($result))
    {
        $summary=$arr['breif'];
        $start=$arr['start'];
        $end=$arr['end'];
        $cid=$arr['id'];

       echo' <div class="card tb2" >
                            <div class="card-header">
                                <span style="float: right;"><img src="calendar.png" alt="calender-icon" title="Add to my Calender"></span>
                                
                                <p> <span class="new-bullet">&bull;</span> New</p>
                                <b>Start Date</b><p>'.$start.'</p>
                                <b>End Date</b> <p>'.$end.'</p>
                            </div><br><br>
                            <p style="font-size"> <b>NOTICE</b></p>
                           
                            <div class="card-body">
                             '.$summary.' 
                            </div>
                            ';
                            $query1="SELECT * FROM tags WHERE content_id=".$cid;
                            echo'
                            <div class="hashtags"> <br> <br>
                            <p style="font-size"> <b>HASHTAGS</b></p>
                           ';
                            if($result1=mysqli_query($db_con,$query1))
                            {
                                while($a=mysqli_fetch_assoc($result1))
                                {
                                    $tag=$a['tagname'];
                                    echo '<a href="#" id="">#'.$tag.'</a> &nbsp;&nbsp';}}
                                      
                                   echo'</div>
                                   <p style="font-size"> <b>ATTACHMENTS</b></p>
                                  
                                   ';
                                   
                                   if($result=mysqli_query($db_con,$query2))
                                   { 
                                   while($arrnew=mysqli_fetch_assoc($result))
                                   {
                                    $fl=$arrnew['name'];
                                    $type=$arrnew['type'];
                                    if($type[0]=='i')
                                    echo "<img height='300' width='200'  src='../../cms/content_upload/".$fl."'></img>";
                                   }}

                            if($result=mysqli_query($db_con,$query2))
                            { 
                            while($arrnew=mysqli_fetch_assoc($result))
                            {
                            $type=$arrnew['type'];
                            $fl=$arrnew['name'];
                            if($type[0]=='a')
                            echo "<p>Download</p><a href='../../cms/content_upload/".$fl."'><li>".$fl."</li></a>";
                            }
                            }

    }
}
//echo $query2;
?>
<br>
<br>
</div>
</div>
</div>

</body>
</html>