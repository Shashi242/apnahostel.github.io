<?php include('regserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Zoyozo login</title>
  <link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
<?php include("header.php") ?>
  <div class="header" style="width:70%">
  	<h2>Login in Zoyozo</h2>
  </div>
	 
  <form style="width:70%" method="post" action="reglogin.php">
  	<?php include('regerrors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input style="width:100%" type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input style="width:100%" type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button style="width:100%; background-color:#5F9EA0; color:white" type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="regregister.php">Sign up</a>
  	</p>
  </form>
  <?php include("footer.php") ?>
</body>
</html>