<?php include('regserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Zoyozo Registration</title>
  <link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
<?php include("header.php") ?>
  <div class="header" style="width:70%">
  	<h2>Register in Zoyozo</h2>
  </div>
	
  <form style="width:70%" method="post" action="regregister.php" >
  	<?php include('regerrors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input style="width:100%" type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email id<br></label>
  	  <input style="width:100%" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input style="width:100%" type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input style="width:100%" type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button style="width:100%; background-color:#5F9EA0; color:white" type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="reglogin.php">Sign in</a>
  	</p>
  </form>
   <?php include("footer.php") ?>
</body>
</html>