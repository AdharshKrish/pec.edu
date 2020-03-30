<?php

include("db_con.php");
$id=$_POST['id'];

$query="SELECT * FROM `news_update` WHERE id=".$id;
$query2="SELECT * FROM `attachment` WHERE  content_id=".$id;
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
        $cid=$arr['id'];
        setcookie($cid, "seen", strtotime($arr['expires_on']), "/"); 

       echo'
                           

        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">'.$start.' &emsp;to&emsp; '.$end.'</h5>
            <div type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
        </div>
        <div class="modal-body">
            '.$summary.'<br>';

                            $query1="SELECT * FROM tags WHERE content_id=".$cid;
                            
                            if($result1=mysqli_query($db_con,$query1))
                            {
                                while($a=mysqli_fetch_assoc($result1))
                                {
                                    $tag=$a['tagname'];
                                    echo'<tag style="color:#00f">#'.$tag.'</tag> &nbsp;&nbsp;';
                                }
                            }
                            echo'<br><br>';
                                  
                                   if($result=mysqli_query($db_con,$query2))
                                   { 
                                   while($arrnew=mysqli_fetch_assoc($result))
                                   {
                                    $fl=$arrnew['name'];
                                    $type=$arrnew['type'];
                                    if($type[0]=='i')
                                    echo "<img width='300' src='../cms/content_upload/".$fl."'></img>";
                                   }}

                            if($result=mysqli_query($db_con,$query2))
                            { 
                            while($arrnew=mysqli_fetch_assoc($result))
                            {
                            $type=$arrnew['type'];
                            $fl=$arrnew['name'];
                            if($type[0]=='a')
                            echo "<p>Download</p><a href='../cms/content_upload/".$fl."'><li>".$fl."</li></a>";
                            }
                            }
                      echo'    
                            </div>
                        </div>
                    </div>';

    }
}
?>