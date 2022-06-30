<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>ZOYOZO : For Hostels , Fooding , Hotels</title>
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
	 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
$(document).ready(function()
	{
		$("#btnMess").click(function(){
					
					
					var msg=$("#txtMsg").val();
					var orderId=$("#selected-mess-id").val();
				    $("#btnMess").prop("disabled", true);
						$.ajax({
							 type:'post',
							 url: 'order-product-action.php',
							 data: {'action':'add-order','msg':msg,'orderId':orderId},
							 success: function(data)
							 {    
							     $("#btnMess").prop("disabled",false);
								 $("#msg").html(data);
								 $("#msg").slideDown("slow");
								 $("#msg").slideUp(3000,function(){
									location.reload();
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
		$(".book-now-mess").click(function()
		{	
            var id=$(this).attr("id");
			$("#selected-mess-id").val(id);
			
		});
	});
</script>
	</head>

<body>
    <!-- banner -->
<?php include("header.php") ?>

    <!-- register -->
   
    <!-- //register -->
    <!-- services -->
    <div>
        <div class="container ">
            <div class="title-wthree text-center">
                <h1 class="text-black">
                    Meal service
                </h1>
                <span></span>
            </div>
            <div class="row" id="grid-hostels">
		
               	<?php 
                                    include "./conn.php";
									
									
                                    $sl=1;
                                    $sql="select * from tbl_mess where availability IN('AVAILABLE','NOT AVAILABLE') order by id desc ";
                                    $smt=mysqli_query($conn,$sql);
                                    while($rs=mysqli_fetch_assoc($smt))
                                    {
                                        
                                    ?>
                <div class="col-lg-3">
                    <div class="card" style="width:100%">
										
							<img class="card-img-top" src="images/mess.png"  alt="Card image" class="img-responsive" width="100%" style="height:308px"/>
							<div class="card-body">
							  <h4 class="card-title"><?php echo $rs['id']."-".$rs['title'] ?></h4>
							   <p class="card-text"><b>Monthly Rate</b> -<?php echo $rs['monthly_rate'] ?></p>
							  <p class="card-text"><b>Apna Hostel Price</b> -<?php echo $rs['zoyozo_rate'] ?></p>
							  <p class="card-text"><b>Delivery Area</b> -<?php echo $rs['delivery_area'] ?></p>
							   <p class="card-text" style="color:#067c06"> <b><span style="color:#000">Availability</span>-<?php echo $rs['availability'] ?></b></p>
							  
							  <?php
							  if(isset($_SESSION['cid']))
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
							    <a href="apnaHostel-login.php"><button  type="button" class="btn btn-primary details-hostel" >
                                 Order Now
                                </button></a>
                         <?php
                             	}
                             	?>
  <a href="mess-details.php?id=<?php echo $rs['id'];  ?>"><button  type="button" class="btn btn-primary details-hostel" >
    Details
  </button></a>
							</div>
						 </div>
                </div>
				<?php
                                       
                                       $sl++;
                                    }
                                    ?>
               
				
            </div></br>
			           
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
						<input type="text" class="form-control" id="selected-mess-id" readonly="readonly">
					  </div>
							  
					   <div class="form-group"style="color:black">
						<label for="message">Any Special Requirement:</label>
						<textarea type="text" class="form-control" id="txtMsg"></textarea>
					  </div>
					  <div class="form-group"style="color:black">
						<label for="phone">Have ZOYOZO Promo Code?:</label>
						<input type="text" class="form-control" id="OtxtCoupon">
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