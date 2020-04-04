<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faculty Profile</title> <!-- ENTER PAGE TITLE -->
    <link rel="icon" href="../img/icon.png">
    <link rel="manifest" href="../manifest.json" />
    <link rel="apple-touch-icon" href="../img/icons/150px.png" />
    <link rel="apple-touch-icon" href="../img/icons/300px.png" />
    <meta name="apple-mobile-web-app-status-bar" content="#2e8690" />
    <meta name="theme-color" content="#2e8690" />
    <meta name="Description" content="Pondicherry Engineering College (PEC) is an Autonomous Institution sponsored by the Union Territory of Pondicherry, India. The College was started in 1984 under the VII Five Year Plan.">

    <link rel="stylesheet" type="text/css" href="../css/new-material.css" class="styleload" media="all" disabled>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap4.css" class="styleload" media="all" disabled>
    <link rel="stylesheet" type="text/css" href="../css/header.css" class="styleload" media="all" diabled>
    <link rel="stylesheet" type="text/css" href="../css/footer.css" class="styleload" media="all" disabed>
    <link rel="stylesheet" type="text/css" href="../css/menu.css" class="styleload" media="all" disabled>

    <link rel='dns-prefetch' href='https://maps.googleapis.com'>
    <link rel='dns-prefetch' href='https://fonts.googleapis.com/' >
    <link rel='dns-prefetch' href="https://khms1.googleapis.com/">

    <script defer src="../js/jquery.min.js"></script>
    <script defer src="../js/materialize.min.js"></script>
    <script defer src="../js/bootstrap4.js"></script>
    <script defer src="../js/menu.js"></script>
    <script async src="../js/pace.js"></script>

<!--ADD CUSTOM IMPORTS HERE use convention-->
    <!-- <link rel="stylesheet" href="enter link" class="styleload" media="all" disabed> -->
    <!-- <script defer src="enter link"></script> -->


