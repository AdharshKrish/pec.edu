<?php
require_once('../DB_TRANS/db_con.php');
if(isset($_SESSION['loggedin_status']))
{
$logged=$_SESSION['loggedin_status'];

if($logged=901)
{
   
   $id= $_SESSION['id'];
   $query="SELECT * FROM basic_faculty_info where id=".$id;

   $result=mysqli_query($db_con,$query);
  
   if($result)
   {
    $error=0;
    if(isset($_GET['message']))
    {
    $message=$_GET['message'];
    $error=1;
    }

   
       $exist=1;
       $arr=mysqli_fetch_assoc($result);
       $post_tier=$arr['post_tier'];
       $number=$arr['phno'];
       $qualification=$arr['qualification'];
       $specilization=$arr['specialization'];
       $contact=$arr['phno'];
       $ext=$arr['extension'];
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
  
      $exist=0;
      $query="SELECT * FROM login where id=".$id;      
      $result=mysqli_query($db_con,$query);
      $arr=mysqli_fetch_assoc($result);
      $name=$arr['username'];
      $email=$arr['email'];
      $dept=$arr['department'];
      $desg=$arr['desg'];
      echo "ok";
    

     
  }
}
else {
    echo"error2";
   // header("Location: http://localhost/pec/error/error404.html");
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
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/master.css">
<link rel="stylesheet" href="../css/header.css">
<script src="../js/ckeditor/ckeditor.js"></script>

</head>

<body>
<script src="../js/ckeditor/ckeditor.js"></script>

</head>

<body>
    <header>
        <h1>pec.edu <span>CMS_</span> </h1>
    </header>

    <main>
        <div class="container">

        
            <div class="row ">

                <div class="col-md-2 "> <!--verticle li-->
                    <div class="container">
                        <ul class="nav nav-tab">
                            <li class="active" > <a href="./faculty_dashborad.php" style="color: black;">PROFILE </a></li>
                            <li> <a href="./addmemo.php" id=""> ADD MEMO </a></li>
                            <li><a href="signout.php" style="color: #2E8690">SIGNOUT</a></li>
                        <li><a href="../../files/cms-helpbook.docx" target="blank" style="color: #0000EE">HELPBOOK</a></li>
                        </ul>
                    </div>
                </div>
             
                <div class="col-md-2 col-md-push-8 data" style="overflow-x: auto;">
                    <div class="container">
                        <h3>Name</h3>
                        <p><?php echo $name?></p>
                        <h3>Email</h3>
                        <p><?php echo $email?></p>
                        <h3>Department</h3>
                        <p><?php echo $dept?></p>
                       
                    </div>
                </div>


                <div class="col-md-8 col-md-pull-2">
                <?php
                if($error==1)
                 echo "  <div class='alert alert-success'>
                 <strong>STATUS: </strong> ".$message."
               </div>";
                ?>
                    <div class="panel panel-body">
                    
                        <div class="row "> <!--DETAILS-->
                            <div class="col-sm-4 "> <!--FACUTLY IMAGE-->




                             
                  
                              <div class="container">
                              
                                    
                                     <form id="form1" action=".\DB_TRANS\special\uploadpic\db.php" method="post" enctype="multipart/form-data">
                             


                                    <div id="preview">
                                    <?php $result=mysqli_query($db_con,"select * from uploading where id=".$id);
                                  
$count=mysqli_num_rows($result);
$fetch=mysqli_fetch_assoc($result);
$path='..\DB_TRANS\special\uploadpic\uploads/';
$path = $path.strtolower($fetch['file_name']); 
if($count<=0)
{
    echo  "<img src='thiru.png'   class='img-responsive' /></div>";
}
else {
    echo  "<img src='".$path."'   class='img-responsive' /></div>";
}?>
                                   
                                   <input id="uploadImage" type="file" style=" border: unset;
    padding: 5px;" accept="image/*" name="image" />
                                   </div>
                                  <div class="btnChangePic">                                
                               
                               
                                  <button class="btn btn-primary" style="align-self: center;" type="submit" value="Upload">ADD IMAGE</button>
                                 </form>
                                </div>
                               


                            </div>
                            <div class="col-sm-8 ">
                                <form class="form3" method="POST" action="../DB_TRANS/update_profile.php">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <select name="designation" class="form-control">
                                        <option selected="selected">
                                                Others
                                                </option>
                                            <option value="none">--Select--</option>
                                            <option value="prof">Professor</option>
                                            <option value="ast_prof">Assistance Professor</option>
                                            <option value="assoc_prof">Associate Professor</option>
                                            <option value="programmer">Programmar</option>
                                            <option value="other">Others</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone">Contact</label>
                                                <?php 
                                                if($exist==1)
                                                echo"<input type='text' name='phone' value='".$number."'placeholder='Contact Number' class='form-control'>";
                                                else {
                                                    echo"<input type='text' name='phone' placeholder='Contact Number' class='form-control'>";
                                                
                                                }                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="extno">Ext. No</label>
                                                <?php 
                                                if($exist==1)
                                                echo'<input type="text" name="extno" value='.$ext.' placeholder="Extension Number" class="form-control">';
                                                else {
                                                    echo'<input type="text" name="extno" placeholder="Extension Number" class="form-control">';
                                                
                                                 }                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
              
                                    <div class="form-group">
                                        <label for="qualification">Qualification</label>
                                        <?php 
                                                if($exist==1)
                                                echo' <input  type="text" name="qualification" value='.$qualification.' placeholder="Qualification" class="form-control" >';
                                                else {
                                                    echo' <input  type="text" name="qualification" placeholder="Qualification" class="form-control" >';
                                                
                                                 }                                                ?>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="dept">Specialization</label>
                                        <?php 
                                                if($exist==1)
                                                echo'<input type="text" name="specialization" value='.$specilization.' placeholder="Specialization" class="form-control">';
                                                else {
                                                    echo' <input type="text" name="specialization" placeholder="Specialization" class="form-control">';
                                                
                                                 }                                                ?>
                                       
                                    </div>                         
                                    <br>
                                    
                               

                    
                            </div>
                        </div>
                    <hr >
                    <div class="row "> <!--WYSIWYG-->
                             <!-- <span style="float: right;"><button class="btn btn-default"> View Sample</button></span>
                             <h4>Add more details </h4>
                             <form> -->
                                <div class="form-group">
                                    <label for="qualification">Alma Mater</label>
                                    <?php 
                                                if($exist==1)
                                                echo' <textarea  name="alma" cols="30" rows="3"  placeholder="e.g. Ph.D. (PEC, Pondicherry), 1990; M.Tech. (PEC, Pondicherry), 19983; B.Tech. (PEC, Pondicherry), 1980; High School (Petit Seminaire, Pondicherry), 1978." class="form-control" >'.$alma.'</textarea>';
                                                else {
                                                    echo'  <textarea  name="alma" cols="30" rows="3" placeholder="e.g. Ph.D. (PEC, Pondicherry), 1990; M.Tech. (PEC, Pondicherry), 19983; B.Tech. (PEC, Pondicherry), 1980; High School (Petit Seminaire, Pondicherry), 1978." class="form-control" ></textarea>';
                                                
                                                 }                                                ?>
                                   
                                </div>
                                <div class="form-group">
                                    <label for="interest">Interests</label>
                                    <?php 
                                                if($exist==1)
                                                echo'  <textarea name="interest" id="" cols="30" rows="3" class="form-control" placeholder="e.g., Playing Badminton, Biking">'.$interest.'</textarea>';
                                                else {
                                                    echo'  <textarea name="interest" id="" cols="30" rows="3" class="form-control" placeholder="e.g., Playing Badminton, Biking"></textarea>';
                                                
                                                 }                                                ?>
                                   
                                </div> 
                                
                                <div class="form-group">
                                    <label for="research">Current Research/Work</label>
                                    <?php 
                                                if($exist==1)
                                                echo' <textarea name="research" id="" cols="30" rows="3" class="form-control" placeholder="e.g., Sensor Networks">'.$research.'</textarea>';
                                                else {
                                                    echo' <textarea name="research" id="" cols="30" rows="3" class="form-control" placeholder="e.g., Sensor Networks"></textarea>';
                                                
                                                 }                                                ?>
                                    
                                </div> 
                                <div class="form-group">
                                    <label for="students">Students</label>
                                    <?php 
                                                if($exist==1)
                                                echo'  <textarea name="students" id="" cols="30" rows="3" class="form-control"  placeholder="e.g., Phd Scholar - Arun Kumar">'.$student.'</textarea>';
                                                else {
                                                    echo' < <textarea name="students" id="" cols="30" rows="3" class="form-control"  placeholder="e.g., Phd Scholar - Arun Kumar"></textarea>';
                                                
                                                 }                                                ?>
                                   
                                </div> 
                                <div class="form-group">
                                    <label for="projects">Projects and Activities</label>
                                    <?php 
                                                if($exist==1)
                                                echo'   <textarea name="projects" id="" cols="30" rows="3" class="form-control" title="Please Enter in bulletpoints." placeholder="Please Keep this field updated. Enter in bulletpoints.">'.$project.'</textarea>';
                                                else {
                                                    echo'  <textarea name="projects" id="" cols="30" rows="3" class="form-control" title="Please Enter in bulletpoints." placeholder="Please Keep this field updated. Enter in bulletpoints."></textarea>';
                                                
                                                 }                                                ?>
                                  
                                </div>
                                <hr>
                                 <h3>Publications</h3>
                                <div class="form-group">
                                    <label for="books">Books</label>
                                    <?php 
                                                if($exist==1)
                                                echo'  <textarea name="books" id="" cols="30" rows="3" class="form-control" placeholder="Please Keep this field updated" title="Please Keep this field updated">'.$books.'</textarea>';
                                                else {
                                                    echo'  <textarea name="books" id="" cols="30" rows="3" class="form-control" placeholder="Please Keep this field updated" title="Please Keep this field updated"></textarea>';
                                                
                                                 }                                                ?>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="journals">Journals</label>
                                    <?php 
                                                if($exist==1)
                                                echo'<textarea name="journals" id="" cols="30" rows="3" class="form-control" placeholder="Please Keep this field updated" title="Please Keep this field updated">'.$journals.'</textarea>';
                                                else {
                                                    echo'<textarea name="journals" id="" cols="30" rows="3" class="form-control" placeholder="Please Keep this field updated" title="Please Keep this field updated"></textarea>';
                                                
                                                 }                                                ?>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="conferences">Conferences</label>
                                    <?php 
                                                if($exist==1)
                                                echo'<textarea name="conferences" id="" cols="30" rows="3" class="form-control" placeholder="Please Keep this field updated" title="Please Keep this field updated">'.$conferences.'</textarea>';
                                                else {
                                                    echo'<textarea name="conferences" id="" cols="30" rows="3" class="form-control" placeholder="Please Keep this field updated" title="Please Keep this field updated"></textarea>';
                                                
                                                 }                                                ?>
                                    
                                    
                                </div>
                                <hr>
                                <h3>Social links</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <?php 
                                                if($exist==1)
                                                echo'  <input type="text" value='.$website.' name="website" placeholder="Paste your URL here" class="form-control">';
                                                else {
                                                    echo'    <input type="text" name="website" placeholder="Paste your URL here" class="form-control">';
                                                
                                                 }                                                ?>
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="linkedin">LinkedIn</label>
                                            <?php 
                                                if($exist==1)
                                                echo'    <input type="text" name="linkedin" value='.$linkedin.' placeholder="Paste your URL here" class="form-control">';
                                                else {
                                                    echo'   <input type="text" name="linkedin" placeholder="Paste your URL here" class="form-control">';
                                                
                                                 }                                                ?>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <?php 
                                                if($exist==1)
                                                echo'    <input type="text" name="facebook" value='.$facebook.' placeholder="Paste your URL here " class="form-control">';
                                                else {
                                                    echo'     <input type="text" name="facebook" placeholder="Paste your URL here " class="form-control">';
                                                
                                                 }                                                ?>
                                          
                                         
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <?php 
                                                if($exist==1)
                                                echo' <input type="text" name="twitter" value='.$twitter.' placeholder="Paste your URL here" class="form-control">';
                                                else {
                                                    echo' <input type="text" name="twitter" placeholder="Paste your URL here" class="form-control">';
                                                
                                                 }                                                ?>
                                          
                                          
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="SAVE" class="btn btn-primary grant-access" style="float: right;">
                            </form>
                             
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>
<script>
$(document).ready(function (e) {
 $("#form1").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "../DB_TRANS/special/uploadpic/db.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form1")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
</script>
                

       