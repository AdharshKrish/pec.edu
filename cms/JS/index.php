
<?php
session_start();
if(isset($_SESSION['loggedin_status']))
{ 
    header("Location: ../pages/".$_SESSION['role']."_dashboard.php");
    exit();
}
else {
    //$_SESSION['role']="faculty";
$error=0;
if(isset($_GET['message']))
{
$message=$_GET['message'];
$error=1;
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index_s/style.css">
    <script type="text/javascript" src="index_s/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid" style="padding-left: 0px; padding-right: 15px">
        <div class="row">
        <div class="col-md-6 hidden-sm hidden-xs">
            <img class="img-responsive" src='./college1.jpg'>
        </div>
        <div class="col-sm-12 col-md-6 content">
            <div class="Content" style="height: 670px">
                <div class="header">
                    <b>pec.edu <span class="cms" id="cms"></span><span class="curser">_</span></b>
                    <hr>
                </div>
                <div class="webmaster-login">
                   <b  class="webmaster" style="text-align: center"> <div id="label1">WEBMASTER LOGIN</div></b>
                </div>
                
                <div class="password">
                       
                    <label id="label_pass" style="font-size: 18px">Username</label>
                    <br>
                    <form id="otp" method="POST" action="./DB_TRANS/login.php?role=webmaster">
                    <input type="text" name="email" style="background-color: none;font-size: 18px" class="webmaster-name" id="username"
                        placeholder="  adam@pec.edu" required/>
                    <p id="msg"></p>
                    <?php
                if($error==1)
                 echo "  <div class='alert alert-danger'>
                 <strong>".$message."</strong>        
               </div>";
                ?>
                    <button type="submit" id="button" class="login" >SEND OTP</button>
                </form>
                </div>
           
                <div class="access-type">
                    <label class="access" style="font-size:25px">Access type</label>
                    <hr style="margin-top: 2px">
                    <ul class=" b1" style="color: #828282">
                        <li class="b5" id="id1"> <a href="#" class="b4" style="text-decoration: none;color: #000;"
                                onclick="move0()">Webmaster</a></li>
                        <li class="b2" id="id2"> <a href="#" class="b4" style="text-decoration: none"
                                onclick="move()">Faculty</a></li>
                        <li class="b2"><a href="#" class="b4" style="text-decoration: none" onclick="move2()">Webhandler</a>
                        </li>
                        <li class="b2"><a href="#" class="b4" style="text-decoration: none">Cells | Clubs | Committees</a></li>
                    </ul>
                    <div class="rectangle" id="rec"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>