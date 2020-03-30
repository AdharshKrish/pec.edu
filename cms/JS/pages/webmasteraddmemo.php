<?php

require_once('../DB_TRANS/db_con.php');
if(isset($_SESSION['loggedin_status']))
{
$logged=$_SESSION['loggedin_status'];
if($logged=900)
{
    if($_SESSION['role']=="webmaster")
    {
  
    
    $tag="";
   if(isset($_GET['content_id']))
{
  $content_id=$_GET['content_id'];
  $arr=mysqli_fetch_assoc(mysqli_query($db_con,"SELECT * FROM news_update where verified=0 and id=".$content_id));
  
  $arr2=mysqli_query($db_con,"SELECT * FROM tags where content_id=".$content_id);
  while($arr3=mysqli_fetch_assoc($arr2))
  {
   $tag=$arr3['tagname'].",".$tag;
  }  
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

$query1="SELECT * FROM news_update where verified=0 ORDER BY expires_on DESC LIMIT 0,25";

if($result=mysqli_query($db_con,$query1) )
{
    

}
else
{
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

</head>

<body>
    <header>
        <h1>pec.edu <span>CMS_</span> </h1>
    </header>

    <main>
        <div class="container-flow" >
            <div class="row ">
                <div class="col-md-2 "> <!--verticle li-->
                    
                    <ul class="nav nav-tab">
                        <li  > <a href="faculty.html" >ADD FACULTY </a></li>
                        <li> <a href="AddRole.html" id=""> ADD ROLES </a></li>
                        <li class="active"> <a href="AddMemoWebmaster.html" style="color: black;"> ADD MEMO </a></li>
                        <li> <a href="ViewDatabase.html"> VIEW DATASET </a></li>
                        <li><a href="signout.php" style="color: #2E8690">SIGNOUT</a></li>
                        <li><a href="../../files/cms-helpbook.docx" target="blank" style="color: #0000EE">HELPBOOK</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-md-push-8">
                    <!-- <div class="approvalPanel">                     --> 
                        <!-- the below part replicates based on the number of pending MEMOS-->
                        <!--
                            <div class=" panel panel-primary">
                                <div class="panel-body">
                                    <h4>Name</h4>
                                    <p>Prof. XYZ</p>
                                    <h4>Email</h4>
                                    <p>xyz@pec.edu</p>
                                    <h4>Department</h4>
                                    <p>CSE</p>
                                    <button class="btn btn-primary">View</button>
                                </div>
                            </div>
                        -->
                        <p class="sticky">Pending Approval</p>
                        
                        <div class="row approvalPanel">
                        <?php
                            while($arr_ok=mysqli_fetch_assoc($result))
                            {
                            //foreach($arr as $r1)
                            {
                            //print_r($arr);
                                $id=$arr_ok['Faculty_id'];
                                $query2="SELECT * FROM basic_faculty_info where id=".$id;
                                $arr1=mysqli_fetch_assoc(mysqli_query($db_con,$query2));
                                echo "<div class='col-sm-6 col-md-12 ''>
                                <div class='container memo_palette'>
                                    <h4>NAME</h4>
                                    <p>".$arr1['name']."</p>
                                    <h4>Email</h4>
                                    <p>".$arr1['contact_official_email']."</p>
                                    <h4>Department</h4>
                                    <p>".$arr1['department']."</p>
                                    <button class='btn btn-primary'><a href='./webmasteraddmemo.php?content_id=".$arr_ok['id']."'>View</a></button>
                                </div>
                            </div>";
                            }}
                            ?>
                           
                         
                        </div>
                </div>
               
                <div class="col-md-8 col-md-pull-2">
                    <div class="panel panel-default"> 
                        <div class="panel-body">
                            <form action="" class="form" method="POST">
                                <div class="form-group">
                                    <label for="note"> Note </label>
                                    <?php
                                    if(isset($_GET['content_id']))
                                    echo"<textarea name='note' cols='30' rows='7' class='form-control'  style='background-color: white;' >".$arr['breif']."</textarea>";
                                    else {
                                        echo"<textarea name='note' cols='30' rows='7' class='form-control' placeholder='e.g., Happy Independence Day' style='background-color: white;' ></textarea>";
                                    }
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Hashtags</label>
                                    <?php
                                    if(isset($_GET['content_id']))
                                    echo" <input type='text' name='hashtag' value='".$tag."' class='form-control'>";
                                    else {
                                        echo" <input type='text' name='hashtag' placeholder='Hashtags' class='form-control'>";
                                    }
                                ?>
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="date-from">From</label>
                                            <?php
                                    if(isset($_GET['content_id']))
                                    echo"<input type='date' name='date-from' value=".$arr['start']." placeholder='From' class='form-control' title='From'>";
                                    else {
                                        echo"<input type='date' name='date-from' placeholder='From' class='form-control' title='From'>";
                                    }
                                ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="date-to "> To </label>
                                            <?php
                                    if(isset($_GET['content_id']))
                                    echo"<input type='date' name='date-to' value=".$arr['end']." placeholder='TO' class='form-control' title='From'>";
                                    else {
                                        echo"<input type='date' name='date-to' placeholder='To' class='form-control' title='From'>";
                                    }
                                ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="expiry">Expires on</label>
                                    <?php
                                    if(isset($_GET['content_id']))
                                    echo"<input type='date' name='date-from' value=".$arr['expires_on']." placeholder='expires' class='form-control' title='From'>";
                                    else {
                                        echo"<input type='date' name='date-from' placeholder='expires' class='form-control' title='From'>";
                                    }
                                ?>
                                </div>
                                <div class="row" style="text-align: center;">
                                    <div class="col-sm-6" style="text-align: left;">
                                        <div class="form-group">
                                            <label for="myFile" >Select One or More file:</label> 
                                            <input type="file" name="myFile" style="border: unset;" class="form-control" multiple="multiple"> 
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <input type="button" value="Clear" class="clearButton grant-access">
                                            </div>
                                            <div class="col-xs-6">
                                               <a href="../DB_TRANS/verify_memo?id=<?php echo $content_id?>"><p  value="APPLY" class="grant-access">VERIFY</p></a> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
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