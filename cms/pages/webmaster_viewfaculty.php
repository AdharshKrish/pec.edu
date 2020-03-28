<?php

require_once('../DB_TRANS/db_con.php');
if (isset($_SESSION['loggedin_status'])) {
    $logged = $_SESSION['loggedin_status'];
    if ($logged == 900) {
        if ($_SESSION['role'] == "webmaster") {
            $error = 0;
            if (isset($_GET['message'])) {
                $message = $_GET['message'];
                $error = 1;
            }
        } else {
            header("Location: ../index.php");
        }
    } else {
        header("Location: ../index.php");
        exit();
    }
} else {
    header("Location:../404.html");
    exit();
}

$query = "SELECT * FROM `news_update`  WHERE verified=1";
$result = mysqli_query($db_con, $query);
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

                <div class="col-md-2 ">
                    <!--verticle li-->

                    <ul class="nav nav-tab">
                        <li class="active"> <a href="webmaster_dashboard.php">ADD FACULTY </a></li>
                        <li> <a href="webmasteraddrole.php" id=""> ADD ROLES </a></li>
                        <li> <a href="webmasteraddmemo.php" id=""> ADD MEMO </a></li>
                        <li> <a href="webmaster_viewmemo.php"> VIEW MEMO </a></li>
                        
                        <li> <a href="webmaster_role.php"> VIEW ROLES </a></li>
                        <li> <a href="webmaster_viewfaculty.php" style="color: black;"> VIEW FACULTY DATA SET </a></li>
                        <li><a href="signout.php" style="color: #2E8690">SIGNOUT</a></li>
                    </ul>
                </div>

                <div class="col-md-8 ">
                    <div class="panel-body">

                        <table style="width:100%">
                            <tr>
                                <th>SELECT FACULTY DEPARTMENT</th>

                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=cse'>COMPUTER SCIENCE AND ENGINEERING</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=civil'>CIVIL ENGINEERING</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=chemical'>CHEMICAL ENGINEERING</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=eee'>ELECTRICAL AND ELECTRONICS ENGINEERING</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=ece'>ELECTRONICS AND COMMUNICATION ENGINEERING</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=eie'>ELECTRONICS AND INSTRUMENTATION ENGINEERING</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=phy'>DEPARTMENT OF PHYSICS</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=che'>DEPARTMENT OF CHEMISTRY</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=math'>DEPARTMENT OF MATHEMATICS</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=mech'>MECHANICAL ENGINEERING </a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=hs'>DEPARTMENT OF HUMANITY SCIENCES</a></button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-mini"><a href='webmaster_editfaculty.php?dep=it'>INFORMATION TECHNOLOGY</a></button></td>
                            </tr>
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