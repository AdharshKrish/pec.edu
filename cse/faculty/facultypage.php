<?php
$path= $_SERVER['DOCUMENT_ROOT'];
require_once('../db_con.php');
$email=$_GET['email'];

$query="SELECT * FROM login where email='".$email."'";
$result=mysqli_query($db_con,$query);
if($result)
{ 
    $arr=mysqli_fetch_assoc($result);
    $name=$arr['username'];
    $email=$arr['email'];
    $dept=$arr['department'];
   $id=$arr['id'];
$query="SELECT * FROM basic_faculty_info where id=".$id;
$result=mysqli_query($db_con,$query);
if($result)
{ 
       $exist=1;
       $arr=mysqli_fetch_assoc($result);
       $post_tier=$arr['post_tier'];
       $number=$arr['phno'];
       $qualification=$arr['qualification'];
       $specilization=$arr['specialization'];
       $contact=$arr['phno'];
       $ext=$arr['extension'];
       $dob=$arr['dob'];
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
       $query="SELECT * FROM uploading where id=".$id;      
       $result=mysqli_query($db_con,$query);
       $arr=mysqli_fetch_assoc($result); 
       $file_path=$arr['file_name'];
}
else {
    
    echo "error1";
}  
      
   }
   else {
       echo "error2";
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FacultyPage</title>
    <link rel="stylesheet" href="facultyPage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap4.css">

    <style>
        ._testBorder1{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div class="container root-container" >
        <div class="row ">
            <div class="col-sm-5 col-lg-4">
                <div class="row" style="min-width:120px;">
                    <div class="col-5 ">
                        <div class="thumbnail">
                            <div class=""><?php  echo "<img src='../../cms/profilepic/". $file_path ."' style='resize: both;
                             width:150px;
                             height:200px;' alt='error'>";?></div>
                        </div>
                    </div>
                    <div class="col-7 " style="display: flex; align-items: center;">
                        <div class="caption">
                            <h4 style="font-size: 20px;"><?php echo $name?></h4>
                            <p><i><?php echo $post_tier?></i></p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <label class="label"> Alma mater </label>
                        <?php echo $alma?>
                      <!--  <ul>
                            <li>Ph.D. (IIT Madras), 1998;</li>
                            <li>M.Tech. (PEC, Pondicherry), 1983;</li>
                            <li>B.Tech. (PEC, Pondicherry),1980;</li>
                            <li>High School (Petit Seminaire, Pondicherry), 1978</li>
                        </ul>-->
                    </div>
                </div>
                <div class="row row_specialization">
                    <label class="label"> Specialization </label>
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
                            <hr>
                        </div>
                        <div class="col-sm-6" style="min-width: 240px;">   
                            <h6 style="color: #707070;">Find me on</h6>
                            <ul>
                                <li><a href="https://linkedin.com/<?php echo $linkedin?>"><img src="linkedin-brands.svg" alt="linkedin-brands" height="24" width="24"> <?php echo $linkedin?></a><br></li>
                                <li><a href="https://facebook.com/<?php echo $twitter?>"><img src="facebook-square-brands.svg" alt="facebook-square-brands" height="24" width="24"> <?php echo $twitter?></a><br></li>
                                <li><a href="https://twitter.com/<?php echo $facebook?>"><img src="twitter-brands.svg" alt="twitter-brands" height="24" width="24"><?php echo $facebook?> </a><br></li>
                                <li><a href="https://<?php echo $contact?>"><img src="globe-solid.svg" alt="globe-solid" height="24" width="24"><?php echo $contact?></a><br></li>
                            </ul>   
                        </div>
                    </div>
                    <br>
                    <div class="row row_dob">
                        <!-- <div class="container1"> -->
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
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>  
        
        <div class="row" style="text-align: center;">
            
            <div class="offset-md-5 "></div>
            <div class="col-md-1 d-none d-md-block"> <!--hide on screen smaller than md-->
                <br>
                <img src="angle-down-solid.svg" alt="angle-down-solid" height="32" width="32">
            </div>
            <div class="col-md-3 col-6">
                <!-- two links -->
                <a href="#">Print Profile</a> 
            </div>
            <div class="col-md-3 col-6">
                <a href="#">Print Card</a>
            </div>
        </div>
        <hr>
        <!-- research, projects and students -->
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
                            Current PhD students - <br>
                           <!-- <span class="student_name">Arun Kumar</span> <br>
                            <span class="student_name">Ravindranath Tagore</span> <br>
                            Degree students - <br>
                            2nd Year B.Tech. CSE Batch of 2020 (CS104-Computer Networks)-->
                            <p><?php echo $student?></p>
                        </p>
                </div>
            </div>
            <div class="col-md-7 col-sm-8" style="overflow:auto;">
                <div>
                    <label class="label"> Projects and Activities </label>
                    
                    <!--<ol>
                        <li> Worked on Programmable data planes for routers </li>
                        <li> Awarded the Hopkins Award in recognition of contributions made to the Mobile and Sensor Computing domain. </li>
                        <li> The Institute is committed to generating, disseminating. </li>
                        <li> Preserving knowledge, and to working with others to bring this knowledge to bear on the world’s great challenges. </li>
                    </ol>-->
                    <?php echo$project?>
                    
                    
                    </div>
            </div>
        </div>
            
        <div class="watermark">
            <img  src="PEC logo watermark.jpg" alt="pec logo watermark" height="300" width="200" >
        </div>
        <!-- publications, books, journerls, conferences -->
        <div class="row">
            <div class="container">

  
                <label class="label"> Publications </label> <br>
                <article>
                    <h3 style="color: #ebdd22;">Books</h3>
                    <hr>
                   <!-- <ul>
                        <li>Basic Electrical engineering - R.Anandanatarajan and P. Ramesh  Babu , Scitech Publications, 2009, 
                            978-81-8371-189-0</li>
                        <li>Control Systems Engineering - R.Anandanatarajan and P. Ramesh  Babu, SciTech Publications, 2005, 
                            978-81-8371-360-3</li>
                    </ul>-->
                    <?php echo $books?>
                </article>
                <article>
                    <h3 style="color: #fa983a;">Journals</h3>
                    <hr>
                   <!-- <ul>
                        <li>
                            S. Anbumalar, P. Ramesh Babu, R.Anandanatarajan, ”Overlapped Chromotograms separation Using Nonnegative 
                            matrix factorization” International journal of computer and Electrical Engineering, Vol.3, No.5, Oct 2011.
                        </li>
                        <li> 
                            S. Anbumalar, P. Ramesh Babu, R.Anandanatarajan,” An Algorithm to resolve Embedded Chromotograms in 
                            Chemical Analysis, International journal of computing Vol.1, No.4, Oct 2011.
                        </li>
                    </ul>-->
                    <?php echo $journals?>
                   
                </article>
                <article>
                    <h3 style="color: #b71540;">Conferences</h3>
                    <hr>
                    <!--<ul>
                        <li>
                            S. Anbumalar, P. Ramesh Babu, R.Anandanatarajan, ”Overlapped Chromotograms separation Using Nonnegative 
                            matrix factorization” International journal of computer and Electrical Engineering, Vol.3, No.5, Oct 2011.
                        </li>
                        <li> 
                            S. Anbumalar, P. Ramesh Babu, R.Anandanatarajan,” An Algorithm to resolve Embedded Chromotograms in 
                            Chemical Analysis, International journal of computing Vol.1, No.4, Oct 2011.
                        </li>
                    </ul>-->
                    <?php echo $conferences?>
                </article>
            </div>
        </div>
    </div>
    <br>
    <br>
   <br>
    <br>
    <br> <br>

</body>
</html>
<?php 
require_once('../footer/footer.php');?>