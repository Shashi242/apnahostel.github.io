<?php                                                                                                                                                                                                                        session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    
    
    <link href="loggo.png" rel="icon" type="image/x-icon" />
    <title>Apna Hostel : For Hostel,Meal& Hotel</title>
  </head>

  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-custom text-center fixed-top"
    >
      <a class="navbar-brand" href="index.php" style="color: white"
        ><img class="logo p-2 m-1" style="width: 150px" src="logo.jpeg"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ul-class">
          <li class="nav-item mx-2">
            
          <li class="nav-item mx-2">
            <a class="nav-link" href="apna-hostel.php" style="color: white; font-size: 20px"
              >Find Hostel</a
            >
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="apnaHostel-mess.php" style="color: white; font-size: 20px"
              >Book Mess</a
            >
          </li>
          <!-- <li>
		  <a class="nav-link" href="comingsoon.php" style="color: white; font-size: 20px"
              >Find Hotel
            </a>
          </li> -->
          <?php
    if(isset($_SESSION['cid']))
	{
		?>
		
	
		 <li>
		  <a class="nav-link" href="dashboard.php" style="color:#f00; font-size: 20px"
              ><span class="glyphicon glyphicon-user"></span>My Account
            </a>
          </li>
          <li>
		  <a class="nav-link" href="logout.php" style="color:#ff0; font-size: 20px"
              >logout
            </a>
          </li>
		<?php
	}
	else
	{
          ?>
          <li>
		  <a class="nav-link" href="apnaHostel-registration.php" style="color: white; font-size: 20px"
              >Register
            </a>
          </li>
          <li>
		  <a class="nav-link" href="apnaHostel-login.php" style="color:#ff0; font-size: 20px"
              >Login
            </a>
          </li>
         <?php
	}
	?>
        </ul>
      </div>
    </nav>
    <section class="gradient my-5" style="background-image: linear-gradient(135deg, #78879a 10%, #b1c1ce 100%);
">
      <div class="container">
        <div class="row text-center align-items-center">
          <div class="col-12 col-md-6">
            <img
              class="w-100"
              src="aa-removebg-preview.png"
              alt="md sohail ahmad"
            />
          </div>
          <div class="col-12 col-md-6">
            <div
              class="font-weight-dark desktop mobile_screen_banner_text"
              style="color: white"
            >
              Welcome to <b><span style="color: rgb(0, 0, 0)">Apna Hostel</span></b>
            </div>
            <h2
              class="font-weight-dark mobile_screen_banner"
              style="color: white"
            >
              NO HOMESICKNESS!
            </h2>
          </div>
        </div>
      </div>
    </section>
   
	<!-- <div class="container-fluid bg-light">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  
          <div class="row px-3">
              <div class="col-12">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="c3.jpeg" class="d-block w-100 " alt="..." style="width: 100%;">
          </div>
          <div class="carousel-item">
            <img src="c2.jpeg" class="d-block w-100" alt="..." style="width: 100%;">
          </div>
          <div class="carousel-item">
            <img src="c1.jpeg" class="d-block w-100" alt="..." style="width: 100%; ">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      </div>
      </div>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  
      </div> -->

   
    <div class="container service" >
      <div class="col-12 text-center my-5">
        <h1 class="title_border"><b>Our Services</b></h1>
      </div>

      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="card card_center shadow" style="width: 18rem">
            <img
              src="istockphoto-1177943645-612x612.jpg"
              class="card-img-top"
              alt="..."
              style="height: 210px"
            />
            <div class="card-body">
              <h2 class="card-title text-center">Hostel</h2>

              <div class="text-center">
                <a
                  href="zoyozo-hostel.php"
                  class="btn gradient"
                  style="color: white; font-weight: bold"
                  >Book Hostel</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="card card_center shadow" style="width: 18rem">
            <img src="lunchbox.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h2 class="card-title text-center">Mess</h2>

              <div class="text-center">
                <a
                  href="zoyozo-mess.php"
                  class="btn gradient"
                  style="color: white; font-weight: bold"
                  >Book Mess</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-12 col-lg-4">
          <div class="card card_center shadow" style="width: 18rem">
            <img
              src="hotel.jpg"
              class="card-img-top"
              alt="..."
              style="height: 210px"
            />
            <div class="card-body">
              <h2 class="card-title text-center">Hotel</h2>

              <div class="text-center">
                <a
                  href="comingsoon.php"
                  class="btn gradient"
                  style="color: white; font-weight: bold"
                  >Coming Soon!</a
                >
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
	

    <div class="container">
      <div class="row">
        <div class="col-12 text-center my-5">
          <h1><b>Our Facilities</b></h1>
        </div>

        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-lightbulb fa-5x my-2 my-2"></i>
          <div><b>Electricity</b></div>
        </div>
        <div class="col-6 col-md-3 text-center text-center">
          <i class="fas fa-shield-alt fa-5x my-2"></i>
          <div><b>Security</b></div>
        </div>
        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-bread-slice fa-5x my-2"></i>
          <div><b>Breakfast</b></div>
        </div>

        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-bed fa-5x my-2"></i>
          <div><b>Spotless Linen</b></div>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-plug fa-5x my-2"></i>
          <div><b>Power Supply</b></div>
        </div>
        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-pump-soap fa-5x my-2"></i>
          <div><b>Regular Cleaning</b></div>
        </div>
        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-parking fa-5x my-2"></i>
          <div><b>2 Wheeler Parking</b></div>
        </div>

        <div class="col-6 col-md-3 text-center">
          <i class="fas fa-wifi fa-5x my-2"></i>
          <div><b>Wifi</b></div>
        </div>
      </div>
    </div>

    

    <!--Post our hostel-->

    <div>
	<?php
