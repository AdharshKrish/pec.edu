<?php
$error=0;$suc=0;
require_once('../DB_TRANS/db_con.php');
if(isset($_SESSION['loggedin_status']))
{
$logged=$_SESSION['loggedin_status'];
if($logged==900)
{
    
  if(isset($_GET['message']))
  { 
   $message=$_GET['message']; 
   if(isset($_GET['error']))
   $error=1;
  if(isset($_GET['suc']))
   $suc=1;
  }
 

   $id= $_SESSION['id'];
   $query="SELECT * FROM basic_faculty_info where id=".$id;
   
   $result=mysqli_query($db_con,$query);
  
   if($result)
   {
       $exists=1;
       $arr=mysqli_fetch_assoc($result);
       $name=$arr['name'];
       $email=$arr['contact_official_email'];
       $dept=$arr['department'];
       $_SESSION['DEP']=$dept;
   }else {
    header("Location: http://localhost/pec/error/error404.html");
    exit();
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
    <title>Faculty Dashboard</title> <!-- ENTER PAGE TITLE -->
    <link rel="icon" href="../icon.png">
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

</head>

<body>
    <header>
        <h1>pec.edu <span>CMS_</span> </h1>
    </header>

    <main>
        <div class="container-flow">

        
            <div class="row ">

                <div class="col-md-2 "> <!--verticle li-->
                    <div class="container">
                        <ul class="nav nav-tab">
                        <li class="active" > <a href="./faculty_dashboard.php">PROFILE </a></li>
                            <li> <a href="./addmemo.php" id=""  style="color: black;"> ADD MEMO </a></li>
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
                    <div class="panel panel-body"><?php
                if($suc==1)
                 echo "  <div class='alert alert-success'>
                 <strong>STATUS: </strong> ".$message."
               </div>";
                ?>
                    <?php
                if($error==1)
                 echo "  <div class='alert alert-danger'>
                 <strong>THE INPUT FORMAT IS WRONG OR IS NOT FILLED AT ALL</strong>: Check Helpbook or contact Webmaster
               </div>";
                ?>
                        <form action="../DB_TRANS/addmemo_faculty.php" class="form" enctype='multipart/form-data' method="POST">
                            <div class="form-group">
                                <label for="note"> Note </label>
                                <textarea name="note" cols="30" rows="7" class="form-control" placeholder="e.g. Happy Independence Day" style="background-color: white;" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone">Hashtags</label>
                                <input type="text" name="tags" placeholder="e.g. Holiday" class="form-control">
                            </div>

                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="date-from">Visibility (Please strictly select necessary)</label>
                                        <select name="visib" class="form-control">
                                            <option value="none"selected="true" disabled>Select</option>
                                            <option value="all">ALL DEPARTMENTS AND MAIN PAGE</option>
                                            <option value="main">MAIN PAGE</option>
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
                                            </select>
                                    </div>
                                </div>
                                </div>
                            
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="date-from">From</label>
                                        <input type="date" name="date-from" placeholder="From" class="form-control" title="From">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="date-to "> To </label>
                                        <input type="date" name="date-to" title="To" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="expiry">Expires on</label>
                                <input type="date" name="expiry" placeholder="expiry" class="form-control">
                            </div>
                            <div class="row" style="text-align: center;">
                                <div class="col-sm-6" style="text-align: left;">
                                    <label for="myFile" >Select one file: <br>(Please attach as link using Google Drive if more file is concerned)</label> <input type="file" name="file" style="border: unset;" class="btn btn-default" >
                                </div>
                                <br>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="button" value="CLEAR" class="clearButton grant-access">
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="submit" value="APPLY" class="grant-access">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </form>
                  
                    </div>
                </div>

                

            </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>