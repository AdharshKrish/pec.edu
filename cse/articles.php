<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title> <!-- ENTER PAGE TITLE -->
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

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

<!--custom imports ends-->

    <style>
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
 
        .card-parent{
            text-align: center;
        }
        .card-container{
            padding-bottom: 10px;
    box-shadow: inset 0 0 10px #707070;
        }
        
.card{
    min-width: 300px;
    max-width: 320px;
    padding: 25px;
    border-radius: 5px;
    margin-left: 10px;
    margin-right: 10px;
    margin: 15px auto ;
    text-align: left;
}
.card p{
    margin: 0 !important;
    color: #707070;
    font-weight: bolder;
}
.card-header{
    padding: 5px;
}
.card-body{
    font-size: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.hashtags{
    padding: 7px;
}


.card-container{
    padding-top: 15px;
    background: #f5f4f4;
}


.card-parent{
    padding: 20px;
}
.card{
    background: white;
    /* border: 1px solid red; */
    transition: all .5s;
    padding-top: 6px;
    border-radius: 10px;
}
.card:hover{
    box-shadow: 4px 4px 12px 2px rgba(0,0,0,0.4);
    transform: scale(1.03);
}

.details{
    padding: 13px;
}
.label{
    padding-left: unset;
    font-size: 14px;
    font-weight: bold;
    color: #707070;
}
.thumbnail{
    max-width: 200px;
    max-height: 200px;
    margin-left: auto;
    margin-right: auto;
}
.faculty-name{
    font-size: 25px;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
}

.designation{
    background: #4a69bd;   /*to change*/
    text-align: center;
    padding: 5px;
    color: white;
    margin-top: 12px;
}
.degree{
    text-align: center;
    font-size: 18px;
}

.faculty-header{
    border-top:3px double black;
    border-bottom:3px double black;
    font-family: 'Oswald',sans-serif;
    text-align: center;
    margin-left:5%;
    margin-right:5%;
    padding-top:0px;
    padding-bottom:0px;
    margin-top: 20px;
    margin-bottom: 20px;
}
.faculty-header h2{
    margin-top: 10px;
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
            <li><a href="../home/" class="btn-floating">Home</a></li>
            <li><a href="../newsupdate/" class="btn-floating">Notice & Updates</a></li>
            <li><a href="../articles/" class="btn-floating">Articles</a></li>
            <li><a href="../overview/" class="btn-floating">Overview</a></li>
            <li><a href="../facultylist/" class="btn-floating">Faculty</a></li>
            <li><a href="../courses/" class="btn-floating">Courses & Curriculum</a></li>
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
                    <h4 class="dept-name-text">Computer Science and Engineering</h4>  <!--ENTER DEPARTMENT NAME-->
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
    </header>
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
                        <li>IIS</li>
                        <li>Placement</li>
                        <li>Research</li>
                        <li>Admission</li>
                        <li>Academics</li>
                        <li>Alumni</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6" id="menu-col-2">
                    <ul>
                        <li class="menu2" onmouseover="menu(this,'about')">About</li>
                        <li class="menu2" onmouseover="menu(this,'gallery')">Gallery</li>
                        <li class="menu2" onmouseover="menu(this,'oncampus')">On&nbsp;Campus<img src="../img/forward.svg" style="float:right;height:15px;margin-top:1.5vw" alt=">"></li>
                        <li class="menu2" onmouseover="menu(this,'departments')">Departments<img src="../img/forward.svg" style="float:right;height:15px;margin-top:1.5vw" alt=">"></li>
                        <li class="menu2" onmouseover="menu(this,'administration')">Administration</li>
                        <li class="menu2" onmouseover="menu(this,'teqip')">TEQIP</li>
                    </ul>
                </div>
                <div id="menu2-cover"> <button onclick="goBack()"> <img src="../img/go-back.svg" alt="go-back" > </button> </div>
                <div class="col-lg-3 col-6" id="menu-col-3">
                    <p style="font-size:18px;line-height:1.5;">Pondicherry Engineering College (PEC) is an Institution sponsored by the Union Territory of Pondicherry, India. The College was started in 1984 under the VII Five Year Plan. It is an autonomous Institution for the purposes of administration,
                        staff recruitment and College development and is managed by a Board of Governors.</p>
                </div>
                <div class="col-lg-3 col-6" id="menu-col-4">
                    <img class="aboutimg" src="../img/about.jpg" alt="college-img" style="width:18vw">
                </div>
            </div>
        </div>
    </div>
    <main>
        <!--ENTER MAIN CONTENT HERE-->
                
        <div class="faculty-header">
            <h2>Articles</h2>
    </div>
    <div class="container-fluid tb1 card-container">
        <div class="row" style="height:400px">
        <?php
                  include("db_con.php");
                  $query="SELECT * FROM `article` WHERE dep='cse' LIMIT 20 ";

if($result=mysqli_query($db_con,$query))
{ 
    
    while($arr=mysqli_fetch_assoc($result))
    {

        $id=$arr['id'];
        $summary=$arr['name'];
        $dep=$arr['dep'];
        $img=$arr['img'];
        echo'
        <a href="articles_page.php?id='.$id.'">
            <div class="col-sm-6 col-md-4 col-lg-3 tb3 card-parent">
                <div class="card">
                    <div class="thumbnail">
                        <img src="../cms/articles/'.$img.'" alt="image" style="object-fit: cover;
                        width: 200px;
                        height: 200px;" >
                    </div>
                    <div class="caption">
                        <h4>'.$summary.'</h4>
                    </div>
                    <div class="card-header">
                        <p>'.$dep.'</p>
                    </div>

                </div>
            </div>  </a>';
           
    }}?>
            
           

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
                            <button class="contact" onclick="window.location.href='../contact-us/'">CONTACT&nbsp;US</button>
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
                                        <a href="http://pec.edu" target="blank">
                                            <p class="link-footer-2">Old&nbsp;Site</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a href="http://cms.pec.edu/test/cells/iedc">
                                            <p class="link-footer-2">IEDC</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a href="https://www.nirfindia.org/2019/EngineeringRanking.html">
                                            <p class="link-footer-2">NIRF</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a href="http://cms.pec.edu/test/sitemap">
                                            <p class="link-footer-2">Sitemap</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a href="http://cms.pec.edu/test/about-page">
                                            <p class="link-footer-2">AboutSite</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a href="http://cms.pec.edu/test/disclaimer">
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
