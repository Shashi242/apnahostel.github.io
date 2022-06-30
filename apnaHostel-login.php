<!DOCTYPE html>
<head>
<title>ZOYOZO - Login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
$("#txtId").focus();

//Admin Login Start.....
   $("#btnMemberLogin").click(function(){
	 var id=$("#txtId").val();
   var pwd=$("#txtPassword").val(); 
	    
		$.ajax({
			 type:'post',
			 url:'login-action.php',
			 data: {'id':id,'pwd':pwd},
			 success: function(data)
			 {	 
			 
				 var x=parseInt(data);
				 if(x=="1")
				 {
					
				 window.location="./dashboard.php";
				 }
				 else
				 { 
				 $("#btnLogin").html("Login");
				 $("#error_disp_login").html(data); 
				 $("#error_disp_login").slideDown("slow");
				 $("#error_disp_login").slideUp(3000); 
				 }
			 }
			
		 });
	
  });
//Admin Login End.....
});
</script>
</head>
<body>
      <br><br><br><br>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4" style="background-color:#fec602">
      <br><br>
    <center>
        <a href="index.php"><img src="./logo.jpeg" width="250px" /></a>
         	<h2>User Login</h2>
    </center>

		<div class="form-group">
							   Enter Mobile Number *
                               <input class="form-control" placeholder="Enter Mobile Number" name="txtId" id="txtId" type="text" />
                                </div>
                                <div class="form-group">
                                    Enter Password *
                             <input class="form-control" placeholder="Enter Password" name="txtPassword" id="txtPassword" type="password" />
                                </div>
                                
								<center>
								<button type="button" id="btnMemberLogin"  class="btn btn-lg btn-primary">LOGIN NOW</button>
								</center>
		<p>Don't registered ?<a href="apnaHostel-registration.php" style="color:#000"><br>Register</a></p>
		<br>
			Note - All (*) marked fileds are required.
		
	<br><br>
</div>
  <div class="col-sm-4"></div>
</div>
	<br><br><br><br><br><br>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
