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
                    <button type="button" class="btn success"> <a href="editstaff.php"> EDIT STAFF</a></button>
                    <div class="panel panel-default">

                        <?php
                        if ($error == 1)
                            echo "  <div class='alert alert-success'>
                 <strong>STATUS: </strong> " . $message . "
               </div>";
                        ?>
                        <div class="panel-body">





                            <form class="form3" method="POST" action="../DB_TRANS/addstaff.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="dept">Add photo</label>
                                    <input type="file" name="file" style="border: unset;" class="btn btn-default">
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Enter name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="Phone">Phone</label>
                                    <input type="text" name="phone" placeholder="Phone num" class="form-control">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="Phone">Role</label>
                                    <input type="text" name="role" placeholder="Role " class="form-control">
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

    <footer>

    </footer>
</body>

</html>