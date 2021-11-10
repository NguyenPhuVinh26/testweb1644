<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/style2.css">

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
 
    <link href="csseshop/bootstrap.min.css" rel="stylesheet">
    <link href="csseshop/font-awesome.min.css" rel="stylesheet">
    <link href="csseshop/prettyPhoto.css" rel="stylesheet">
    <link href="csseshop/price-range.css" rel="stylesheet">
    <link href="csseshop/animate.css" rel="stylesheet">
	<link href="csseshop/main.css" rel="stylesheet">
	<link href="csseshop/responsive.css" rel="stylesheet">
    
    <link href="css/salomon.css" rel="stylesheet">
    

	<script src="js/jquery-3.2.0.min.js"/></script>
    <script src="js/jquery.dataTables.min.js"/></script>
    <script src="js/dataTables.bootstrap.min.js"/></script>
    
</head>

<body>
<?php
    session_start();
    include_once("connection.php"); 
  ?>

   <header id="header">
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0788789025</a></li>
								<li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fa fa-envelope"></i>vinhnpgcc19003@fpt.edu.vn</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="header-middle" style="background-color:	#777777">
			<div class="container" >
				<div>
					<div class="col-sm-6" >
						<div class="logo pull-left" >
                            <a href="index.php" style="background-color:#;color:#FFF">ATN
                            <img src="img/logodochoi.png" width="50" height="40"></a>
						</div>
					</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
                                <?php
                                    if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
                                ?> 
								<li class="dropdown"><a href="#">Management<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?page=Category_Management">Category</a></li>
										<li><a href="?page=product_management">Product</a></li>
                                    </ul>
                                    <?php
                                        }
                                     ?>
                                    <?php
                                   if (isset($_SESSION['us']) && $_SESSION['us']!=""){
                                       ?> 
                                       <li><a href="?page=update_customes">
                                       <i class="fa fa-lock"></i>Hi, <?php echo $_SESSION['us']?></a>
                                        </li>
                                           <li><a href="?page=logout">
                                            <i class="fa fa-crosshairs"></i>Logout</a></li>
                                <?php
                                        }
                                        else
                                        {
                                    ?>
                                <li><a href="?page=login" >
                                <i class="fa fa-lock"></i>Login</a></li>
                                <li><a href="?page=register">
                                <i class="fa fa-star"></i>Register</a></li>
                                <?php
                                        }
                                        ?>
                                </li> 
								<form class="navbar-form navbar-left" action="index.php?page=search" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="txtSearch">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                        </form>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</header>
  
    <?php
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
        if($page=="register")
        {
            include_once("Register.php");
        }
        elseif($page=="login")
        {
            include_once("Login.php");
        }
        elseif($page=="search")
        {
            include_once("Search.php");
        }
        elseif($page=="Category_Management")
        {
            include_once("Category_Management.php");
        }
        elseif($page=="product_management")
        {
            include_once("Product_Management.php");
        }
        elseif($page=="Add_Category")
        {
            include_once("Add_Category.php");
        }
        elseif($page=="update_category")
        {
            include_once("Update_Category.php");
        }
        elseif($page=="category_management")
        {
            include_once("Category_Management.php");
        }
        
        elseif($page=="logout")
        {
            include_once("Logout.php");
        }
        elseif($page=="update_product")
        {
            include_once("Update_Product.php");
        }
        elseif($page=="add_product")
        {
            include_once("Add_Product.php");
        }
        elseif($page=="update_customes")
        {
            include_once("Update_customer.php");
        }
    } 
    else{
        include("Content.php");
    }
	?>
    </div> 
    
    </div> 
   
    <script src="https://code.jquery.com/jquery.min.js"></script>
    

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    

    <script src="js/jquery.easing.1.3.min.js"></script>
    

    <script src="js/main.js"></script>

    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
    

    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css"></script>   
            </ul>
        </div>       
        
<footer class="text-center text-lg-start bg-light text-muted">
  
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/profile.php?id=100012763472006" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.facebook.com/profile.php?id=100012763472006" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.facebook.com/profile.php?id=100012763472006" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.facebook.com/profile.php?id=100012763472006" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.facebook.com/profile.php?id=100012763472006" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://www.facebook.com/profile.php?id=100012763472006" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>ATN Company
          </h6>
          <p>
          Children's toys are one of the best things that parents want to bring to their baby when the little angel comes to the family.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Lego</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Superman</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Lego house</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Bear Lego</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="https://www.facebook.com/profile.php?id=100012763472006" class="text-reset">facebook</a>
          </p>
          <p>
            <a href="https://www.youtube.com/watch?v=FuFWzLFgIRE&t=1s" class="text-reset">youtube</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p> Address: Ho Chi Minh City </p>
          <p>
            
            Email: vinhnpgcc19003@fpt.edu.vn
          </p>
          <p>Phone: + 0788789025</p>
          <p>Phone: + 0976783842</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">NguyenPhuVinh.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer --> 
</body>

</html>