<?php
session_start();
if($_SESSION['otp']!=1)
{
    header("Location: http://localhost/pec/error/error404.html");
    exit();
   
}
else
{
    $message=1;
    if(isset($_GET['error']))
    {
      $message="otp is invalid";    
    }
}
?><html>

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
</head>

<body>
    <header>

    </header>

    <main>
            <div class="container">
                <div class="myPanel">

                    <h3>WEBMASTER LOGIN</h3>

                    <div class="panel panel-default ">
                 <?php
                 if ($message!=1)
                 {
                 echo"<div class='alert alert-danger'>
    <strong>ERROR!</strong> ".$message."
  </div>";}?>
                        <div class="panel-body">
                            <form class="form1" method="POST" action="../DB_TRANS/check_otp.php">
                                <div class="form-group">
                                    <input type="text" name="otp" placeholder="otp" class="form-control">
                                </div>
                                <br>
                                <input type="submit" value="SEND OTP" class="btn btn-primary btn-large send-otp">
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