<!--custom imports ends-->

    <style>
        main{
            opacity: 0; 
            transition: opacity 3s;
        }
        floatbtn{
            opacity: 0; 
            transition: opacity 3s;
        }
        header{
            opacity: 0; 
            transition: opacity 3s;
        }
        footer{
            opacity: 0; 
            transition: opacity 3s;
        }
        .fixed-action-btn {
            right: 83%;
            top: 88%;
            left: 2%;
            z-index: 4;
            bottom: 10px;
        }
        
        .floatbtn a {
            width: 200px;
            border-radius: unset;
            font-size: 16px;
            font-weight: 500;
            color: #000;
            background-color: #fff;
            text-align: center;
            text-decoration: none;
        }
        
        .floatbtn a:hover {
            background-color: #2e8690;
            color: #fff;
        }
        
        .fixed-action-btn ul li {
            margin-bottom: 3px;
        }
        
        ul {
            list-style-type: none;
        }
        html{
            scroll-behavior: smooth;
        }
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        #iconbtn:hover{
            background-color: #ebf3f4;
        }
        main {
            flex: 1;
        }
        
        ::-webkit-scrollbar {
            width: 0.35em;
        }
        
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
        }
        
        ::-webkit-scrollbar-thumb {
            background-color: #707070;
            border-radius: 8px;
            outline: 1px solid #f8f8f8;
        }
        /*load progress bar*/
        .pace {
          -webkit-pointer-events: none;
          pointer-events: none;

          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        .pace-inactive {
          display: none;
        }

        .pace .pace-progress {
          background: #2e8690;
          position: fixed;
          z-index: 2000;
          top: 0;
          right: 100%;
          width: 100%;
          height: 2px;
        }
        
        /*ENTER INLINE CONTENT CSS*/
        .vertical_middle{
    min-height: inherit;
    display: table-cell;
    vertical-align: bottom;
}
.label{
    font-weight: bold;
    color: #000000;
}
.row_dob{
    background-color: #fefeb1;
    padding: 6px;
    border: 4px solid snow;
    border-radius: 4px;
}
.row_specialization{
    background-color: #ebf3f4;
    padding: 20px;
}
ul{
    list-style: none;
    padding-left: 0;
}
li{
    padding-bottom: 5px;
}
a{
    padding-bottom: 3px;
}
.student_name{
    color: #0000ff;
}
h3{
    font-size: 20px !important;
}


@media (max-width: 992px) and (min-width: 576px){
    .jumbotron{
        padding: 1rem 1rem !important;
    }
}

@media  (max-width: 992px){
    .root-container{
        min-width: 90%;
    }
}
        /*content css ends*/
    </style>
    <script>
        document.addEventListener("DOMContentLoaded",function(){
        var imports = document.querySelectorAll(".styleload");
        imports.forEach((imp)=>{
            imp.removeAttribute("disabled");
        });        
        });
        </script>
</head>

<body>
    <floatbtn class="fixed-action-btn">
        <a class="btn-floating btn-large" style="background-color: #ffffff">
            <img src="../img/forward.svg" id="iconbtn" alt="nav">
        </a>
        <ul class="floatbtn">
            <li><a href="./" class="btn-floating">Home</a></li>
            <li><a href="./notice-updates.php" class="btn-floating">Notice & Updates</a></li>
            <li><a href="./articles.php" class="btn-floating">Articles</a></li>
            <li><a href="./overview.html" class="btn-floating">Overview</a></li>
            <li><a href="./faculty.php" class="btn-floating">Faculty</a></li>
            <li><a href="./courses.html" class="btn-floating">Courses & Curriculum</a></li>
        </ul>
    </floatbtn>
    <header>
        <div class="container-dim container-fluid">
            <div class="row" id="row-top-margin">
                <a href="http://pec.edu" class="logo-container">
                    <img class="logo" src="../img/logo.png" alt="logo_image" width="100"> 
                </a>
                <div class="college_name">
                    <h4 class="college-name-text">Pondicherry</h4><br>
                    <h4 class="college-name-text">Engineering</h4><br>
                    <h4 class="college-name-text">College</h4>
                </div>
                <div class="dept-name" id="dept-name">
                    <h4 class="dept-of">DEPARTMENT <i>of</i></h4>
                    <h4 class="dept-name-text">Humanities and Social Sciences</h4>  <!--ENTER DEPARTMENT NAME-->
                </div>

                <div class="search-box" style="position: absolute;top:0px;right: 80px;padding-top: 0px;">
                    <form>
                        <input class="search-bar" id="focusChk" type="text" placeholder="Search" style="top: 50px;">
                        <img src="../img/search.svg" style="margin:33px 10px;" alt="search">
                    </form>
                </div>

                <a data-toggle="collapse" href="#collapseMenu" alt="menu">
                    <div class="container menu-icon" id="overlay" onclick="change()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </a>
                <div class="mob-btn">
                    <img src="../img/search.svg" data-toggle="collapse" href="#collapseSearch" onclick="focusS()" style="margin-bottom: 10px" alt="search">
                    <div data-toggle="collapse" class="menu-icon" href="#collapseMenu" onclick="change()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin: 0 2%;border-width: 2px;box-shadow: 0 3 6 #0003">
    
    <div class="collapse" id="collapseSearch">
        <div style="display:flex;justify-content: center">
            <input id="focus" type="text" style="padding-left:10px;width: 80%;" placeholder="Enter search text here...">
        </div>
    </div>

    <div class="pec-menu collapse" id="collapseMenu">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-6" id="menu-col-1">
                    <ul>
                        <li onclick="location.href='https://peciis.info/PECMIS/';">IIS</li>
                        <li onclick="location.href='http://tnp.pec.edu/';">Placement</li>
                        <li onclick="location.href='http://research.pec.edu/';">Research</li>
                        <li onclick="location.href='../home/admission.html';">Admission</li>
                        <li onclick="location.href='http://academics.pec.edu/';">Academics</li>
                        <li onclick="location.href='http://www.pec.edu/alumni.php';">Alumni</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6" id="menu-col-2">
                    <ul>
                        <li class="menu2" onclick="location.href='../home/about-pec.html'"; onmouseover="menu(this,'about')">About</li>
                        <li class="menu2" onclick="location.href='../home/gallery.php'"; onmouseover="menu(this,'gallery')">Gallery</li>
                        <li class="menu2" onmouseover="menu(this,'oncampus')">On&nbsp;Campus<img src="../img/forward.svg" class="forward" alt=">"></li>
                        <li class="menu2" onmouseover="menu(this,'departments')">Departments<img src="../img/forward.svg" class="forward" alt=">"></li>
                        <li class="menu2" onclick="location.href='../home/administration.html'"; onmouseover="menu(this,'administration')">Administration</li>
                        <li class="menu2" onclick="location.href='http://www.teqip.pec.edu/'"; onmouseover="menu(this,'teqip')">TEQIP</li>
                    </ul>
                </div>
                <div id="menu2-cover"> <button onclick="goBack()"> <img src="../img/go-back.svg" alt="go-back" > </button> </div>
                <div class="col-lg-3 col-6" id="menu-col-3">
                    <p class="menu-about">Pondicherry Engineering College (PEC) is an Institution sponsored by the Union Territory of Pondicherry, India. The College was started in 1984 under the VII Five Year Plan. It is an autonomous Institution for the purposes of administration,
                        staff recruitment and college development and is managed by a Board of Governors.</p>
                </div>
                <div class="col-lg-3 col-6" id="menu-col-4">
                    <img class="aboutimg" src="../img/about.jpg" alt="college-img" style="width:18vw">
                </div>
            </div>
        </div>
    </div>
    </header>

    <main>
    <div class="watermark"></div>
    <!--ENTER MAIN CONTENT HERE-->
        
<?php
$post_tier='';
$number='';
$qualification='';
$specilization='';
$contact='';
$ext='';
$dob ='';
// $exists=0;

$alma='';
$interest='';
$research='';
$student='';
$project='';

$website='';
$facebook='';
$twitter='';
$linkedin='';

$books='';
$conferences='';
$journals='';

$name='';
$email='';
$dept='';








$path= $_SERVER['DOCUMENT_ROOT'];
require_once('./db_con.php');
$email=$_GET['email'];

$query="SELECT * FROM login where email='".$email."'";
$result=mysqli_query($db_con,$query);
if(mysqli_num_rows($result)>0)
{ 
    $arr=mysqli_fetch_assoc($result);
    $name=$arr['username'];
    $email=$arr['email'];
    $dept=$arr['department'];
   $id=$arr['id'];
$query="SELECT * FROM basic_faculty_info where id=".$id;
$result=mysqli_query($db_con,$query);
if(mysqli_num_rows($result)>0)
{ 
       $exist=1;
       $arr=mysqli_fetch_assoc($result);
       $post_tier=$arr['post_tier'];
       $number=$arr['phno'];
       $qualification=$arr['qualification'];
       $specilization=$arr['specialization'];
       $contact=$arr['phno'];
       $ext=$arr['extension'];
       $dob = date("d-M-Y",strtotime($arr['dob']));
      // $exists=0;
      $query="SELECT * FROM  academic where f_id=".$id;      
       $result=mysqli_query($db_con,$query);
       $arr=mysqli_fetch_assoc($result);
       $alma=$arr['alma'];
       $interest=$arr['interest'];
       $research=$arr['research'];
       $student=$arr['student'];
       $project=$arr['projects'];
       $query="SELECT * FROM  social_links where f_id=".$id;      
       $result=mysqli_query($db_con,$query);
       $arr=mysqli_fetch_assoc($result);
       $website=$arr['website'];
       $facebook=$arr['facebook'];
       $twitter=$arr['twitter'];
       $linkedin=$arr['linkedin'];
       $query="SELECT * FROM  publication where f_id=".$id;      
       $result=mysqli_query($db_con,$query);
       $arr=mysqli_fetch_assoc($result);
       $books=$arr['books'];
       $conferences=$arr['conference'];
       $journals=$arr['journals']; 
       $query="SELECT * FROM login where id=".$id;      
       $result=mysqli_query($db_con,$query);
       $arr=mysqli_fetch_assoc($result);
       $name=$arr['username'];
       $email=$arr['email'];
       $dept=$arr['department']; 



}
else {
    
   // echo "error1";
}  
      
   }
   else {
       //echo "error2";
   }
   $query="SELECT * FROM uploading where id=".$id;      
   if ($result1 = mysqli_query($db_con, $query)) {

    $arr1 = mysqli_fetch_assoc($result1);
    if (mysqli_num_rows($result1) > 0)
        $file_path = $arr1['file_name'];
    else
        $file_path = "profile-placeholder.png";
}

?>
        <div class="container root-container" >
        <div class="row " style="margin-top:20px">
            <div class="col-sm-5 col-lg-4">
                <div class="row" style="min-width:120px;">
                    <div class="col-md-6 ">
                        <div class="thumbnail">
                            <div class=""><?php  echo "<img src='../cms/profilepic/". $file_path ."' style='resize: both; width:150px; height:200px; margin-right:5px' alt='error'>";?></div>
                        </div>
                    </div>
                    <div class="col-md-6 " style="margin-top:20px;display: flex; align-items: center;">
                        <div class="caption">
                            <h4 style="font-size: 20px;"><?php echo $name?></h4>
                            <p><?php echo $post_tier?></p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <?php echo $qualification?>
                    </div>
                    <div class="col-12">
                    <hr>
                        <label class="label"> Alma mater </label><br>
                        <?php echo $alma?>
                    </div>
                </div>
                <div class="row_specialization" style="margin-top: 20px; margin-bottom: 20px">
                    <label class="label" style="color: #2e8690;"> Specialization </label><br>
                    <?php echo $specilization?>
                </div>
            </div>
            <div class="col-sm-7 col-lg-8 testBorder1 jumbotron">
                <div class="container">
                    <div class="row ">
                        <div class="col-sm-6">
                             <label class="label"> Phone </label>  <?php echo $contact?> <br>
                             <label class="label"> Email </label>  <?php echo $email?><br>
                            <label class="label"> Extension </label>  123 <br>
                            <!-- <hr> -->
                        </div>
                        <div class="col-sm-6" style="min-width: 240px;">   
                            <h6 style="color: #2e8690;">Find me on</h6>
                            <ul style="margin: 5px 0px 5px 0px;">
                                <li><a href="<?php echo $linkedin?>"><img src="../img/linkedin-brands.svg" alt="linkedin-brands" height="24" width="24" style="margin-right: 5px"> <?php echo $linkedin?></a><br></li>
                                <li><a href="<?php echo $twitter?>"><img src="../img/facebook-square-brands.svg" alt="facebook-square-brands" height="24" width="24" style="margin-right: 5px"> <?php echo $facebook?></a><br></li>
                                <li><a href="<?php echo $facebook?>"><img src="../img/twitter-brands.svg" alt="twitter-brands" height="24" width="24" style="margin-right: 5px"><?php echo $twitter?> </a><br></li>
                                <li><a href="<?php echo $contact?>"><img src="../img/globe-solid.svg" alt="globe-solid" height="24" width="24" style="margin-right: 5px"><?php echo $website?></a><br></li>
                            </ul>   
                        </div>
                    </div>
                    <br>
                    <div class="row row_dob">
                            <div class="col-sm-4">
                                <p> 
                                    <label class="label"> Date of Birth </label><br>
                                     <?php echo$dob?>
                                </p>
                            </div>
                            <div class="col-sm-8">
                                <p> <label class="label"> Interests</label><br>
                                <?php echo $interest?></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>  
        <hr>

        <div class="row">
            <div class="col-md-5 col-sm-4" >
                <div>
                    <p> 
                        <label class="label"> Current Research</label><br>
                           <?php echo $research?>
                    </p>
                </div>
                <div>
                    <p> 
                        <label class="label"> Students </label><br>
                            <?php echo $student?>
                        </p>
                </div>
            </div>
            <div class="col-md-7 col-sm-8" style="overflow:auto;">
                <div>
                    <label class="label"> Projects and Activities </label>
                    <br>
                    <?php echo$project?>
                    
                    
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="container" style="margin: 20px 0px 30px 0px">
                <label class="label"> Publications </label>
                <article>
                    <h3 style="color: #ebdd22;">Books</h3>
                    <hr>
                    <?php echo $books?><br>
                </article>
                <br>
                <article>
                    <h3 style="color: #fa983a;">Journals</h3>
                    <hr>
                    <?php echo $journals?><br>
                   
                </article>
                <br>
                <article>
                    <h3 style="color: #b71540;">Conferences</h3>
                    <hr>
                    <?php echo $conferences?><br>
                </article>
            </div>
        </div>
    </div>


        <!--main content ends-->
    </main>
    <footer>
        <div class="foot">
            <div class="footer">
                <div class="container-fluid">
                    <div class="row row-footer-1">
                        <div class="col-sm-7 col-md-4 col-lg-3 col-xl-3 col-footer-1">
                            <div class="google-maps">
                                <iframe title="Google Map" src="https://maps.google.com/maps?q=pondicherry%20engineering%20college&t=&z=13&ie=UTF8&iwloc=&output=embed" width="400" height="280" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>
                        <div class="col-sm-5 col-md-3 col-lg-3 col-xl-3 col-footer-1">
                            <p class="pp">Pondicherry Engineering College </p>
                            <p class="pp">Pillaichavadi,</p>
                            <p class="pp">Puducherry,</p>
                            <p class="pp">India-605014</p>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-footer-1">
                            <p class="pp">Ph (+91)0413-2655281</p>
                            <p class="pp">FAX (+91)0413-2655101 </p>
                            <p class="pp">E-Mail info@pec.edu</p>
                            <div class="social_icon">
                                <a href="https://www.facebook.com/PEC.Pondicherry" target="_blank" rel="noreferrer">
                                    <img src="../img/facebook-square-brands.svg" href=" " class="icons" height="36" width="36" alt="Facebook"></a>
                                <a href="https://www.linkedin.com/school/pondicherry-engineering-college/" target="_blank" rel="noreferrer">
                                    <img src="../img/linkedin-brands.svg" class="icons" height="36" width="36" alt="LinkedIn"></a>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm-md col-lg-1 col-xl-2 col-footer-1"></div>
                        <div class="col-sm-6 col-md-2 col-lg-2 col-xl-2 col-footer-1 padding_remove">
                            <button class="contact" onclick="window.location.href='../home/contact-us.html'">CONTACT&nbsp;US</button>
                            <div class="dotted_bordered">


                                <p class="pp">General enquiry</p>
                                <p class="pp">Ragging helpline</p>
                                <p class="pp">Grievance</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-2">
                        <div class="container-fluid tb1">
                            <div class="nested-footer-2 tb2">
                                <div class="row row-footer-2">
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a alt="pec" href="http://pec.edu/old/" target="blank">
                                            <p class="link-footer-2">Old&nbsp;Site</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a alt="iedc" href="https://www.peciedc.com/" target="blank">
                                            <p class="link-footer-2">IEDC</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a alt="nirf" href="https://www.nirfindia.org/" target="blank">
                                            <p class="link-footer-2">NIRF</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a href="../home/sitemap.html">
                                            <p class="link-footer-2">Sitemap</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a href="../home/about-us.html">
                                            <p class="link-footer-2">About Site</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a href="../home/disclaimer.html">
                                            <p class="link-footer-2">Disclaimer</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.fixed-action-btn');
            var instances = M.FloatingActionButton.init(elems, {
                direction: 'top',
                hoverEnabled: false
            });
        });
        let icon = document.getElementById('iconbtn').style;
        iconbtn.addEventListener('click', () => {
            if(icon.transform != "rotate(90deg)")
                icon.transform = "rotate(90deg)";
            else
                icon.transform = "rotate(-90deg)";
        });
    </script>

</body>

</html>




