    
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
         
          <?php

    if(isset($_SESSION['cid']))
	{
		?>
		
		  <a class="nav-link" href="dashboard.php" style="color:#ff0; font-size: 20px"
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
    <section class="gradient my-5" style="background-image: linear-gradient(135deg, #78879a 10%, #b1c1ce 100%);">
      <div class="container">
        <div class="row text-center align-items-center">
          <div class="col-12 col-md-6">
            <img
              class="w-100"
              src="aa-removebg-preview.png" style="margin-top: 25px;"
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