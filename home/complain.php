<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require_once('./db_con.php');

    $name=$_POST["name"];
    $id=$_POST["id"];
    $email=$_POST["email"];
    $phno=$_POST["phno"];
    $query=$_POST["query"];
    $amail=$_POST["auth"];
    $sub=$_POST["authsub"];
    $bod="Name: ".$name."<br>ID: ".$id."<br>E-mail: ".$email."<br>Phone no: ".$phno."<br>Query: ".$query ;

    $mail = new PHPMailer(true);
    
    try {
        //Server settings
    
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host      = 'smtp.gmail.com';        // Specify main and backup SMTP servers
        $mail->SMTPAuth  = true;                    // Enable SMTP authentication
        $mail->CharSet   = "UTF-8";
    // $mail->SMTPDebug = 2;                       // Enable verbose debug output
        $mail->isHTML(true);                        // Set email format to HTML
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );



        $mail->Username = 'noreply@pec.edu';
        $mail->Password = 'designclubpec';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        //$mail->SMTPDebug =4 ;
        //$mail->SMTPAutoTLS = false;
        // TCP port to connect to
    
        //Recipients
        $mail->setFrom('purushottambanerjee@pec.edu', 'contactus@noreply');
        $mail->addAddress($amail, 'reciever');     // Add a recipient
    // $mail->addAddress('optional name');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC($email);
        $mail->addBCC('bcc@example.com');
    // echo "<script>";
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $sub;
        $mail->Body    = $bod;
        $mail->AltBody = $bod;
        if($mail->send())
        {
        echo "alert('Complaint has been registered')";

        header("Location: ../home/contact-us.html");
        die();}
        else {
            echo "alert('some technical error please try again later')";
            header("Location: ../home/contact-us.html");
            die();
        }
    
    } catch (Exception $e) {
        echo "alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')";
        die();
    }
    // echo "</script>";
?>