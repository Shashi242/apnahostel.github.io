<?php include('regserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Zoyozo login</title>
  <link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login in Zoyozo</h2>
  </div>
	 
  <form method="post" action="reglogin.php">
  	<?php include('regerrors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="regregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>