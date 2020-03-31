<?php
//session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require_once('./db_con.php');
//echo $_POST['email'];
$usernaam=$_POST['email'];
$role=$_GET['role'];
$query="SELECT * FROM login where email='".$usernaam."' AND `department`!=''";

$_SESSION['role']=$role;
$count=mysqli_query($db_con,$query);
echo $query;

$cv=mysqli_num_rows($count);
echo $cv;
$arr=mysqli_fetch_assoc($count);
echo $query;
//echo $arr['f_id'];
//echo $cv;
if($cv>0)
{
                           
                            $query="SELECT * FROM login where id='".$arr['id']."'";
                            $count=mysqli_query($db_con,$query);
                            $arr=mysqli_fetch_assoc($count);
                          
                            //genrate an otp
                            $otp=mt_rand(10000000,99999999);

                            //mail function    
                            // Load Composer's autoloader
                            //require 'vendor/autoload.php';
                            
                            // Instantiation and passing `true` enables exceptions
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
                                $mail->setFrom('noreply@pec.edu','PEC.EDU@noreply');
                                $mail->addAddress($arr['email'], 'reciever');     // Add a recipient
                            // $mail->addAddress('optional name');               // Name is optional
                                $mail->addReplyTo('info@example.com', 'Information');
                                $mail->addCC('cc@example.com');
                                $mail->addBCC('bcc@example.com');
                            
                                // Content
                                $mail->isHTML(true);                                  // Set email format to HTML
                                $mail->Subject = 'Otp for getting a login ';
                                $mail->Body    = 'Please dont share this otp <b>'.$otp.'</b>';
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                                if($mail->send())
                                {
                                echo 'Message has been sent';
                                $query=mysqli_query($db_con,"UPDATE login set otp=".$otp." where id=".$arr['id']);
                                $_SESSION['otp']=1;
                                $_SESSION['id']=$arr['id'];
                                header("Location:../otp.php");
                                die();}
                                else {
                                    header("Location: ../index.php?message=cannot send mail");
                                    die();
                                }
                            
                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            header("Location: ../index.php?message=some technical error please try again later");
                                die();
                            }
    


}

else {
    
 // header("Location: ../index.php?message=no user found  ");
    die();
}
?>