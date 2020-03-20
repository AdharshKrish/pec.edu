<html>
<head>
    <title>Script</title>
</head>
<body>
    <form class="public" action="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" method="POST" enctype="multipart/form-data">
    <p><label for="file">File Name:</label> <input type="file" name="file" id="file" /></p>
    <br/>Find&emsp;&nbsp; : <input type="text" name="find">
    <br/>Replace : <input type="text" name="replace">
    <p><input type="submit" value="Parse" name="sendData"/></p>
    </form>
</body>
</html>

<?php
//test if the file is selected
if(!isset($_POST['sendData'])) exit;
//get file name
$filename = $_FILES["file"]["name"];
//be sure this file is html file
$ext = explode('.', $filename);
if($ext[1] != 'html'){
    echo '<br>bad file type, it must be html file';
    exit;
}
//upload the file to temp area
move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"]);
//read the file
$file = @fopen($filename, 'r');
if($file === false){
    echo 'Error when reading the file';
    exit;  
}
//reading line by line
$output ='';
while (($line = fgets($file)) !== FALSE) {
    $output .= str_replace($_POST['find'], $_POST['replace'], $line);
}
fclose($file);
//write the new file
$result = file_put_contents($filename, $output);
echo $result.' characters<br>';
if(!$result){
    echo 'faild';
}else{
    echo 'success <br/>';
    $load_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $load_link = str_replace('test.php', $filename, $load_link); 
    // $load_link .= $filename;   
    echo '<a href='.$load_link.'>See the result</a><br>';
}


?>