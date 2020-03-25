<?php
include("db_con.php");
$id=$_POST['id'];
if($id==0){
    $query="SELECT * FROM `news_update` WHERE department<>'all' AND verified=1 ORDER BY expires_on DESC LIMIT 12";
}else{
    $query="SELECT * FROM `news_update` WHERE department='all' AND verified=1 ORDER BY expires_on DESC LIMIT 12";
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
            <div class=row>
                <div class=col-1>';
                if($bul && !isset($_COOKIE[$cid]))
                    echo '<span class=bul>&bull;</span>';
                echo '</div><div class=col-10>
                    <div class=head>';
                    if($bul && !isset($_COOKIE[$cid]))
                        echo '<new>New</new><br>';
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