<?php
include('../cms\DB_TRANS/db_con.php');

if(isset($_GET['cat']))
{
    $cat=$_GET['cat'];
    $count=$_GET['count'];
  
$final=$count+12;
$prev=$count-12;
$query="SELECT * FROM `gallery` WHERE department='$cat' LIMIT $count,$final ";
}
else
{

$count=0;
$final=$count+12;
$prev=$count-12;
$query="SELECT * FROM `gallery` LIMIT  $count,$final ";
}
if($res=mysqli_query($db_con,$query))
{
 
    $row=mysqli_num_rows($res);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>  <!-- ENTER PAGE TITLE -->
    <link rel="icon" href="../img/icon.png">
    <link rel="manifest" href="../manifest.json" />
    <link rel="apple-touch-icon" href="../img/icons/150px.png" />
    <link rel="apple-touch-icon" href="../img/icons/300px.png" />
    <meta name="apple-mobile-web-app-status-bar" content="#2e8690" />
    <meta name="theme-color" content="#2e8690" />
    <meta name="Description" content="Pondicherry Engineering College (PEC) is an Autonomous Institution sponsored by the Union Territory of Pondicherry, India. The College was started in 1984 under the VII Five Year Plan.">

    <link rel="stylesheet" href="../css/new-material.css" class="styleload" media="all" disabled>
    <link rel="stylesheet" href="../css/bootstrap4.css" class="styleload" media="all" disabled>
    <link rel="stylesheet" href="../css/header.css" class="styleload" media="all" disabled>
    <link rel="stylesheet" href="../css/footer.css" class="styleload" media="all" disabled>
    <link rel="stylesheet" href="../css/menu.css" class="styleload" media="all" disabled>
    <link rel="stylesheet" href="../css/main.css" class="styleload" media="all" disabled>

    <link rel='dns-prefetch' href='https://maps.googleapis.com'>
    <link rel='dns-prefetch' href='https://fonts.googleapis.com/' >
    <link rel='dns-prefetch' href="https://khms1.googleapis.com/">

    <script defer src="../js/jquery.min.js"></script>
    <script defer src="../js/materialize.min.js"></script>
    <script defer src="../js/bootstrap4.js"></script>
    <script defer src="../js/menu.js"></script>
    <script async src="../js/pace.js"></script>


    

    <style>
    .pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
        main{
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
        ul {
            list-style-type: none;
        }
        
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
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
            .tb{
                margin: 15px 10px;
                 }
    
                 .figure-caption{
                    padding: 20px 0px;
                    text-align: center;
                 }
                 .figure-caption h3 {
                    font-size: 16px;
                    font-weight: bold;
                    margin-top: 0;
                    color:#2e8690;
                }
                .figure-caption p {
                    font-size: 14px;
                    color: #707070;
                    margin: 0;
                    text-align: left;
                }
                .img-fluid{
                    border: 5px solid transparent;
                }
                .img-fluid:hover{
                    cursor: pointer;
                    border: 5px solid #2e8690;
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
    <header>
        <div class="container-dim container-fluid">
            <div class="row" id="row-top-margin">
                <div class="logo-container">
                    <a href="http://www.pec.edu">
                    <img class="logo" src="../img/logo.png"   alt="logo_image" width="100">
                    </a>
                </div>
                <div class="pec-name" id="dept-name">
                    <h4 class="dept-name-text">Pondicherry Engineering College</h4>
                    <h4 class="dept-of"><i>An Autonomus Institute under Govt. of Puducherry</i></h4>
                </div>
                <div class="search-box" style="position: absolute;top:0px;right: 80px;padding-top: 0px;">
                    <form>
                        <input class="search-bar" id="focusChk" type="text" placeholder="Search" style="top: 50px;">
                        <img src="../img/search.svg" style="margin:33px 10px;" alt="search">
                    </form>
                </div>
                <a data-toggle="collapse" href="#collapseMenu">
                    <div class="container menu-icon" id="overlay" onclick="change()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </a>
                <div class="mob-btn">
                    <img alt="search" src="../img/search.svg"data-toggle="collapse" href="#collapseSearch" onclick="window.scrollTo(0,0);focusS()" style="margin-bottom: 10px" alt="search">
                    <div data-toggle="collapse" href="#collapseMenu" class="menu-icon" onclick="window.scrollTo(0,0);change()">
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
        <crumbs id="pec-crumb" class="pec-crumb"></crumbs>
        
        <div class="watermark">

        </div> 
        <!--ENTER MAIN CONTENT HERE-->
                <!-- tag/links -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exid"></h5>
        <div type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
        </div>
    <div class="modal-body">
      <img src="" alt="" id="exp-img" style="width:100%">
    </div>
    </div>
  </div>
</div>


                <br>
                    <div class="footer-2">
                        <div class="container-fluid tb1" >
                            <div class="nested-footer-2 " style="max-width:90%;">
                                <div class="row row-footer-21">
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="all" href="gallery.php?count=0">
                                            <p class="link-footer-2">All</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="campus" href="gallery.php?cat=campus&count=0">
                                            <p class="link-footer-2">Campus</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="others" href="gallery.php?cat=others&count=0">
                                            <p class="link-footer-2">Others</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="cse" href="gallery.php?cat=cse&count=0">
                                            <p class="link-footer-2">CSE</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="eee" href="gallery.php?cat=eeecount=0">
                                            <p class="link-footer-2">EEE</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="ece" href="gallery.php?cat=ece&count=0">
                                            <p class="link-footer-2">ECE</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="chem" href="gallery.php?cat=che&count=0">
                                            <p class="link-footer-2">Chem</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="it" href="gallery.php?cat=itcount=0">
                                            <p class="link-footer-2">IT</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="eie" href="gallery.php?cat=eie&count=0">
                                            <p class="link-footer-2">EIE</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="civil" href="gallery.php?cat=ce&count=0">
                                            <p class="link-footer-2">Civil</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="mech" href="gallery.php?cat=me&count=0">
                                            <p class="link-footer-2">Mech</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-1 text-center col-footer-2">
                                        <a alt="hss" href="gallery.php?cat=hs&count=0">
                                            <p class="link-footer-2">HSS & Sc</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- tag/links ends -->
        <div class="container">
            <div class="row">
               <?php 
               while($result=mysqli_fetch_assoc($res))
               {
                   
                   $imgname=$result['name'];
                   $tags=$result['tags'];
                   $desc=$result['description'];
                echo'
                <div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <div class="tb">   
                        <img class="img-fluid" onclick="expImg(\'../cms/galleryimages/'.$imgname.'\')" src="../cms/galleryimages/'.$imgname.'" alt="img1" srcset="">
                             <div class="figure-caption">
                            <h3>'.$tags.'</h3>
                            <p class="">'.$desc.'</p>
                        </div>
                    </div>
                </div>';  
            }
                ?>
            </div> 
            
            <div class="pagination">
<?php
if($count!=0)
  echo'<a href="gallery.php?cat='.$cat.'&count='.$prev.'">PREVIOUS</a>';
if($row>24)
  echo'<a href="gallery.php?cat='.$cat.'&count='.$final.'">NEXT</a>';
  ?>
 
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
                                <iframe alt="map" src="https://maps.google.com/maps?q=pondicherry%20engineering%20college&t=&z=13&ie=UTF8&iwloc=&output=embed" width="400" height="280" frameborder="0" style="border:0"></iframe>
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
                                <a alt="fb" rel="noreferrer" href="https://www.facebook.com/PEC.Pondicherry" target="_blank">
                                    <img src="../img/facebook-square-brands.svg" href=" " class="icons" height="36" width="36" alt=""></a>
                                <a alt="linkin" rel="noreferrer" href="https://www.linkedin.com/school/pondicherry-engineering-college/" target="_blank">
                                    <img src="../img/linkedin-brands.svg" class="icons" height="36" width="36" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm-md col-lg-1 col-xl-2 col-footer-1"></div>
                        <div class="col-sm-6 col-md-2 col-lg-1 col-lg-2 col-xl-2 col-footer-1 padding_remove">
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
                                        <a alt="pec-old" href="http://pec.edu/" target="blank">
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
                                        <a alt="site" href="../home/sitemap.html">
                                            <p class="link-footer-2">Sitemap</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a alt="about" href="../home/about-us.html">
                                            <p class="link-footer-2">About Site</p>
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 text-center col-footer-2">
                                        <a alt="disclaimer" href="../home/disclaimer.html">
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
        let link = window.location.href;
        link = link.replace('http://','');
        link = link.replace('https://','');
        let crumbs = link.split('/');
        let a = 'http:/';
        crumbs.forEach((crumb,i)=>{
            a+='/'+crumb;
            if(i<crumbs.length-1)
                document.getElementById('pec-crumb').innerHTML+='<a class="pec-crumb-item" href="'+a+'">'+ crumb + '</a>&nbsp;/&nbsp;';
            else
                document.getElementById('pec-crumb').innerHTML+=crumbs[crumbs.length-1].split('.')[0] ;
            });


            function expImg(a){
                // console.log(a);
                document.getElementById('exp-img').src=a;
            }
    </script>
</body>
</html>