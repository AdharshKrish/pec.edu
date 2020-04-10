<?php
$content_id=-1;
require_once('../DB_TRANS/db_con.php');
if(isset($_SESSION['loggedin_status']))
{
$logged=$_SESSION['loggedin_status'];
if($logged==900)
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

$query1="SELECT * FROM news_update where verified=0 ORDER BY expires_on DESC LIMIT 0,100";

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
    <title>Webmaster</title>
    <link rel="icon" href="../icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                        <li  > <a href="webmaster_dashboard.php" >ADD FACULTY </a></li>
                        <li> <a href="webmasteraddrole.php" id=""> ADD ROLES </a></li>
                        <li class="active"> <a href="webmasteraddmemo.php" style="color: black;"> ADD MEMO </a></li>
                        <li> <a href="webmaster_viewmemo.php"> VIEW MEMO </a></li>
                        <li> <a href="webmaster_role.php"> VIEW ROLES </a></li>
                        <li> <a href="webmaster_viewfaculty.php"  > FACULTY ACCESS LIST </a></li>
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
                                echo "<div class='col-sm-6 col-md-12'>
                                <div class='container memo_palette'>
                                    <h4>Name</h4>
                                    <p>".$arr1['name']."</p>
                                    <h4>Email</h4>
                                    <p>".$arr1['contact_official_email']."</p>
                                    <h4>Department</h4>
                                    <p>".$arr1['department']."</p>
                                  <strong> <p><a href='./webmasteraddmemo.php?content_id=".$arr_ok['id']."'>View</a></p></strong>
                                </div>
                            </div>";
                            }}
                            ?>
                        </div>
                </div>
               
                <div class="col-md-8 col-md-pull-2">
                    <div class="panel panel-default"> 
                        <div class="panel-body">
                            <form action="../DB_TRANS/addmemo_master.php" class="form"  enctype='multipart/form-data' method="POST">
                                <div class="form-group">
                                    <label for="note"> Note </label>
                                    <?php
                                    if(isset($_GET['content_id']))
                                    echo"<textarea name='note' cols='30' rows='7' class='form-control'  style='background-color: white;' >".$arr['breif']."</textarea>";
                                    else {
                                        echo"<textarea name='note' cols='30' rows='7' class='form-control' placeholder='e.g. Happy Independence Day' style='background-color: white;' ></textarea>";
                                    }
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Hashtags</label>
                                    <?php
                                    if(isset($_GET['content_id']))
                                    echo" <input type='text' name='tags' value='".$tag."' class='form-control'>";
                                    else {
                                        echo" <input type='text' name='tags' placeholder='Hashtags' class='form-control'>";
                                    }
                                ?>
                                </div>
                                  <div class="form-group">
                                    <label for="date-from">Visibility</label>
                                        <select name="visib" class="form-control">
                                        <?php
                                        if(isset($_GET['content_id']))
                                        echo"<option value=".$arr['department'].">".$arr['department']."</option>";
                                        ?>
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
                                            <label for="myFile" >Select one or more file:</label> 
                                            <ul>
                                            <?php
                                              if(isset($_GET['content_id']))
                                              {
                                            if($arratt=mysqli_query($db_con,"SELECT * FROM attachment where content_id=".$content_id))
                                           { while($arrnew=mysqli_fetch_assoc($arratt))
                                            {
                                             $fl=$arrnew['name'];
                                             echo "<a href='../content_upload/".$fl."'><li>".$fl."</li></a>";
                                            }}
                                        }
                                        else {
                                        echo'    <input type="file" name="file[]" style="border: unset;" class="btn btn-default" multiple="multiple">';
                                        }
                                            ?> </ul>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-xs-6">
                                            <?php

                                            if(isset($_GET['content_id']))
                                            echo '    <a href="../DB_TRANS/delete_memo.php?id='.$content_id.'"> <input type="button" value="DELETE  MEMO" class="clearButton grant-access"></a>';
                                            else {
                                                echo'';
                                            }
                                            ?>
                                          
                                            </div>
                                            <div class='col-xs-6'>
                                            <?php

                                            if(isset($_GET['content_id']))
                                            echo '<a href="../DB_TRANS/verify_memo.php?id='.$content_id.'"> <input type="button" value="VERIFY  MEMO" class="clearButton grant-access"></a>';
                                            else {
                                                echo' <a href="../DB_TRANS/addmemo_master.php?id='.$content_id.'"> <input type="button" value="ADD MEMO" class="clearButton grant-access"></a>';
                                            }
                                            ?>
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