<?php
include('includes/db.inc.php');
session_start();
  if(isset($_POST['login_btn']))
  {
    if((!empty(trim($_POST['emailid']))) && (!empty(trim($_POST['pwd']))))
    {
        $email=mysqli_real_escape_string($conn,$_POST['emailid']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        
        $loginquery="select * from customers where email='$email' and password='$pwd' LIMIT 1";
        $sqlrun=mysqli_query($conn,$loginquery);

        if(mysqli_num_rows($sqlrun)>0)
        {
            $row=mysqli_fetch_array($sqlrun);
            if($row['verify_status']=="1")
            {
                $_SESSION['authenticated']=TRUE;
                $_SESSION['auth_user']=[
                    'name'=>$row['name'],
                    'address'=> $row['address'],
                    'phone'=>$row['phone'],
                    'email'=>$row['email'],

                ];
                header("Location:index.php");
                exit(0);
            }
            else
            {
                $_SESSION['status']="Please verify your email address to login";
                header("Location:login.php");
                exit(0);
            }


        }
        else
        { 
            $_SESSION['status']="Invalid email or password";
            header("Location:login.php");
            exit(0);

        }
    }
    else
    {
        $_SESSION['status']="Please enter all the fields";
        header("Location:login.php");
        exit(0);
    }
   

  }

?>