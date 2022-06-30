
<!--header start-->
<head>
<link rel="icon" href="images/2.png" type="image/x-icon">
</head>
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="dashboard.php" class="logo">
        Admin
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->

    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
       
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                
                <span class="username">&nbspAdmin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="dashboard.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <!--<li>
                    <a href="wallet.php">
                        <i class="fa fa-book"></i>
                        <span>wallet</span>
                    </a>
                    
                </li>-->
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Masters</span>
                    </a>
                    <ul class="sub">
                        <li><a href="city.php">Add City</a></li>
                        <li><a href="location.php">Add Location</a></li>
						<li><a href="hostel-facility.php">Add Hostel Facility</a></li>
						<li><a href="accommodation-type.php">Add Accommodation Type</a></li>
						
                    </ul>
                </li>
				 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Accommodation</span>
                    </a>
                    <ul class="sub">
					<li><a href="boking-request.php">Booking Requests</a></li>
					<li><a href="owner-request.php">Owner Requests</a></li>
                        <li><a href="add-accommodation.php">Add Accommodation</a></li>
                        <li><a href="add-image.php">Add Accommodation Images</a></li>
						
						
                        
                    </ul>
                </li>
				 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-product-hunt"></i>
                        <span>Products </span>
                    </a>
                    <ul class="sub">
					<li><a href="add-mess.php">Add Mess</a></li>
						<li><a href="product-category.php">Add Product Category</a></li>
                        <li><a href="add-products.php">Add Products</a></li>
                        
						<li><a href="bakery-request.php">Products Request</a></li>
						
                    </ul>
                </li> 
                </li> 
                	<li>
                    <a href="users.php">
                        <i class="fa fa-user"></i>
                        <span>Registration</span>
                    </a>
                </li>
                </li> 
                	<li>
                    <a href="refer-and-earn.php">
                        <i class="fa fa-user"></i>
                        <span>Refer and Earn</span>
                    </a>
                </li>
                	<li>
                    <a href="contacts.php">
                        <i class="fa fa-user"></i>
                        <span>Web Contact</span>
                    </a>
                </li>
                </li> 
                	<li>
                    <a href="feedback.php">
                        <i class="fa fa-user"></i>
                        <span>Feedback</span>
                    </a>
                </li>
				<li>
                    <a href="change-password.php">
                        <i class="fa fa-user"></i>
                        <span>Change Password</span>
                    </a>
                </li>

               
 
                
                <li>
                    <a href="logout.php">
                        <i class="fa fa-user"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->