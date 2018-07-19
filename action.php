<?php

$smsg="";	//success message
$fmsg="";	//failure message
$success=0;


// check If the values are posted,
if (isset($_POST) & !empty($_POST))
    {
        $username = mysqli_real_escape_string($connection,$_POST['username']);
		$email = mysqli_real_escape_string($connection,$_POST['email']);
		$usernamesql = "SELECT * FROM `user` WHERE username='$username'";
		$emailsql = "SELECT * FROM `user` WHERE email='$email'";
		$result1 = mysqli_query($connection,$usernamesql);
		$result2 = mysqli_query($connection,$emailsql);
        
		if(mysqli_num_rows($result1)>0){$fmsg.="username already exists";}
        elseif(mysqli_num_rows($result2)>0){$fmsg.="Email already exists";}
		else{

		//check if password and retype password field matches
        if($_POST['password']==$_POST['retypepassword'])
            {
            // encrypt the password using md5
            $password = md5($_POST['password']);
     
            $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
            $result = mysqli_query($connection, $query);
            if($result){
                $smsg.= "User Created Successfully. ";
                
            	}
            else{
                $fmsg.= "User Registration Failed. " ;
            	}
            }
        else{
            $fmsg.= 'password do not match';
            }
    }
}
?>