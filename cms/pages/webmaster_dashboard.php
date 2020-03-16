<?php
    session_start();
    if(isset($_SESSION['loggedin_status'])){
        $logged=$_SESSION['loggedin_status'];
        if($logged=900)
        {
            if($_SESSION['role']=="webmaster"){
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
        <div class="container">
            <div class="row ">
                <div class="col-md-2 "> <!--verticle li-->
                    <ul class="nav nav-tab">
                        <li class="active" > <a href="webmaster_dashboard.php" style="color: black;">ADD FACULTY </a></li>
                        <li> <a href="webmasteraddrole.php" id=""> ADD ROLES </a></li>
                        <li> <a href="webmasteraddmemo.php" id=""> ADD MEMO </a></li>
                        <li> <a href="webmaster_viewmemo.php"> VIEW MEMO </a></li>
                        <li> <a href="webmaster_viewfaculty.php"> VIEW FACULTY DATA SET </a></li>
                        <li><a href="signout.php" style="color: #2E8690">SIGNOUT</a></li>
                    </ul>
                </div>
                <div class="col-md-8 ">
                    <div class="panel panel-default"> 
                        <?php
                                if($error==1)
                                echo "  <div class='alert alert-success'>
                                <strong>SUCCESSFULL</strong> ".$message."
                                </div>";
                        ?>
                        <div class="panel-body">
                                <form class="form3" method="POST" action="../DB_TRANS/webmaster_addmember.php">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Name" >
                                    </div>
                                    <div class="form-group">
                                        <label for="dept">Department</label>
                                        <select name="dept" class="form-control">
                                            <option value="none" selected="true" disabled>Select</option>
                                            <option value="cse">Computer Science and Engineering</option>
                                            <option value="it">Information Technology</option>
                                            <option value="eee">Electrical and Electronics Engineering</option>
                                            <option value="ece">Electronics and Communication Engineering</option>
                                            <option value="eie">Electronics and Instrumentation Engineering</option>
                                            <option value="civil">Civil Engineering</option>
                                            <option value="chem">Chemical Engineering</option>
                                            <option value="mech">Mechanical Engineering</option>
                                            <option value="phy">Department of Physics</option>
                                            <option value="che">Department of Chemistry</option>
                                            <option value="math">Department of Mathematics</option>
                                            <option value="hs">Department of Humanity Sciences</option>
                                            <option value="other">Other</option>

                                        </select>
                                    </div>                         

                                    <div class="form-group">
                                        <label for="dept">Designation</label>
                                        <select name="dept" class="form-control">
                                            <option value="none" selected="true" disabled>Select</option>
                                            <option value="professor">Professor</option>
                                            <option value="associate professor">Associate Professor</option>
                                            <option value="assistant professor">Assistant Professor</option>  
                                            <option value="other">Others</option>
                                        </select>
                                    </div>

                                    <br>
                                    <input type="submit" value="GRANT ACCESS" class="btn btn-primary btn-large grant-access">
                                </form>
                            </div>
                    </div>
                </div>

                

            </div>
        </div>
    </main>
</body>
</html>