include("register.html");
?>
</div>
    <!--Testimonial-->

    <div class="slideshow-container">
      <div class="col-12 text-center">
        <h1 class="pt-5"><b>What people have to say?</b></h1>
      </div>

      <div class="mySlides">
        <img
          src="testimonial.png"
          style="
            height: 150px;
            width: 150px;
            object-fit: contain;
            border-radius: 50%;
            margin-right: 10px;
          "
        />
        <q>
        I was able to find very spacious and well-maintained service Hostel at a very affordable price using your service.
                  </q>
        <p class="author"><b>- Shubham Agrawal</b></p>
      </div>

      <div class="mySlides">
        <img
          src="testimonial.png"
          style="
            height: 150px;
            width: 150px;
            object-fit: contain;
            border-radius: 50%;
            margin-right: 10px;
          "
        />
        <q
          >
              Have to admit Apna Hostel is the best website for this service.
                  </q
        >
        <p class="author"><b>- Muskan Kumari</b></p>
      </div>

      <div class="mySlides">
        <img
          src="testimonial.png"
          style="
            height: 150px;
            width: 150px;
            object-fit: contain;
            border-radius: 50%;
            margin-right: 10px;
          "
        />
        <q>
           I recommend Apna Hostel to everyone who is looking to find the best hostels in different Cities.
                  </q>
        <p class="author"><b>- Sakshi Goyal</b> </p>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>

    <!--Contact-->

    <!--div class="container my-5">
      <div class="col-12 text-center">
        <h1><b>Contact</b></h1>
      </div>
      <form action="">
        <label for="fname">First Name</label>
        <input
          type="text"
          id="fname"
          name="firstname"
          placeholder="Your name.."
        />

        <label for="lname">Last Name</label>
        <input
          type="text"
          id="lname"
          name="lastname"
          placeholder="Your last name.."
        />

        <label for="email">Email</label>
        <input
          type="text"
          id="email"
          name="email"
          placeholder="Your email id"
        />

        <label for="subject">Your Message</label>
        <textarea
          id="subject"
          name="subject"
          placeholder="Write something.."
          style="height: 200px"
        ></textarea>

        <input type="submit" value="Submit" class="gradient" />
      </form>
    </div-->
	<div>
	<?php
include("contct.html");
?>
</div>
    
     <!--video section-->
    
    <footer>
      <div class="container-fluid my-5 bg-light p-5">
        <div class="row">
          <div class="col-12 text-center my-3">
		  <!-- <a href="https://www.instamojo.com/@zoyozo_sn/" target="_blank"  class="footer_anchor_decoration">
            <button class=" btn gradient" style="color: white; font-weight: bold" >Pay to zoyozo
			 
            </button>
			</a> -->
          </div>
          <div class="col-12 col-md-4 text-center">
            <h4>Quick Links</h4>
            <a href="aboutus.php" class="footer_anchor_decoration">About us </a><br />
            <a href="FAQ.php" class="footer_anchor_decoration">FAQ</a><br />
            
            <a href="#contactus" class="footer_anchor_decoration">Contact us</a><br />
          </div>
          <div class="col-12 col-md-4 text-center mt-5">
            <a href="#" target="_blank"  class="footer_anchor_decoration">Pay To Apna Hostel</a><br />
            <a href="#" class="footer_anchor_decoration">Customer Policy</a
            ><br />
            <a href="#" class="footer_anchor_decoration">Privacy Policy</a><br />
          </div>
          <div class="col-12 col-md-4 text-center my-5">
            <h4>Follow Us</h4>
            <a href="#" target="_blank" class="footer_anchor_decoration"
              ><i class="fab fa-facebook-square fa-2x fa-2x"></i></a>
            <a href="#" target="_blank"  class="footer_anchor_decoration"
              ><i class="fab fa-instagram-square fa-2x"></i
            ></a>
            <a href="#" target="_blank"  class="footer_anchor_decoration"
              ><i class="fa fa-envelope-square fa-2x"></i
            ></a>
            <a href="#" target="_blank"  class="footer_anchor_decoration"
              ><i class="fab fa-twitter-square fa-2x"></i
            ></a>
            <a href="#" target="_blank" class="footer_anchor_decoration"
              ><i class="fab fa-youtube-square fa-2x"></i
            ></a>
          </div>
        </div>
        <div class="col-12 text-center"> 
		<p>© 2019 Apna Hostel. All rights reserved | Powered by <b>"Apna Hostel Hospitality and Marketing"</b>
        <a href="#"><b>(Apna Hostel)</b></a>
        </p>
	     </div>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

   
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fb76377920fc91564c8d789/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  </body>
</html>
