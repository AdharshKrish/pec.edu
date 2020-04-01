<?php
require_once('../DB_TRANS/db_con.php');
if (isset($_SESSION['loggedin_status'])) {
    $logged = $_SESSION['loggedin_status'];

    if ($logged == 900) {
        $id = $_SESSION['id'];
        $query = "SELECT * FROM basic_faculty where f_id=" . $id;
        $result = mysqli_query($db_con, $query);

        if ($result) {
            $exists = 1;

            $number = $arr['phno'];
            $qualification = $arr['qualification'];
            $specilization = $arr['specilization'];
            $query = "SELECT * FROM login where id=" . $id;
            $result = mysqli_query($db_con, $query);
            $arr = mysqli_fetch_assoc($result);
            $name = $arr['username'];
            $email = $arr['email'];
            $dept = $arr['department'];
        } else {
            $exists = 0;
            $query = "SELECT * FROM login where id=" . $id;
            $result = mysqli_query($db_con, $query);
            $arr = mysqli_fetch_assoc($result);
            $name = $arr['username'];
            $email = $arr['email'];
            $dept = $arr['department'];
            $desg = $arr['desg'];
        }
    } else {
        header("Location:  ../localhost/pec/error/error404.html");
        exit();
    }
} else {
    header("Location:  ../localhost/pec/error/error404.html");
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

                    <div class="col-md-2 ">
                        <!--verticle li-->
                        <div class="container">
                            <ul class="nav nav-tab">
                                <li class="active"> <a href="profile.html" style="color: black;">PROFILE </a></li>
                                <li> <a href="AddMemoFaculty.html" id=""> ADD MEMO </a></li>
                                <li><a href="signout.html" style="color: #2E8690">SIGNOUT</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-push-8 data" style="overflow-x: auto;">
                        <div class="container">
                            <h3>Name</h3>
                            <p><?php echo $name ?></p>
                            <h3>Email</h3>
                            <p><?php echo $email ?></p>
                            <h3>Department</h3>
                            <p><?php echo $dept ?></p>
                        </div>
                    </div>


                    <div class="col-md-8 col-md-pull-2">
                        <div class="panel panel-body">
                            <div class="row ">
                                <!--DETAILS-->
                                <div class="col-sm-4 ">
                                    <!--FACUTLY IMAGE-->






                                    <div class="container">

                                        <form id="form1" action=".\DB_TRANS\special\uploadpic\db.php" method="post" enctype="multipart/form-data">



                                            <div id="preview">
                                                <?php $result = mysqli_query($db_con, "select * from uploading where id=" . $id);

                                                $count = mysqli_num_rows($result);
                                                $fetch = mysqli_fetch_assoc($result);
                                                $path = '.\DB_TRANS\special\uploadpic\uploads/';
                                                $path = $path . strtolower($fetch['file_name']);
                                                if ($count <= 0) {
                                                    echo  "<img src='thiru.png'   class='img-responsive' /></div>";
                                                } else {
                                                    echo  "<img src='" . $path . "'   class='img-responsive' /></div>";
                                                } ?>

                                                <input id="uploadImage" type="file" style=" border: unset;
    padding: 5px;" accept="image/*" name="image" />
                                            </div>
                                            <div class="btnChangePic">


                                                <button class="btn btn-primary" style="align-self: center;" type="submit" value="Upload">ADD IMAGE</button>
                                        </form>
                                    </div>



                                </div>
                                <div class="col-sm-8 ">
                                    <form class="form3" action>
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <select name="designation" class="form-control">
                                                <option value="none">--Select--</option>
                                                <option value="professor">Professor</option>
                                                <option value="associate professor">Associate Professor</option>
                                                <option value="Assistant Professor">Assistant Professor</option>
                                                <option value="programmer">Programmer</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="phone">Contact</label>
                                                    <input type="text" name="phone" placeholder="Contact Number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="extno">Ext. No</label>
                                                    <input type="text" name="extno" placeholder="Extension Number" class="form-control">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label for="qualification">Qualification</label>
                                            <input type="text" name="qualification" placeholder="Qualification" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="dept">Specialization</label>
                                            <input type="text" name="specialization" placeholder="Specialization" class="form-control">
                                        </div>
                                        <br>
                                        <input type="submit" value="UPDATE" class="btn btn-primary grant-access">
                                    </form>


                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <!--WYSIWYG-->
                                <span style="float: right;"><button class="btn btn-default"> View Sample</button></span>
                                <h4>Add more details </h4>
                                <form>
                                    <textarea name="editor1" id="editor1" rows="10" cols="80">
                                    Write Your contents here in this rich text editor. You can also embed images here.
                                </textarea>
                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>
                                    <br>
                                    <input type="submit" value="SAVE" class="btn btn-primary grant-access" style="float: right;">
                                </form>

                            </div>
                        </div>
                    </div>
    </body>

</html>
<script>
    $(document).ready(function(e) {
        $("#form1").on('submit', (function(e) {
            e.preventDefault();
            $.ajax({
                url: "./DB_TRANS/special/uploadpic/db.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function(data) {
                    if (data == 'invalid') {
                        // invalid file format.
                        $("#err").html("Invalid File !").fadeIn();
                    } else {
                        // view uploaded file.
                        $("#preview").html(data).fadeIn();
                        $("#form1")[0].reset();
                    }
                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }
            });
        }));
    });
</script>