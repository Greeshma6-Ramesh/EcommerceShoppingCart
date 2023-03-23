
<?php include('includes/db.inc.php'); ?>
<?php 

if(isset($_POST['email']))

	{
		$emailId=$_POST['email'];
		 
		$checkdata="SELECT * FROM customers WHERE email = '$emailId'";
		 
		$query=mysqli_query($conn,$checkdata);
		if (!filter_var($emailId, FILTER_VALIDATE_EMAIL))
		{
			echo "Invalid email format"; 
		}
		else
		{  
		   if(mysqli_num_rows($query)>0){
			echo  "Email Already Exist";
		   }
		  else{
				echo "Email available";
			}
	    }
		exit();
    }

    

        
		
		

    


    ?>