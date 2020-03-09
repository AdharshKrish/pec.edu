<?php

require_once('../DB_TRANS/db_con.php');
if(isset($_SESSION['loggedin_status']))
{
$logged=$_SESSION['loggedin_status'];
if($logged=900)
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
    header("Location: ../index.php");
    exit();
}
}

else {
    header("Location:  ../error/error404.html");
    exit();
}

$query="SELECT * FROM `news_update`  WHERE verified=1";
$result=mysqli_query($db_con,$query);
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
        <div class="container">

        
            <div class="row ">

                <div class="col-md-2 "> <!--verticle li-->
                
                    <ul class="nav nav-tab">
                    <li class="active" > <a href="webmaster_dashboard.php">ADD FACULTY </a></li>
                        <li> <a href="webmasteraddrole.php" id=""> ADD ROLES </a></li>
                        <li> <a href="webmasteraddmemo.php" id=""> ADD MEMO </a></li>
                        <li> <a href="webmaster_viewmemo.php"  style="color: black;"> VIEW DATASET </a></li>
                        <li> <a href="webmaster_viewfaculty.php" > VIEW FACULTY DATA SET </a></li>
                        <li><a href="signout.php" style="color: #2E8690">SIGNOUT</a></li>
                    </ul>
                </div>
             
                <div class="col-md-8 ">
                    <div class="panel panel-default"> <?php
                if($error==1)
                 echo "  <div class='alert alert-success'>
                 <strong>SUCCESSFULL</strong> ".$message."
               </div>";
                ?>
                        <div class="panel-body">
                                
                        <table style="width:100%">
                            <tr>
                        <th>Article name</th>
                        <th>Department<th>
                    </tr>
                 
                    <?php 
                   while($arr=mysqli_fetch_assoc($result))
                    {
                        $breif=$arr['breif'];
                        $id=$arr['id'];
                        $dep=$arr['department'];
                        
                        echo"<tr>
                     
                        <td> $breif</td>
                        <td> $dep</td>
                        
                        <td><a href='../DB_TRANS/delete_memo.php?id=$id'>DELETE</a></td>
                                      </tr>
                                      <br>";

                    }
                    ?>
                             
</table>

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