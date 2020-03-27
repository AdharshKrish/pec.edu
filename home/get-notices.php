<?php
include("db_con.php");
$id=$_POST['id'];
if($id==0){
    $query="SELECT * FROM `news_update` WHERE department='all' AND verified=1 AND expires_on>=current_date ORDER BY expires_on DESC LIMIT 30";
}else{
    $query="SELECT * FROM `news_update` WHERE department='main' AND verified=1 AND expires_on>=current_date ORDER BY expires_on DESC LIMIT 30";
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
        if($dept=="all"){
            $dept="All Department";
            $clr="#3c6382";
        }else{
            $dept="General";
            $clr="#0ea2be";
        }
            

        echo'<btn class=cad onclick="getFullContent('.$cid.')" data-toggle="modal" data-target="#full-notice">
        <div class=header>
            <div class=tag style="background-color:'.$clr.'">'.$dept.'</div>';
            
        if($bul && !isset($_COOKIE[$cid]))
            echo'<div id="bul'.$cid.'"><span class=bul>&bull;</span><span>New</span></div>';
        else
            echo'<div style="height:55px;width:20px"></div>';
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
    //     <div class=row>
    //     <div class=col-1>';
    //     if($bul && !isset($_COOKIE[$cid]))
    //         echo '<span id="bul1'.$cid.'" class=bul>&bull;</span>';
    //     echo '</div><div class=col-10>
    //         <div class=head>';
    //         if($bul && !isset($_COOKIE[$cid]))
    //             echo '<new id="bul2'.$cid.'">New</new><br>';
    //         else
    //             echo '<new style="height:25px;display:block"></new>';
    //     echo '<start>From'.$start.'</start>
    //             <p>To'.$end.'</p>
    //         </div>
    //     </div>
    // </div>

}
?>