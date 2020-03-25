<?php
include_once('../DB_TRANS/db_con.php');
$error=0;
if(isset($_SESSION['loggedin_status']))
{
$logged=$_SESSION['loggedin_status'];
if($logged=900)
{
  if($_SESSION['role']!="ccc")
  {
    
    if(isset($_GET['message']))
    {
    $message=$_GET['message'];
    $error=1;
    }
  }
  else {
    // header("Location: ../index.php");
  }
}
else {
   // header("Location: ../index.php");
    exit();
}
}

else {
  //  header("Location:  ../error/error404.html");
    exit();
}

$id=$_SESSION['id'];	
$body='';	
$query="SELECT * FROM article where `author`='$id'";	
//echo $query;	
if($result=mysqli_query($db_con,$query))	
{	

  if(mysqli_num_rows($result)>0)	
  {	

  $arr=mysqli_fetch_assoc($result);	

  $body=$arr['body'];	
  }	
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
  <!-- <link rel="stylesheet" href="../css/master.css"> -->
  <link rel="stylesheet" href="../css/header.css">
  <meta http-equiv="Content-Language" content="en-us">
  <title>4C Editor</title>
  <link rel="icon" href="../icon.png">
  <meta charset="utf-8">
  <link href="wh/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <script type="wh/text/javascript" src="wh/js/jquery.js"></script>
  <script type="wh/text/javascript" src="wh/js/bootstrap.js"></script>
  <script type="wh/text/javascript" src="wh/js/bootstrap-wysiwyg.js"></script>

  <link href="wh/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="wh/css/font-awesome.css" rel="stylesheet">
  <style>
    .content {
      width: 80%;
      margin: 0 auto;
      margin-top: 50px;
    }

    .btn-toolbar{
      margin-top:-40px;
    }

    #editor {
      max-height: auto;
      height: 530px;
      background-color: white;
      border-collapse: separate;
      border: 1px solid rgb(204, 204, 204);
      padding: 10px;
      box-sizing: content-box;
      -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
      box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px;
      border-top-left-radius: 3px;
      overflow: auto;
      outline: none;
      resize: vertical;
    }

    #voiceBtn {
      width: 20px;
      color: transparent;
      background-color: transparent;
      transform: scale(2.0, 2.0);
      -webkit-transform: scale(2.0, 2.0);
      -moz-transform: scale(2.0, 2.0);
      border: transparent;
      cursor: pointer;
      box-shadow: none;
      -webkit-box-shadow: none;
    }

    div[data-role="editor-toolbar"] {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .btn {
      margin: 2px;
    }

    .dropdown-menu a {
      cursor: pointer;
    }
  </style>

  <script src="wh/external/jquery.hotkeys.js"></script>
  <script src="wh/external/google-code-prettify/prettify.js"></script>
  <script src="wh/js/bootstrap-wysiwyg.js"></script>
  <script language="javascript">
    function loadVal() {
      desc = $("#editor").html();
      document.form1.desc.value = desc;
    }
  </script>

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
            <li><a href="signout.php" style="color: #2E8690">SIGNOUT</a></li>
          </ul>
        </div>

        <div class="col-md-12">
          <div class="panel panel-default"> <?php
                                            if ($error == 1)
                                              echo "  <div class='alert alert-success'>
                 <strong>SUCCESSFULL</strong> " . $message . "
               </div>";
                                            ?>
            <div class="panel-body">




              <form method="POST" name="form1" action="../DB_TRANS/cccbody.php?id=<?php echo $id ?>" onsubmit="loadVal();">

                <div class="content">

                  <div id="alerts"></div>
                  <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      </ul>
                    </div>
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a data-edit="fontSize 5">
                            <font size="5">Huge</font>
                          </a></li>
                        <li><a data-edit="fontSize 3">
                            <font size="3">Normal</font>
                          </a></li>
                        <li><a data-edit="fontSize 1">
                            <font size="1">Small</font>
                          </a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                      <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
                      <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
                    </div>
                    <div class="btn-group">
                      <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
                      <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
                      <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
                      <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                    </div>
                    <div class="btn-group">
                      <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                      <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                      <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                      <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
                    </div>
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
                      <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                        <button class="btn" type="button">Add</button>
                      </div>
                      <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

                    </div>

                    <div class="btn-group">
                      <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
                      <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                    </div>
                    <div class="btn-group">
                      <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                      <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
                    </div>
                    <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
                  </div>

                  <div id="editor"><?php echo $body ?></div>

                  <textarea rows="2" name="desc" cols="20" style="display:none; "> </textarea>


                  <script>
                    $(function() {
                      function initToolbarBootstrapBindings() {
                        var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                            'Times New Roman', 'Verdana'
                          ],
                          fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                        $.each(fonts, function(idx, fontName) {
                          fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                        });
                        $('a[title]').tooltip({
                          container: 'body'
                        });
                        $('.dropdown-menu input').click(function() {
                            return false;
                          })
                          .change(function() {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                          })
                          .keydown('esc', function() {
                            this.value = '';
                            $(this).change();
                          });

                        $('[data-role=magic-overlay]').each(function() {
                          var overlay = $(this),
                            target = $(overlay.data('target'));
                          overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                        });
                        if ("onwebkitspeechchange" in document.createElement("input")) {
                          var editorOffset = $('#editor').offset();
                          $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                          });
                        } else {
                          $('#voiceBtn').hide();
                        }
                      };

                      function showErrorAlert(reason, detail) {
                        var msg = '';
                        if (reason === 'unsupported-file-type') {
                          msg = "Unsupported format " + detail;
                        } else {
                          console.log("error uploading file", reason, detail);
                        }
                        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                          '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                      };
                      initToolbarBootstrapBindings();
                      $('#editor').wysiwyg({
                        fileUploadError: showErrorAlert
                      });
                      window.prettyPrint && prettyPrint();
                    });
                  </script>
                  <br />
                  <input type="submit" value="Submit" name="B1" class="btn btn-primary btn-large">
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>