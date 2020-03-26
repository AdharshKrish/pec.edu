<?php
include("db_con.php");
$id=$_POST['id'];
if($id==0){
    $query="SELECT * FROM `news_update` WHERE department<>'all' AND verified=1 AND expires_on<=current_date ORDER BY expires_on DESC LIMIT 50";
}else{
    $query="SELECT * FROM `news_update` WHERE department='all' AND verified=1 AND expires_on<=current_date ORDER BY expires_on DESC LIMIT 50";
}

if($result=mysqli_query($db_con,$query))
{ 

    while($arr=mysqli_fetch_assoc($result))
    {
        $summary=$arr['breif'];
        $start = date("d-M-Y",strtotime($arr['start']));
        $end = date("d-M-Y",strtotime($arr['end']));
        date_default_timezone_set('Asia/Kolkata');
        $notetime = new DateTime($arr['timestamp']);
        $curtime = new DateTime();
        $timediff = $notetime->diff($curtime);
        if(intval($timediff->format('%Y%M%D%H%I%S'))<7000000){
            $bul=true;
        }else{
            $bul=false;
        }
        $cid=$arr['id'];
        $dept=$arr['department'];
        if($dept=="cse"){
            $dept="Department of CSE";
            $clr="#38ada9";
        }else if($dept=="ce"){
            $dept="Department of CE";
            $clr="#a085ea";
        }else if($dept=="ece"){
            $dept="Department of ECE";
            $clr="#eb2f06";
        }else{
            $dept="General";
            $clr="#41a700";
        }
            

        echo'<btn class=cad onclick="getFullContent('.$cid.')" data-toggle="modal" data-target="#full-notice">
        <div class=header>
            <div class=tag style="background-color:'.$clr.'">'.$dept.'</div>
            <span style="float: right">
                    
                   
            <form method="post" action="../ics/downloadcalendar.php">
            <input type="hidden" name="date_start" value='.$start.'>
            <input type="hidden" name="date_end" value='.$end.'>
            <input type="hidden" name="location" value="Pondicherry Engineering College, Pillaichavady">
            <input type="hidden" name="description" value='.$summary.'>
            
          <input align="right" type="image" value="Add to Calendar"class="cal-icon" src="../img/calendar.svg" height="24" width="24" alt="calender-icon" title="Add to my Calender">  </span></input>
            </form></span>
            <div class=row>
                <div class=col-1>';
                if($bul && !isset($_COOKIE[$cid]))
                    echo '<span id="bul1'.$cid.'" class=bul>&bull;</span>';
                echo '</div><div class=col-10>
                    <div class=head>';
                    if($bul && !isset($_COOKIE[$cid]))
                        echo '<new id="bul2'.$cid.'">New</new><br>';
                    else
                        echo '<new style="height:25px;display:block"></new>';
                echo '<start>'.$start.'</start>
                        <p>'.$end.'</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=summary>
            '.$summary.'
        </div>';
        $query1="SELECT * FROM tags WHERE content_id=".$cid;
        echo'<div class=hashtags>';

        if($result1=mysqli_query($db_con,$query1))
        {
            while($a=mysqli_fetch_assoc($result1))
            {
                $tag=$a['tagname'];
                echo'<tag>#'.$tag.'</tag> &nbsp;&nbsp;';
            }
        }
        echo'   </div>
        </btn>';


    }
}
?>