<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';  
include('includes/db.inc.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
function emailverify($name,$email,$verify_token)
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
    $mail->setFrom('emailnivee@gmail.com', $name);
    $mail->addAddress($email); 
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Login Verification Link';
    $email_template="
    <h2>You have successfully registered with AppleBee</h2>
    <h5>Verify your email address with the below link</h5>
    <br/><br/>
    <a href='http://165.232.67.192/verify_email.php?token=$verify_token'>Click Me</a>";
    $mail->Body=$email_template;
    $mail->send();

    
}

if(isset($_POST['register_btn']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $zip=$_POST['zip'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['newpwd'];
    $cpwd=$_POST['confirmpwd'];
    $verify_token=md5(rand());
  
    
    $check_email="select email from customers where email='$email';";
    $sql=mysqli_query($conn,$check_email);
    if(mysqli_num_rows($sql)>0)
    {
        $_SESSION['status']="Email id already exists";
         header("Location:register.php");
    }
    else{

        if($password==$cpwd){
       $query="insert into customers(name,address,zip,phone,email,password,verify_token)values('$name','$address','$zip','$phone','$email','$password','$verify_token')";
       $sql=mysqli_query($conn,$query);

       if($sql)
        {
            emailverify("$name","$email","$verify_token");
            $_SESSION['status']="Registration successful,Please verify your email-id";
             header("Location:register.php");
       }
        else{
            $_SESSION['status']="Registration failed";
            header("Location:register.php");
        }

      }
       else{
        $_SESSION['status']="Passwords do not match";
        header("Location:register.php");
         }



   }










 

}

?>