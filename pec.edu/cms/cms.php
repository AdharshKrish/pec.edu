
<?php
session_start();
if(isset($_SESSION['loggedin_status']))
{ 
    header("Location: http://localhost/cms/pages/".$_SESSION['role']."_dashboard.php");
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
    <meta charset="UTF-8">
    <title>CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cms_style.css">
        <script src="cms_script.js"></script>
		
		<style>
			@media(max-size:620px){
				.access-type ul{
					text-align:center;
				}
			}
		</style>
    </head>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 hidden-sm hidden-xs col_no_padding" >
                <div class="cover_image" id="img1">
                    <!-- left cover image on large screen, applied using css url -->
                </div>
            </div>
            <div class="col-md-6 col_no_padding" >
                <section class="header" style="text-align: center; margin:auto; margin-top:10px;">
					<div style="margin:auto;">
                    <b>pec.edu <span class="cms" id="cms"></span><span class="curser">_</span></b>
					</div>
                </section>
                
                <main>
                    <!-- <div class="jumbotron"> -->
                        <div  class="webmaster-login">
                           <!-- <hr style="padding-bottom: 5px;">-->
                            <b  class="webmaster" style="text-align: center"><div id="label1">WEBMASTER LOGIN</div></b>
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
                        
                    <!-- </div> -->
                </main>

                <section class="footer">
                        <section class="access-type">
                                <label class="access" style="font-size:25px">Access type</label>
                                <hr style="margin-top: 2px">
                                <ul class=" b1" style="color: #828282">
                                    <!-- <nav class="col-md-6 col_no_padding" style="border: blue 1px solid"> -->
                                        <li class="b5" id="id1"> <a href="#" class="b4" style="text-decoration: none;" onclick="move0()">Webmaster</a></li>
                                        <li class="b2" id="id2"> <a href="#" class="b4" style="text-decoration: none" onclick="move()">Faculty</a></li>
                                        <li class="b2"><a href="#" class="b4" style="text-decoration: none" onclick="move2()">Webhandler</a></li>
                                    <!-- </nav> -->
                                    <!-- <nav class="col-md-6 col_no_padding" style="border: blue 1px solid"> -->
                                        <li class="b_float"><a href="#" class="b4" style="text-decoration: none">Cells | Clubs | Committees</a></li>
                                    <!-- </nav> -->
                                 
                                  
                                </ul>
                                <!-- <ul>
                                    <li> <a href="#">Webmaster</a></li>
                                    <li> <a href="#">Faculty</a></li>
                                    <li> <a href="#">Webhandler</a></li>
                                    <li> <a href="#">Cells | Clubs | Committees</a></li>
                                </ul> -->
                                <section class="rectangle" id="rec"></section>
                        </section>
                </section>
            </div>
        </div>
    </div>
</body>
</html>