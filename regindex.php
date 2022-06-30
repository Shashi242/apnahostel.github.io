<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: reglogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: reglogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zoyozo</title>
	<link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
<?php include("header.php") ?>
<div class="header" style="width:70%">
	<h2>You are Signed in</h2>
</div>
<div class="content" style="width:70%">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome to <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="regindex.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
 <?php include("footer.php") ?>
		
</body>
</html>