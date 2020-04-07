<?php
include("db_con.php");
$id=$_POST['id'];
if($id==0){
    $query="SELECT * FROM `news_update` WHERE department='all' AND verified=1 AND expires_on>=current_date ORDER BY expires_on ASC LIMIT 30";
}else{
    $query="SELECT * FROM `news_update` WHERE department='main' AND verified=1 AND expires_on>=current_date ORDER BY expires_on ASC LIMIT 30";
}

if($result=mysqli_query($db_con,$query))
{ 

    while($arr=mysqli_fetch_assoc($result))
    {
        $summary=$arr['breif'];
        if(strpos($arr['start'],'0000')!==false)
            $start = 'NA';
        else
            $start = date("d-M-Y",strtotime($arr['start']));

        if(strpos($arr['end'],'0000')!==false)
            $end = 'NA';
        else
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
        if($dept=="all"){
            $dept="All Department";
            $clr="#fa983a";
        }else{
            $dept="General";
            $clr="#0ea2be";
        }
            

        echo'<btn class=cad onclick="getFullContent('.$cid.')" data-toggle="modal" data-target="#full-notice">
        <div class=header>
            <div class=tag style="background-color:'.$clr.'">'.$dept.'</div>';

        if(isset($_COOKIE[$cid]))
            echo'<div id="bul'.$cid.'"><span class=bul>&nbsp;</span><span style="color:#2e8690">Read</span></div>';
        else if($bul)
            echo'<div id="bul'.$cid.'"><span class=bul>&bull;</span><span>New</span></div>';
        else
            echo'<div id="bul'.$cid.'"><span class=bul>&nbsp;</span><span style="color:#2e8690">-</span></div>';

        echo'<span>            
                <form method="post" action="../ics/downloadcalendar.php">
                    <input type="hidden" name="date_start" value='.$start.'>
                    <input type="hidden" name="date_end" value='.$end.'>
                    <input type="hidden" name="location" value="Pondicherry Engineering College, Pillaichavady">
                    <input type="hidden" name="description" value='.$summary.'>
                    
                    <input style="float:right" type="image" value="Add to Calendar"class="cal-icon" src="../img/calendar.svg" height="24" width="24" alt="calender-icon" title="Add to my Calender">  </span></input>
                </form>
            </span>
            <div class=row style="margin-left:10px">
                <div class=col-3>From</div>
                <div class=col-8>'.$start.'</div>
                <div class=col-3>To</div>
                <div class=col-8>'.$end.'</div>
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