<?php
	require('connection.php');
    
    require('action.php');
?>

<html>
<head>
<title>Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<link rel="stylesheet" href="styles.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="bg-success">

  <?php
    if(isset($smsg)& !empty($smsg))
    {
    echo'<div class="alert alert-success">
    <strong>Congrats!  </strong>' . "$smsg".'
    </div>';
    }
    elseif(isset($fmsg)& !empty($fmsg))
    {
    echo '<div class="alert alert-danger">
    <strong>Attention!  </strong>' ."$fmsg".'
    </div>';
    }
    else
    {
    echo '<div class="alert alert-info">  <strong>Resistration page</strong></div>';
    }
    ?>

<div class="container col-lg-4 col-lg-offset-4 align-middle " style="border:6px solid #cecece;" >
      <form class="form-signin" method="POST">
        <div class = "form-group">
            &nbsp&nbsp
        <h2 class="form-signin-heading">Please Register</h2>
        &nbsp&nbsp&nbsp
        <div class="input-group">
	    <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" value="<?php if(isset($username)& !empty($username)){echo $username;} ?>" required>
	</div>
    &nbsp

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="<?php if(isset($email)& !empty($email)){echo $email;} ?>" required autofocus>&nbsp
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        &nbsp&nbsp
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="retypepassword" id="inputPassword" class="form-control" placeholder="Retype Password" required>
        &nbsp&nbsp&nbsp
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </div>
      </form>
</div>





</body>
</html>