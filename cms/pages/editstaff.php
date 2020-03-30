<?php

require_once('../DB_TRANS/db_con.php');
if (isset($_SESSION['loggedin_status'])) {
    $logged = $_SESSION['loggedin_status'];
    if ($logged == 900) {
        if ($_SESSION['role'] == "faculty") {
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
    header("Location:  ../error/error404.html");
    exit();
}
$fid = $_SESSION['id'];
$result2 = mysqli_query($db_con, "SELECT * FROM login WHERE id=" . $fid);
$result_val = mysqli_fetch_assoc($result2);

$dep = $result_val['department'];


$query = "SELECT * FROM `staff`  WHERE dep='$dep'";

$result = mysqli_query($db_con, $query);
?>
<html>

<head>
    <title>Staff record</title>
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
        <div class="container">


            <div class="row ">

                <div class="col-md-2 ">
                    <!--verticle li-->

                    <ul class="nav nav-tab">
                        <li class="active"> <a href="./faculty_dashboard.php" style="color: black;">PROFILE </a></li>
                        <li> <a href="./addmemo.php" id=""> ADD MEMO </a></li>
                        <li><a href="signout.php" style="color: #2E8690">SIGNOUT</a></li>
                        <li><a href="../../files/cms-helpbook.docx" target="blank" style="color: #0000EE">HELPBOOK</a></li>
                    </ul>
                </div>

                <div class="col-md-8 ">
                    <button type="button" class="btn success"> <a href="addstaff.php"> GO BACK</a></button>
                    <div class="panel panel-default"> <?php
                                                        if ($error == 1)
                                                            echo "  <div class='alert alert-success'>
                 <strong>STATUS: </strong> " . $message . "
               </div>";
                                                        ?>
                        <div class="panel-body">

                            <table style="width:100%">
                                <tr>
                                    <th>STAFF</th>
                                    <th>DEPARTMENT
                                    <th>
                                </tr>

                                <?php
                                while ($arr = mysqli_fetch_assoc($result)) {
                                    $breif = $arr['role'];
                                    $id = $arr['id'];
                                    $dep = $arr['name'];

                                    echo "<tr>
                     
                        <td> $breif</td>
                        <td> $dep</td>
                        
                        <td><a href='../DB_TRANS/delstaff.php?id=$id'>DELETE</a></td>
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