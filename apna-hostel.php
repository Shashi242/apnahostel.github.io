                                                                                                            <?php session_start() ?>
																											<!DOCTYPE html>
<html lang="zxx">

<head>
<link href="loggo.png" rel="icon" type="image/x-icon" />
    <title>Apna Hostel : For Hostels , Fooding ,Hotels</title>
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
					$("#btnOrder1").click(function(){
					    
					var msg=$("#txtMsg").val();
					var orderId=$("#selected-hostel-id").val();
					var coupon=$("#OtxtCoupon").val();
				    $("#btnOrder1").prop("disabled", true);
				    
						$.ajax({
							 type:'post',
							 url: 'order-action.php',
							 data: {'action':'add-order','msg':msg,'orderId':orderId,'coupon':coupon},
							 success: function(data)
							 { 
							     $("#btnOrder1").prop("disabled",false);
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
		
			
			
	}
	
	
		$("#btnMore").click(function(){
					
						$.ajax({
							 type:'post',
							 url: 'more-hostels-action.php',
							 data: {'action':'more-hostel'},
							 success: function(data)
							 {    
								 $("#moreData").html(data);
								 $("#moreData").slideDown("slow");

								
							 }
							
						 });
					
				});
					function form_blank()
	{
		$("#OtxtName").val("");
		$("#OtxtMobile").val("");
		
			
			
	}
				
function getHostels()
	{
		
		
		var city=$("#selCity").val();
		var location=$("#selLocation").val();
		var type=$("#selType").val();
		
		$.ajax({
				 type:'post',
				 url: 'get-hostels.php',
				 data: {'location':location,'city':city,'type':type},
				 success: function(data)
				 {  
					
					 $("#grid-hostels").html(data);
					 $("#grid-hostels").slideDown("slow");
					 
				 }
				
			 });
	}
		$("#btnSearch").click(function()
		{	
			getHostels();
		});
		$(".book-now-hostel").click(function()
		{	
            var id=$(this).attr("id");
			$("#selected-hostel-id").val(id);
			
		});
		$(".details-hostel").click(function()
		{	
            var id=$(this).attr("id");
			$("#selected-hostel-id2").val(id);
			
		});
		
		

	
function getCat(catname)
{
	$.ajax({
				 type:'post',
				 url: 'search-action.php',
				 data: {'action':'cat','subcat':catname},
				  success: function(data)
				 {     
				 
				      $("#selLocation").html(data);
					  
            
				 }
				
			 });
}
	
	$("#selCity").change(function(){
	var catname=$("#selCity").val();
        getCat(catname);
		getHostels();
    });
	$("#selLocation").change(function(){
		getHostels();
    });
	$("#selType").change(function(){
		getHostels();
    });
    
    //Get sponeror name
$('#OtxtCoupon').on('input', function() {
	
		var coupon=$("#OtxtCoupon").val();
		var id=$("#selected-hostel-id").val();
		
        		$("#oMsg").html(coupon+id);
        		
        		$.ajax({
        			 type:'post',
        			 url:'check-promo-code.php',
        			 data: {'id':id,'coupon':coupon},
        			 success: function(data)
        			 {	 
        			     
        				$("#oMsg").html(data);
        				 
        			 }
        			
        		 });
        	
          } );
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
           </br></br>
           <nav class="navbar bg-light">
		   <div class="navbar-header">
      <a class="navbar-brand" href="#"><h3>Start Searching</h3></a>
    </div>
  <div class="form-inline">
  
   <select name="selCity" id="selCity" class="form-control mr-sm-2">
                          <option selected="selected">Select City</option>
                          <?php
								include "./conn.php";
								
								$sl=1;
								$sql="select * from tbl_city";
								$smt=mysqli_query($conn,$sql);
								while($rs=mysqli_fetch_assoc($smt))
								{
								?>
									<option value="<?php echo $rs['name']; ?>"><?php echo $rs['name']; ?></option>
									<?php
								}
						  ?>
                        </select>
  <select name="selLocation" id="selLocation" class="form-control mr-sm-2">
                          <option selected="selected" value="all">Select Location</option>
                         <?php
								include "./conn.php";
								
								$sl=1;
								$sql="select * from tbl_location";
								$smt=mysqli_query($conn,$sql);
								while($rs=mysqli_fetch_assoc($smt))
								{
									?>
									<option value="<?php echo $rs['name']; ?>"><?php echo $rs['name']; ?></option>
									<?php
								}
						  ?>
                        </select>
						 <select name="selType" id="selType" class="form-control">
                          <option selected="selected">Select Type</option>
                          <option>All</option>
                          <?php
								include "/conn.php";
								
								$sl=1;
								$sql="select * from tbl_type";
								$smt=mysqli_query($conn,$sql);
								while($rs=mysqli_fetch_assoc($smt))
								{
									?>
									<option value="<?php echo $rs['type']; ?>"><?php echo $rs['type']; ?></option>
									<?php
								}
						  ?>
                        </select>
   
   
 
    <button class="btn btn-outline-success my-2 my-sm-0" id="btnSearch" type="button">Go</button> 
  </div>
</nav>
<!--Results-->
        <div class="container "></br></br>
            <div class="title-wthree text-center">
                <h2 class="agile-title   text-black">
                    Search Results
                </h2>
                <span></span>  
            </div>
            <div class="row" id="grid-hostels">
		
               	<?php 
                                include "./conn.php";
									
									
                                    $sl=1;
                                    $sql="select * from tbl_accomodation where availability IN('AVAILABLE','NOT AVAILABLE','FILLING FAST')  order by accid asc ";
                                    $smt=mysqli_query($conn,$sql);
                                    while($rs=mysqli_fetch_assoc($smt))
                                    {
                                        
                                    ?>
                <div class="col-lg-3">
                    <div class="card" style="width:100%">
					<?php
					$filename="dashboard/uploads/".$rs['img_url']; 
					?>					
							<img class="card-img-top" src="<?php echo $filename;  ?>"  alt="Card image" class="img-responsive" width="100%" style="height:308px"/>
							<div class="card-body">
							  <h4 class="card-title"><?php echo $rs['accid']."-".$rs['title'] ?></h4>
							  <p class="card-text"><b>Near By</b> -<?php echo $rs['near_by'] ?></p>
							  <p class="card-text"><b>Monthly Rent</b> -<?php echo $rs['monthly_rent'] ?></p>
							  <p class="card-text"><b>Apna Hostel Price</b> -<?php echo $rs['zoyozo_rent'] ?></p>
							  <p class="card-text" style="color:#067c06"> <b><span style="color:#000">Availability</span>-<?php echo $rs['availability'] ?></b></p>
							  <p class="card-text" style="color:red"><b><?php echo $rs['monthly_rent']-$rs['zoyozo_rent']?> Rs. Discount</b></p>
							 
							   <?php 
							  if(isset($_SESSION['cid']))
                             	{
                             	    ?>
                             	    
                             	    <button id="<?php echo $rs['accid']; ?>" type="button" class="btn btn-success book-now-hostel" data-toggle="modal" data-target="#myModal">Book Now
                                    </button>
                             	    <?php
                             	}
                             	else
                             	{
							 ?>
							   <a href="apnaHostel-login.php"><button  type="button" class="btn btn-primary details-hostel" >
    Book Now
  </button></a>
							       <?php
                             	}
                             	?>
  <a href="acc-details.php?id=<?php echo $rs['accid'];  ?>"><button  type="button" class="btn btn-primary details-hostel" >
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
        

<!-- // Results-->        </div>

    </div>
  <!--  <center><button type="button" id="btnMore" class="btn btn-info">Click For More</button></center>
        <div id="moreData">
            
            </div> -->
    </br>
	 <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Booking Request Form</h4>
         
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		            <div class="form-group" style="color:black">
						<label for="name">You Selected(Hostel ID):</label>
						<input type="text" class="form-control" id="selected-hostel-id" readonly="readonly">
					  </div>
							 
					  <div class="form-group"style="color:black">
						<label for="message">Any Special Requirement:</label>
						<textarea type="text" class="form-control" id="txtMsg"></textarea>
					  </div>
					  <div class="form-group form-check"style="color:black">
						
					  </div>
					  <div class="form-group"style="color:black">
						<label for="phone">Have ZOYOZO Promo Code?:</label>
						<input type="text" class="form-control" id="OtxtCoupon">
						<span id="oMsg"></span>
					  </div>
					  <div id="msg"></div>
					  <button type="button" class="btn btn-primary" id="btnOrder1">SUBMIT</button>&nbsp
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
        </div>
        
      </div>
    </div>
  </div>
   
   
   
     <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Description</h4>
         
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		            <div class="form-group" style="color:black">
						<label for="name">You Selected(Hostel ID):</label>
						<input type="text" class="form-control" id="selected-hostel-id2" readonly="readonly">
					  </div>
						 
					   <p class="card-text"><b>Facilities</b> -<?php echo $rs['facility'] ?></p>
					  
					  <div class="form-group form-check"style="color:black">
						
					  </div>
					 
					
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
        </div>
        
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