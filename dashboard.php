<?php session_start(); 
$cid=$_SESSION['cid'];
include "./conn.php";
									
$sql="select * from candidate where mobile='$cid'";
$smt=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($smt);


function getWalletBalence($cid)
{
    include "./conn.php";
    $bal=0.00;								
    $sql="select * from candidate where mobile='$cid'";
    $smt=mysqli_query($conn,$sql);
    $rs=mysqli_fetch_assoc($smt);
    if($rs>0)
    {
        $bal=$rs['wallet'];
    }
return(number_format($bal,2));
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Apna Hostel : For Hostels , Fooding , Hotels</title>
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
					
					var name=$("#OtxtName").val();
					var mobile=$("#OtxtMobile").val();
					var msg=$("#txtMsg").val();
					var orderId=$("#selected-mess-id").val();
				
						$.ajax({
							 type:'post',
							 url: 'order-product-action.php',
							 data: {'action':'add-order','name':name,'mobile':mobile,'msg':msg,'orderId':orderId},
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
                <!-- <h1 class="text-black">
                    Welcome 
                </h1> -->
                <span></span>
            </div>
            <div class="row" style="margin:20px">
               <h2>Hostel Request</h2><br>
               <hr>
               <table border="1" width="100%">
                   <tr style="background-color:#00f;color:#fff">
                       <td>SL</td>
                       <td>Order ID</td>
                       <td>Order Date</td>
                       <td>Hostel ID</td>
                       <td>Name</td>
                       <td>Mobile</td>
                       <td>Promocode</td>
                       <td>Comment</td>
                   </tr>
                   	<?php 
                                    include "./conn.php";
									
									
                                    $sl=1;
                                    $sql="select * from tbl_renter_request where mobile='$cid' order by req_id desc limit 5";
                                    $smt=mysqli_query($conn,$sql);
                                    while($rs=mysqli_fetch_assoc($smt))
                                    {
                                      echo "<tr>";  
                                        echo "<td>".$sl."</td>"; 
                                         echo "<td>".$rs['req_id']."</td>";
                                          echo "<td>".$rs['date']."</td>";
                                         echo "<td>".$rs['accid']."</td>";
                                         echo "<td>".$rs['name']."</td>";
                                         echo "<td>".$rs['mobile']."</td>";
                                         echo "<td>".$rs['promocode']."</td>";
                                         echo "<td>".$rs['message']."</td>";
                                      echo "</tr>";  
                                      $sl=$sl+1;
                                    }
                ?>
               </table>   
               
               <br><br><br><br>
               
               <div>
              <h4 style="color:#8b5c7e;margin-left:0px">Refer and Earn upto Rs. 500 /- : Get Your Referral Link</h4>
              Copy this link and share to others.Ask them to register @ Apna Hostel.
              <div style="background-color:#DFE3EE;padding:10px;border-radius:5px"><a style="color:#00f" href="http://www.zoyozo.in/zoyozo-registration.php?sponser=<?php echo $cid?>" target="_blank" >http://www.apnaHostel.in/apnaHostel-registration.php?sponser=<?php echo $cid?></a></div>   
              
              <br>
              <h4 style="color:#8b5c7e;margin-left:0px">Referral Wallet</h4>
              <div style="background-color:#DFE3EE;padding:10px;border-radius:5px">
                  <?php echo getWalletBalence($cid); ?>
              </div> 

                               
        </div> 
                
              
				
            </div>
			      <center>
                   <a href="index.php"><button type="button" class="btn btn-danger">Logout</button></a>
               </center>      
        </div>
    </div>
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
							  <div class="form-group" style="color:black">
						<label for="name">Name:</label>
						<input type="text" class="form-control" id="OtxtName">
					  </div>
					  <div class="form-group"style="color:black">
						<label for="phone">Mobile:</label>
						<input type="text" class="form-control" id="OtxtMobile">
					  </div>
					   <div class="form-group"style="color:black">
						<label for="message">Any Special Requirement:</label>
						<textarea type="text" class="form-control" id="txtMsg"></textarea>
					  </div>
					  <div class="form-group"style="color:black">
						<label for="phone">Have ZOYOZO Coupon?:</label>
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