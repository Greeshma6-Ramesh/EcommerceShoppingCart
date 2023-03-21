<?php
session_start();
include('includes/db.inc.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';  
include('includes/db.inc.php');

function send_password_link($getname,$getemail,$token)
{

    $mail = new PHPMailer(true);
    $mail->SMTPDebug=0;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'emailnivee@gmail.com';                     //SMTP username
    $mail->Password   = 'phjkzvbspesmihtu';
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;          
    $mail->setFrom('emailnivee@gmail.com', $getname);
    $mail->addAddress($getemail); 
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reset password Notification   ';
    $email_template="
    <h2>Hello</h2>
    <h5>You have received this email as you requested for a password reset link for your account</h5>
    <br/><br/>
    <a href='http://165.232.67.192/passwordchange.php?token=$token&email=$getemail'>Click Me</a>";
    $mail->Body=$email_template;
    $mail->send();

}






if(isset($_POST['reset_btn']))
{
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $token=md5(rand());

    $checkemail="select email from customers where email='$email' LIMIT 1";
    $sql=mysqli_query($conn,$checkemail);
    if(mysqli_num_rows($sql)>0)
    {
          $row=mysqli_fetch_array($sql);
          $getname=$row['name'];
          $getemail=$row['email'];

          $updatetoken="update customers set verify_token='$token' where email='$getemail' LIMIT 1";
          $sql=mysqli_query($conn,$updatetoken);
          if($sql)
          {
                  send_password_link($getname,$getemail,$token);
                  $_SESSION['status']="Password reset link sent to your email-id ";
                 header("Location:passwordreset.php");
                 exit(0);

          }
          else
          {
            $_SESSION['status']="Something went wrong";
            header("Location:passwordreset.php");
            exit(0);
          }
    }
    else
    {
        $_SESSION['status']="Email not found";
        header("Location:passwordreset.php");
        exit(0);
    }

}


if(isset($_POST['pwdupdate']))
{
    $email=mysqli_real_escape_string($conn,$_POST['emailid']);
    $pwd=mysqli_real_escape_string($conn,$_POST['newpwd']);
    $npwd=mysqli_real_escape_string($conn,$_POST['confirmpwd']);
    $token=mysqli_real_escape_string($conn,$_POST['pwdtoken']);

    if(!empty($token))
    {
        if(!empty($token) && !empty($pwd) && !empty($email) && !empty($npwd))
        {
             $checktoken="select verify_token from customers where verify_token='$token' LIMIT 1"; 
             $sql=mysqli_query($conn,$checktoken);
             if(mysqli_num_rows($sql)>0)
             {
                if($pwd==$npwd)
                {
                       $updatepwd="update customers set password='$pwd' where verify_token='$token' LIMIT 1";
                       $sqlrun=mysqli_query($conn,$updatepwd);

                       if($sqlrun)
                       {
                        $newtoken=md5(rand());
                        $updatepwdtoken="update customers set verify_token='$newtoken' where verify_token='$token' LIMIT 1";
                        $sqlruntoken=mysqli_query($conn,$updatepwdtoken);
                       
                        $_SESSION['status']="Password successfully changed";
                        header("Location:login.php");
                        exit(0);
                       }
                       else
                       {
                        $_SESSION['status']="Password not updated, something went wrong";
                        header("Location:passwordchange.php?token=$token&email=$email");
                       exit(0);
                       }

                }
                else{
                    $_SESSION['status']="Passwords do not match";
                    header("Location:passwordchange.php?token=$token&email=$email");
                   exit(0);
                }

             }
             else
             {
                $_SESSION['status']="Invalid token";
                header("Location:passwordchange.php?token=$token&email=$email");
               exit(0);
             }

        }
        else
        {
            $_SESSION['status']="All fields are mandatory";
            header("Location:passwordchange.php?token=$token&email=$email");
           exit(0);
        }

    }
    else
    {
        $_SESSION['status']="Invalid ,verify your email";
        header("Location:passwordchange.php");
        exit(0);
    }



}
?>