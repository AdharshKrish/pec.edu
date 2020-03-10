<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overview</title> <!-- ENTER PAGE TITLE -->
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
        .img-caption{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }
        .notes{
            font-size: 16px;
            text-align: justify;
        }
        @media (min-width: 920px) {
            .over{
                max-width: 90%;
            }
        }
        .row_1{
            padding-bottom:15px ;
        }
        .row2{
            margin-top: 15px;
            margin-bottom: 15px;
            
        }
        .hr1{
            border: none;
            border-bottom: 4px solid #0ea2be;
            /* padding-top:  3%; */
            margin-bottom: 3%;
        }

        .details{
            background-color: #f8f8f8;
            padding: 20px;
            margin-bottom:  20px ;
            font-family: 'Times New Roman', Times, serif;
            text-align: left;
            font-size: 17px;
            /* display: flex; */
            /* height: auto; */
            overflow-x: auto;
        }
        p{
            padding: 2px;
        }
        
        .vision, .mission{
            padding: 20px 25px;
         
            margin: 0 25px;
            margin-bottom: 25px;
            /* border: 1px solid rebeccapurple; */
            font-size: 16px;
        }

        .vision h3, .mission h3{
            font-family: 'Oswald',sans-serif;
            font-size: 5vh;
            color: #0ea2be;
        }

        .mission{
            background-color: #f8f8f8;
        }
        .t1{
            overflow-x: scroll;
        }

        @media (max-width: 500px){
            .vision, .mission{
                padding: 10px;
                margin: 2px;
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
            <h2>Overview</h2>
    </div>
        <div class="container-fluid over">
            <div class="row row_1">
                <div class="col-md-2 photo">
                    <div class="thumbnail image-padding">
                        <img src="img/csehod.jpg" alt="faculty-image">
                    </div>
                    <div class="img-caption">
                        <h4>Dr. R. Manoharan</h4>
                        <p>M.Tech, Ph.D.</p>
                    </div>
                </div>
                <div class="col-md-5 notes" >
                    The Department aims at providing high quality education to students through the latest in computer technology 
                    to enable them to undertake careers in the Information Technology field, pursue advanced studies abroad and to
                    take up Entrepreneurship.The Department offers B.Tech. (CSE), M.Tech. (Distributed Computing),
                    M.Tech. (Information Security), MCA and Ph.D. programmes. In order to maintain the standard of education, the Department
                    constantly upgrades the academic syllabi so as to keep the students well trained to deal with the changing trends 
                    in the field of Computer Science and Engineering. The Department places emphasis on Distributed and Parallel Computing, 
                    Information Security, Internet of Things,                 Embedded Systems, Natural Language Processing Technologies,   
                </div>
                <div class="col-md-5 notes" >
                    Artificial Intelligence, Machine Learning, Data Mining and Data Analytics and several other recent topics. 
                    The curriculum of all courses are designed in such a way so as to enable students to carry out major and minor 
                    projects in leading industries/institutions, besides their regular classes and seminars.The students of the Department
                    have been placed in major companies like TCS, HCL, Broadcom, CTS, Infosys, SAP Labs, SAPIENT, Aspire Systems, 
                    Wipro Systems, ARICENT, Mbit wireless technologies, L&T Infotech etc. 
                    The Department regularly organizes a series of lectures from academicians and professionals of the highest repute,
                    which lays importance on the latest innovative technologies in the field of Computer Science and Engineering.
                </div>
            </div>
            <hr class="hr1">
            <div class="row row2">
                <div class="col-sm-6 col-md-5">
                    <div class="details ">
                        <div class="container1">
                            <p>The department of Computer Science and Engineering had its inception in Pondicherry Engineering College 
                            that dates back to <b>1985</b>. With its vision and mission, the department
                            strives to impart quality education to its pupils, thereby enabling them to stand out as individuals 
                            competent in the domain. </p>
                            <p>The department of Computer Science and Engineering offers a wide range of courses. 
                                It includes a B.Tech course, M.tech is two streams, MCA and also Ph.D courses.</p>
                            <table border="1">
                                <tr>
                                    <td style="text-align:center;">S.No.</td>
                                    <td style="text-align:center;">Course</td>
                                    <td style="text-align:center;">Intake</td>

                                </tr>
                                <tr>
                                    <td style="text-align:center;">1</td>
                                    <td style="text-align: center;">Bachelor of Technology</td>
                                    <td style="text-align:center">72</td>
                                    
                                </tr>
                                <tr>
                                    <td style="text-align:center;">2</td>
                                    <td style="text-align:center">Master of Technology(Distributed Computing System)</td>
                                    <td style="text-align:center;">25</td>
                                    
                                </tr>
                                <tr>
                                    <td style="text-align:center;">3</td>
                                    <td style="text-align:center;">Master of Technology(Information Security)</td>
                                    <td style="text-align:center;">24</td>
                                    
                                </tr>
                                <tr>
                                    <td style="text-align:center;">4</td>
                                    <td style="text-align:center;">Master of Computer Application</td>
                                    <td style="text-align: center;">45</td>
                                    
                                </tr>
                                <tr>
                                    <td style="text-align:center;">5</td>
                                    <td style="text-align:center">Doctor of Philosophy</td>
                                    <td style="text-align: center;">A maximum of 8 candidates for each research supervisor</td>
                                    
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-6 col-md-5" >
                    <div class="thumbnail" >
                        <img src="img/dept.jpg" alt="department-image" >
                    </div>
                </div>
                <div class=" col-sm-2 col-md-2">
                    <h3>Gallery &rightarrow; </h3>
                </div>
            </div>

            <hr class="hr1">

            <div class="row row3">
                <div class="col-md-6" >
                    <div class="vision">
                        <h3>VISION</h3>
                        <ul>
                            <li><p>To explore innovative approaches to enhance and expand learning opportunities, through the integration of technology.</p></li>
                            <li><p>To build a strong research and teaching environment that responds to the real-time challenges of the industry.</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="mission">
                        <h3>MISSION</h3>
                        <ul>
                            <li><p>To inculcate the blend of competence, aptitude of knowledge and investigate flair through 
                                devising an ambient environment for sustainable learning.</p></li>
                            <li><p>To transform attitude, values, priorities by changing mindset 
                                and instill positive outlook for socially conscious intellectual development.</p></li>
                            <li><p>Incubate, apply and spread innovative ideas to evolve the department as a Centre of excellence in thrust areas.</p></li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="hr1">

            <div class="row row3">
                <div class="vision">
                    <center><h3 >FACILITIES</h3></center> <br><p></p>
                    <li>The department of Computer Science and Engineering houses
                        state-of-the-art facilities enabling holistic growth of research
                        activities and academic excellence. The department has an
                        exclusive Library for the students. All the computers in various
                        Laboratories in the Department are well connected to the Internet. Students can use the Internet facility to access the courses available through QEEE and NPTEL.
                    </li>
                    <br><p></p>
                    <li> All the laboratories in the department are very well equipped with facilities required to conduct experiments in and beyond the curriculum. The following table enlists the detailed description and equipment list of the laboratories in department.
                    </li>
                </div>
            </div>

        <div class="row row3 t1">
            <table class="table table-stripped table-borded table-hover">
                <tr>
                    <th>S.No.</th>
                    <th>NAme of the laboratory</th>
                    <th>Specialized Equipment Name</th>
                    <th>Equipment details</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Distributed Computing Lab</td>
                    <td>Desktop Computers (37 Nos) and <br><p></p>UPS (1 No.)</td>
                    <td>Intel Core i5 second generation 2400 @ 3.1Ghz 6 MB L3 cache
                        500 GB 7200 rpm Serial ATA HDD, 2 GB 1066 MHz DDR3 RAM, 18.5
                        inch Digital Color <br>><p></p>Monitor, 10/100/ 1000 Network Port.
                        <br><p></p>10 KVA UPS with Exide SMF Batteries (one Hour Backup)
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Wireless LAN Lab</td>
                    <td>Desktop Computers (19 +18)</td>
                    <td>Intel i5 , RAM - 2GB DDR3 1333, Hard Disk 320 GB 7200 RPM SATA /
                        300 8.5 HDD SATA DVD writer 22x PS/2 key board block 3 button
                        scroll optical USB mouse HCL led wide 18.5 Monitor with Speaker.
                        <br><p></p>
                        Intel Core i5 second generation 2400 @ 3.1Ghz 6MB L3 cache 500 GB
                        7200 rpm Serial ATA HDD, 2 GB 1066 MHz DDR3 RAM, 18.5 inch Digital
                        Color.
                        <br><p></p>
                        Monitor, 10/100/ 1000 Network Port</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Problem Solving Lab</td>
                    <td>Desktop Computers (10+15+5) =30 Nos. UPS – 1 No.</td>
                    <td>Desktop Computers: INFINITE LA390 PRO Intel Core i5, 2400@3.10 GHz 6MB, Intel H77 Chipset, 2GB DDR3, 500 GB Hard Disk, Accessories, 10/100/1000 On-board NIC
                        <br><p></p>
                        Desktop Computers - Intel® Core™ i5-4570 Processor @ 3.2 GHz Processor, Intel chipset H81,4 GB DDR3 RAM , 500 GB HDD, 47 cm (18.5 inch) LED Digital Colour Monitor, 16X DVD writer, 1000 Mbps on board integrated
                        network port Windows 8.1 Professional Licensed
                        <br><p></p>
                        Desktop Computers - Intel® Core™ i3-4160 Processor @ 3.6 GHz Processor, 4 GB DDR3 RAM , 500 GB HDD, 47 cm (18.5 inch) LED Digital Color Monitor, 16X DVD writer, 1000 Mbps on board integrated network port Windows 8.1 Professional Licensed Preloaded
                        <br><p></p>
                        10 KVA UPS with Exide SMF Batteries (one Hour Backup)
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Hardware and Network Trouble Shooting Lab</td>
                    <td>Desktop Computers (25 Nos.)<br>UPS (1 No.)</td>
                    <td>Desktop Computers - Intel® Core™ i5-4570 Processor @ 3.2 GHz Processor, Intel chipset H81,4 GB DDR3 RAM , 500 GB HDD, 47 cm (18.5 inch) LED Digital Colour Monitor, 16X DVD writer, 1000 Mbps on board integrated network port Windows 8.1 Professional Licensed Preloaded
                        <br><p></p>10 KVA UPS with Exide SMF Batteries (one Hour Backup)
                    </td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Information Security Lab</td>
                    <td>Desktop Computers (25 Nos.) <br><p></p>Dell Power Edge R630 Server – 1 No. <br><p></p>UPS (1 No.)</td>
                    <td>HP 406 Series core I5- 4570 DSTP HP Intel core I5-4th Gen Processor, 4GB DDR3 RAM, 500 GB HDD, DVDRW HP18.5” LED Monitor HP Usb Keyboard & Mouse Rest
                        <br><p></p>
                        Intel Xeon processor E5 2600 v4 product family. Operating System Options: Microsoft Windows Server 2008 R2. Chipset: Intel C610 series chipset. Memory: Up to 1.5TB (24 DIMM slots): 4GB/8GB/16GB/32GB/64GB DDR4 up to 2400MT/s
                        <br>
                        5KVA UPS with 120 minutes backup with 3 hrs.
                        <br><p></p>
                        The following open source security tools are available: Zed Attack Proxy (ZAP), Nmap,   Wireshark, Whois,    Burp Suite,       Network Miner, Nessus,   Wifi Scanner
                    </td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Embedded Systems Lab</td>
                    <td>Desktop computer (25 Nos)<br><p></p>
                        ARM development boards (30 Nos)<br><p></p>
                        Interface boards (30)
                    </td>
                    <td>HCL Desktop Computers - Intel i5 , RAM - 2GB <br><p></p>
                        DDR3 1333, Hard Disk 320 GB 7200 RPM SATA / 300 8.5 HDD SATA DVD writer 22x PS/2 key board block 3 button scroll optical USB mouse HCL led wide 18.5 Monitor with speaker Red Hat V5.5 Media
                        <br>(10 Nos.)	<br><p></p>
                        HP Desktop Computers - Intel Core i5 4570 @ 3.2 <br><p></p>
                        GHz, or Higher, 4 GB DDR3-1600 RAM, 500 GB 7200 RPM SATA Hard Disk or higher, 47cm (18.5 inch) LED Digital Colour monitor, 8X DVD RW or higher, Integrated Intel PRO 10/100/1000 Network (15 Nos.) <br><p></p>
                        ARM 7 Trainer Boards, ARM Cortex Trainer Boards <br><p></p>
                        Intel Galileo Development Boards, JLINK Debugger <br> <p></p>
                        Interface kits such as, Matrix Graphic LCD Interface, Real, Time Clock Interface, I2C Interface Card, Temperature Transducer Measurement
                    </td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Microprocessors and Microcontrollers Lab</td>
                    <td>8085 Microprocessor trainer kits -25 Nos. <br><p></p>8086 Microprocessor Microprocessor trainer kits – 6 Nos.
                        8051Microcontroller trainer kits – 7 Nos <br><p></p>
                        Interface kits like Stepper motors, Traffic controllers, Elevators,  Music synthesizers,<br> <p></p>
                        Desktop computers.
                    </td>
                    <td>8085 Microprocessor trainer kits, 8086  Microprocessor trainer kits, 8051Microcontroller trainer kits, Interface kits like Stepper motors, Traffic controllers, Elevators, Music synthesizers, Desktop computers. </td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Application lab</td>
                    <td>Desktop Computers – 15 Nos. <br><p></p>Desktop Computers – 18 Nos.</td>
                    <td>Desktop Computers - Intel core i5 RAM-2GB DDR3, 320 GB, DVD writer Lx Infinite Pro Bl1280 5W Rms H1 Media Speakers-Black, HCL 3button W/Scroll <br><p></p>
                        Optical Mouse- HCL 101+14 button Int Keyboard Blk Vista Kit Free Dos Preloaded <br><p></p>
                        LX Infiniti Pro BL 1280, Intel G31 Chipset, Intel Core 2 Duo E7200 2.53GHz 1066MHz 3MB cache, 320 GB HDD, keyboard, mouse, DOS Preloaded <br><p></p>
                        47cm HCL Wide LCD W/Speaker TCO Blk
                    </td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Research Lab</td>
                    <td>Desktop computer core i5 – 6 Nos. <br><p></p>
                        Desktop computer core i3 – 5 Nos. <br><p></p>
                        Desktop computer core i3 – 4 Nos. <br><p></p>
                        Desktop computer Intel Core 2 Duo – 5 Nos.
                    </td>
                    <td>Intel Core i5-4570 Processor @ 3.2 Ghz. Intel Chipset OEM Motherboard, 4GB DDR3 RAM @ 1600 Mhz,500 GB 7250rpm Serial ATA HDD ,47 CM 18.5 Inch Led Digital Colour Monitor TCO05 Certifird,104 Keys Keyboard Optical Mouse With Us13 Interface,6 Usb Ports,Audio Parts,16*DVD Writer.8.1 Professional Windows Preloaded
                        <br> <p></p>
                        Intel Core i3 Processor   3 Ghz  OS Window 8.1 Preloaded Memory 2.4 Gbsingle Channel Ddr3 Display Monitor,19.5"Keyboard, Mouse
                        <br> <p></p>
                        Intel Core i3- 4thGen Desktop. H81 Intel Chipset, Mother Board, 4GB DDR3 RAM, 500GB HDD, DVD, RW HP 18.5” LED Monitor HP USB Keyboard HP USB mouse
                        <br> <p></p>
                        Intel Core 2 Duo CPU E 7500 @ 2.93GHz 2.94GHz RAM 2.00GB HID- complaint mouse standard PS/2 Keyboard HCMEL WBTII monitor (HCL)
                    </td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Srinivasa Ramanujam Computer Centre</td>
                    <td>Desktop Computers-30 Nos. <br> <p></p> Desktop Computers-14 Nos.</td>
                    <td>Desktop Computers - Intel Core 2 Duro  E 7300 2.666 GHz 3MB Cache 1066 Mhz Fsb DDR2 RAM 667 Mhz  Intel G 31 Chipset With Mother Board  Optical Mouse 17" TFT Monitor , OS  Free Linux /Doss, Microsoft, Novel, HCL Systems
                        <br> <p></p>
                        Desktop Computers - Intel® Core™ i5-4570 Processor @ 3.2 GHz Processor, Intel chipset H81,4 GB DDR3 RAM , 500 GB HDD, 47 cm (18.5 inch) LED Digital Colour Monitor, 16X  DVD writer, 1000  Mbps  on board integrated network port  Windows 8.1 Professional Licensed Preloaded  (30 Nos)
                    </td>
                </tr>
            </table>
        </div>

        <hr class="hr1">

        <div class="row row3">
            <div class="vision">
                <center><h3 >STUDENTS’ COUNCIL ACTIVITIES</h3></center> <br><p></p>
                <li>The department conducts various academic activities such as symposiums, guest lectures, workshops, conferences and seminars through Students’ Council called as “HUB” for developing technical and interpersonal skills.</li> <br><p></p>
                <li>The council conducts technical symposium called “ICON” once in 2 years. The technical symposium consists of various events like paper presentation, quiz, debugging, games and technical shows. </li> <br><p></p>
                <li>Every year the students’ council releases technical magazine called “Cybyrus” through which the technical potentials of the students are exhibited.</li>
            </div>
        </div>

        <hr class="hr1">

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
