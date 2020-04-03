<?php
    session_start();
    if(isset($_SESSION['loggedin_status'])){ 
        header("Location: pages/".$_SESSION['role']."_dashboard.php");
        exit();
    }
    else {
    //$_SESSION['role']="faculty";
        $error=0;
        if(isset($_GET['message'])){
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
    <link rel="icon" href="icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            #cell{
                display:none;
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
                        <div  class="webmaster-login">
                            <b  class="webmaster" style="text-align: center"><div id="label1">WEBMASTER LOGIN</div></b>
                        </div>
                        <div class="password" id="web">
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
                        <div id="cell" class="form-group" style="margin-top:50px;padding:0 5vw;">
                            <form id="otp" method="POST" action="./DB_TRANS/ccc_login.php?role=ccc">
                                <select name="email" class="form-control">
                                    <option value="none" selected="true" disabled>Select</option>
                                <!-- Committee -->
                                    <option value="Alumni Association"> Alumni Association</option> 
                                    <option value="Examination Wing"> Examination Wing</option> 
                                    <option value="Internal Complaints Committee"> Internal Complaints Committee (Complaints on Sexual Harassment of Women at Workplace)</option> 
                                    <option value="National Cadet Corps"> National Cadet Corps (NCC)</option> 
                                    <option value="National Service Scheme"> National Service Scheme (NSS)</option> 
                                    <option value="Students Council"> Students’ Council</option> 
                                    <option value="Students Disciplinary Committee"> Students’ Disciplinary Committee</option> 
                                    <option value="NIRF"> NIRF</option> 
                                    <option value="PMKVY"> PMKVY</option> 
                                    <option value="Skill Development Centre"> Skill Development Centre</option> 
                                    <option value="NBA"> NBA</option> 
                                    <option value="Jal Sakthi Abhiyan"> Jal Sakthi Abhiyan</option> 
                                    <option value="Hostel"> Hostel</option> 
                                    <option value="Campus Networking"> Campus Networking</option> 
                                    <option value="IIS"> IIS</option> 
                                    <option value="Building Division"> Building Division</option> 
                                    <option value="Press and Publicity"> Press and Publicity</option> 
                                    <option value="NeiLit"> NeiLit</option> 
                                    <option value="PEC Newsletter"> PEC Newsletter</option> 
                                    <option value="Library"> Library</option> 
                                    <option value="PRERANA"> PRERANA (SC/ST)</option> 
                                <!-- Cells -->
                                    <option value="Center for Continuing Education"> Center for Continuing Education (CCE)</option>     
                                    <option value="Counselling and Career Guidance Cell"> Counselling and Career Guidance Cell (CCGC)</option> 
                                    <option value="Grievance Redressal Cell"> Grievance Redressal Cell</option> 
                                    <option value="Innovation and Entrepreneurship Development Cell"> Innovation and Entrepreneurship Development Cell (IEDC)</option> 
                                    <option value="Internal Quality Assurance Cell"> Internal Quality Assurance Cell (IQAC)</option> 
                                    <option value="IP Rights and Patenting Cell"> IP Rights and Patenting Cell</option> 
                                    <option value="SC-ST Cell"> SC/ST Cell</option> 
                                    <option value="Womens Cell"> Women’s Cell</option> 
                                <!-- Clubs -->
                                    <option value="Cultural Club"> Cultural Club</option> 
                                    <option value="Design Club"> Design Club</option> 
                                    <option value="Google DSC"> Google DSC</option> 
                                    <option value="Health, Hygiene and Environmental Club"> Health, Hygiene and Environmental Club (H2EC)</option> 
                                    <option value="Literary Club"> Literary Club</option> 
                                    <option value="Photography Club"> Photography Club</option> 
                                    <option value="Rotaract Club"> Rotaract Club</option> 
                                    <option value="Thamizh Mandram"> Thamizh Mandram</option> 
                                <!-- Chapters -->
                                    <option value="Swayam-NPTEL – Students"> Swayam/NPTEL – Students</option> 
                                    <option value="Quality Enhancement in Engineering Education"> Quality Enhancement in Engineering Education (QEEE)</option> 
                                    <option value="Swayam-NPTEL – Staffs"> Swayam/NPTEL – Staffs</option> 
                                </select>
                                <button style="margin:20px 0" type="submit" id="button" class="login" >SEND OTP</button>
                            </form>
                        </div>
                </main>

                <section class="footer">
                        <section class="access-type">
                                <label class="access" style="font-size:25px">Access type</label>
                                <hr style="margin-top: 2px">
                                <ul class=" b1" style="color: #828282">
                                        <li class="b5" id="id1"> <a href="#" class="b4" style="text-decoration: none;" onclick="move0()">Webmaster</a></li>
                                        <li class="b2" id="id2"> <a href="#" class="b4" style="text-decoration: none" onclick="move()">Faculty</a></li>
                                        <li class="b2" id="id3"><a href="#" class="b4" style="text-decoration: none" onclick="move2()">Webhandler</a></li>
                                        <li class="b_float"><a href="#" class="b4" style="text-decoration: none"onclick="move3()">Cells | Clubs | Committees</a></li> 
                                </ul>
                                <section class="rectangle" id="rec"></section>
                        </section>
                </section>
            </div>
        </div>
    </div>
</body>
</html>