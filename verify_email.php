<?php
session_start();
include('includes/db.inc.php');
if(isset($_GET['token']))
{
  $token=$_GET['token'];
  $query="select verify_token,verify_status from customers where verify_token='$token' LIMIT 1";
  $sql=mysqli_query($conn,$query);

if(mysqli_num_rows($sql)>0)
{
    $row=mysqli_fetch_array($sql);
    if($row['verify_status']==0)
    {
          $updateToken=$row['verify_token'];
          $updatequery="update customers set verify_status=1 where verify_token='$updateToken' LIMIT 1";
          $queryrun=mysqli_query($conn,$updatequery);
          if($queryrun)
          {
            $_SESSION['status']="Email has been verified successfully";
            header("Location:login.php");
            exit(0);   
          }
         else{
              
            $_SESSION['status']="Verification failed";
            header("Location:login.php");
            exit(0);
             }
    }   
   else{
       $_SESSION['status']="Email already verified,please login";
       header("Location:login.php");
       exit(0);
       }
}
else
{
    $_SESSION['status']="This token does not exist";
    header("Location:login.php");
    exit(0);
}
}
else{
    $_SESSION['status']="Authentication failed";
    header("Location:login.php");
}


?>