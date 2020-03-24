<!DOCTYPE html>
<html lang="en">
<?php 
    require_once('./db_con.php');
    $id=$_GET['id'];
    $query="SELECT * FROM `article` WHERE id=$id LIMIT 20 ";

    if($result=mysqli_query($db_con,$query))
    { 
        
    $arr=mysqli_fetch_assoc($result);
            $summary=$arr['name'];
            $dep=$arr['dep'];
            $img=$arr['img'];
            $body=$arr['body'];
        
    }
?>
<HTML>
  

<div  style="padding:40px" class="container-fluid tb1 card-container">
        <div class="row " style="height:400px">
        <?php echo $body?>
</div>
</div>


</HTML>
        
    