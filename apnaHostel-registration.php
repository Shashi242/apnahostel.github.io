<?php
$sponser="";
if(isset($_GET['sponser']))
{
    $sponser=$_GET['sponser'];
}
?>
<!DOCTYPE html>
<head>
<title>New Apna_Hostel - Register </title>
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

//$("#txtCid").focus();
setTimeout(function() {
$("#txtCid").trigger('click');
},10);

//Get Sponser
$('#txtCid').on('input', function() {
		var Cid=$("#txtCid").val();
		
		$.ajax({
			 type:'post',
			 url:'get-sponser.php',
			 data: {'Cid':Cid},
			 success: function(data)
			 {	 
			 
				 $("#txtSponserName").html(data);
				 
			 }
			
		 });
	
} );
$('#txtCid').on('click', function() {
		var Cid=$("#txtCid").val();
		
		$.ajax({
			 type:'post',
			 url:'get-sponser.php',
			 data: {'Cid':Cid},
			 success: function(data)
			 {	 
			 		 
				 $("#txtSponserName").html(data);
				 
			 }
			
		 });
	
} );

//Admin Login Start.....
   $("#btnRegister").click(function(){
     
	 var cid=$("#txtCid").val();
     var name=$("#txtName").val(); 
     var mobile=$("#txtMobile").val(); 
     var aadhar=$("#txtAadhar").val(); 
     
		$.ajax({
			 type:'post',
			 url:'registration-action.php',
			 data: {'action':'registration','cid':cid,'name':name,'mobile':mobile,'aadhar':aadhar},
			 success: function(data)
			 {	 
			 
				 alert(data);
				 $("#btnRegister").html("Register");
				 $("#error_disp_register").html(data); 
				 $("#error_disp_register").slideDown("slow");
				 $("#error_disp_register").slideUp(8000); 
				 $("#txtCid").val("");
                 $("#txtName").val(""); 
                 $("#txtMobile").val(""); 
                 $("#txtAadhar").val(""); 
                 $("#txtCid").focus();
				 
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
  <div class="col-sm-4">&nbsp;</div>
  <div class="col-sm-4" style="background-color:#fec602;margin:50px">
      <br><br>
    <center>
        <a href="index.php"><img src="./logo.jpeg" width="250px" /></a>
         	<h2>Register</h2>
    </center>
		                  <div class="form-group">
							   Enter Sponser/Reference Mobile Number(If any)
                               <input class="form-control" placeholder="Enter Reference Mobile" name="txtCid" id="txtCid" type="text" value="<?php echo $sponser; ?>" />
                               
                         </div>
                         
                       
                         <div class="form-group">
							   Enter Name *
                               <input class="form-control" placeholder="Enter Name" name="txtName" id="txtName" type="text" />
                         </div>
                         <div class="form-group">
							   Enter Mobile Number *
                               <input class="form-control" placeholder="Enter Mobile" name="txtMobile" id="txtMobile" type="text" />
                         </div>
                         <div class="form-group">
							   Password *
                               <input class="form-control" placeholder="Enter Password" name="txtAadhar" id="txtAadhar" type="password" />
                         </div>
                                
                                <div id="error_disp_register"></div>
								<center>
								<button type="button" id="btnRegister"  class="btn btn-lg btn-primary">Register</button>
								</center><br>
		<p>Allready registered ?<a href="apnaHostel-login.php" style="color:#000">Login</a>
		<br><br>
	
		</p>
			Note - All (*) marked fileds are required.
	
<br><br>
</div>
  <div class="col-sm-4">&nbsp;</div>
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
