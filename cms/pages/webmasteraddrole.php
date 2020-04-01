<?php
session_start();
if(isset($_SESSION['loggedin_status']))
{
$logged=$_SESSION['loggedin_status'];
if($logged==900)
{
    if($_SESSION['role']=="webmaster")
    {
        $error=0;
        if(isset($_GET['message']))
        {
        $message=$_GET['message'];
        $error=1;
        }
    }
    else {
       header("Location: ../index.php");
    }
}
else {
    header("Location: http://localhost/pec/error/error404.html");
    exit();
}
}

else {
    header("Location: http://localhost/pec/error/error404.html");
    exit();
}
?>
<html>

<head>
    <title>Webmaster</title>
    <link rel="icon" href="../icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script defer src="../bootstrap/js/jquery-3.3.1.min.js"></script>
<script defer src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/master.css">
<link rel="stylesheet" href="../css/header.css">
<style>
    .role-panel-body{
        background-color: #EBF2F3;
        overflow: hidden;
        height:450px;
    }
    .h-tab{
        margin-bottom:50px;
        text-align:center;
        background:#2e869030;
        font-size:20px;
        font-weight:bold;
    }
    .h-tab tab{
        padding:10px 0;
    }
    .h-tab tab:nth-child(1){
        border-right:2px solid #000;
        background:#2e8690aa;
    }
    #c{
        display:none;
    }
</style>
</head>

<body>
    <header>
        <h1>pec.edu <span>CMS_</span> </h1>
    </header>
    <main>
        <div class="container">
            <div class="row ">
                <div class="col-md-2 "> <!--verticle li-->
                <ul class="nav nav-tab">
                        <li > <a href="webmaster_dashboard.php" >ADD FACULTY </a></li>
                        <li  class="active"> <a href="webmasteraddrole.php"style="color: black;"> ADD ROLES </a></li>
                        <li> <a href="webmasteraddmemo.php" id=""> ADD MEMO </a></li>
                        <li> <a href="webmaster_viewmemo.php"> VIEW MEMO </a></li>
                        
                        <li> <a href="webmaster_role.php"> VIEW ROLES </a></li>
                        <li> <a href="webmaster_viewfaculty.php"> FACULTY ACCESS LIST </a></li>
                        <li><a href="signout.php" style="color: #2E8690">SIGNOUT</a></li>
                        <li><a href="../../files/cms-helpbook.docx" target="blank" style="color: #0000EE">HELPBOOK</a></li>
                    </ul>
                </div>
             
                <div class="col-md-8 ">
                    <div class="panel panel-default"> 
                    <?php
                if($error==1)
                 echo "<div class='alert alert-success'>
                 <strong>STATUS: </strong> ".$message."
               </div>";
                ?>
                        <div class="role-panel-body">
                            <div class="row h-tab" style="cursor: pointer">
                                <tab class="col-xs-6" onclick="switchTab(this)" t="d">General Roles</tab>
                                <tab class="col-xs-6" onclick="switchTab(this)" t="c">4Cs</tab>
                            </div>
                                <form class="form3" id="d" method="POST" action="../DB_TRANS/addrole.php">            
                                    <div class="form-group">
                                        <label for="dept">Department</label>
                                        <select name="dept" class="form-control">
                                            <option value="none" selected="true" disabled>Select</option>
                                            <option value="cse">Computer Science and Engineering</option>
                                            <option value="it">Information Technology</option>
                                            <option value="eee">Electrical and Electronics Engineering</option>
                                            <option value="ece">Electronics and Communication Engineering</option>
                                            <option value="eie">Electronics and Instrumentation Engineering</option>
                                            <option value="ce">Civil Engineering</option>
                                            <option value="che">Chemical Engineering</option>
                                            <option value="mech">Mechanical Engineering</option>
                                            <option value="phy">Department of Physics</option>
                                            <option value="chem">Department of Chemistry</option>
                                            <option value="maths">Department of Mathematics</option>
                                            <option value="hss">Department of Humanity Sciences</option>
                                            <option value="other">Others</option>
                                        </select>
                                    </div>   
                                    
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" name="email" placeholder="Email" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Role</label>
                                        <select name="role" class="form-control">
                                            <option value="none" selected="true" disabled>Select</option>
                                            <option value="HOD">HOD</option>
                                            <option value="WEBHANDLER">Webhandler</option>
                                            <option value="WEBMASTER">Webmaster</option>
                                        </select>
                                    </div>

                                    <br>
                                    <input type="submit" value="GRANT ACCESS" class="btn btn-primary btn-large grant-access">
                                </form>
                                <form class="form3" id="c" method="POST" action="../DB_TRANS/ccc_addrole.php">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <select name="name" class="form-control" onchange='Checknew4c(this.value);'>
                                            <option value="none" selected="true" disabled>Cell/Club/Committee/Chapter title</option>
                                        <!-- Committee -->
                                            <option value="Add New"> Add New</option> 
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
                                            <option value="Center for Continuing Education"> Center for Continuing Education (CCE)</option> 
                                        <!-- Cells -->
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
                                    </div>
                                    <input type="text" name="title" id="4Cnew" class="form-control" placeholder="Enter Title" style='display:none;'/>
                                    <br>
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" name="email" placeholder="Email" class="form-control">
                                    </div>
                                    <br>
                                    <input type="submit" value="ADD" class="btn btn-primary btn-large grant-access">
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <script>
        function switchTab(elt){
            document.querySelectorAll('tab').forEach((t)=>{
                t.style.backgroundColor="#2e869030"
            })
            elt.style.backgroundColor="#2e8690aa"
            if(elt.getAttribute('t')=='c'){
                document.querySelector('#c').style.display="block"
                document.querySelector('#d').style.display="none"
            }
            else{
                document.querySelector('#c').style.display="none"
                document.querySelector('#d').style.display="block"
            }
        }
        function Checknew4c(val){
            var element=document.getElementById('4Cnew');
            if(val=='Add New'||val=='others')
            element.style.display='block';
            else  
            element.style.display='none';
        }
    </script>
</body>
</html>