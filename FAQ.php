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

	</head>

<body>
<?php include("header.php") ?>
</div>
    <div class="container">
      <h2 class="mb-3"><strong>Frequently Asked Questions</strong></h2>
      <hr />

      <div id="">
        <div class="b" style="background-color:#2f4f4f;color:White;">
          <h4>What is ZOYOZO?</h4>
          <div style="color:White;">
            Zoyozo is a hostel & lodges aggregation based model that helps
            customers(especially students) to book online your own rooms and
            meals with good facilities by using the zoyozo app.
          </div>
        </div>

        <div class="b" style="background-color:#2f4f4f;color:White;">
          <h4>What all covered in ZOYOZO?</h4>
          <div style="color:White;">Go through the website (www.zoyozo.in) or mobile app.</div>
        </div>

        <div class="b" style="background-color:#2f4f4f;color:White;">
          <h4>How to login on ZOYOZO?</h4>
          <div style="color:White;">
            You need to register first on App or web site. Valid email-id is
            necessary to register.
          </div>
        </div>

        <div class="b" style="background-color:#2f4f4f;color:White;">
          <h4>Who is Guest? </h4>
          <div style="color:White;">
          Guest is a user of ZOYOZO,who can book the properties and mess that
            are available.
          </div>
        </div>

        <div class="b" style="background-color:#2f4f4f;color:White;">
          <h4>Who is Host?</h4>
          <div style="color:White;">
            Host is the owner of one or more properties that are showcased on
            ZOYOZO platform. Host also can choose/book his stay as anyother guest.
            
          </div>
        </div>

       
      </div>
    </div>

    < <!-- //contact -->
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