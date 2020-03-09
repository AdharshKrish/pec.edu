
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
                            <b  class="webmaster" style="text-align: center"><div id="label1">OTP AUTHENTICATION</div></b>
                        </div>
                        <div class="password">
                       
                          
                    <label id="label_pass" style="font-size: 18px">OTP</label>
                    <br>
                    <form method="POST" action="./DB_TRANS/check_otp.php">
                    <input type="text" name="otp" style="background-color: none;font-size: 18px" class="webmaster-name" id="username"
                        placeholder="  8 number digit" required/>
                    <p id="msg" >Please check mail for OTP</p>
                    <button type="submit" id="button" class="login" >ENTER OTP</button>
                </form>
                   </div>
                        
                    <!-- </div> -->
                </main>

              
            </div>
        </div>
    </div>
</body>
</html>