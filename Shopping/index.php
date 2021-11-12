<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nam Shop</title>
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
								<li><a href="#"><i class="fa fa-phone"></i> 0339197445</a></li>
								<li><a href="" target="_blank"><i class="fa fa-envelope"></i>84CarModelATN@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-middle" style="background-color:	#111111">
			<div class="container" >
				<div>
					<div class="col-sm-6" >

					</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home ATN</a></li>
                               <li><a> <from class="navbar-from navbar-left" action="index.php?page=search" method="post>">
                                    <div class="from-group">
                                        <input type="text" class="from-control" placeholder="Company ANT" name="txtSearch">
                                    </div>
                                    <br>
                                    <button type="submit" class="Btn btn-default">Search<button>
                                    </from>
                                    </a>
                               </li>                    
                                <?php
                                    if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
                                ?> 
								<li class="dropdown"><a href="#">Management<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?page=Category_Management">Category Car</a></li>
                                        <li><a href="?page=Category_Management">Branch</a></li>
										<li><a href="?page=product_management">Edit Car</a></li>
                                    </ul>
                                    <?php
                                        }
                                     ?>
                                    <?php
                                   if (isset($_SESSION['us']) && $_SESSION['us']!=""){
                                       ?> 
                                       <li><a href="?page=update_customes">
                                       <i class="fa fa-lock"></i>ATN, <?php echo $_SESSION['us']?></a>
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
							</ul>
                            
						</div>
                        <marquee width="100%" behavior="scroll" bgcolor="white"><b>Welcome To ATN Car Model</b></marquee>
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
        elseif($page=="payment")
        {
            include_once("payment.php");
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
        <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>ATN Car Model</span></h2>
                        <p>Yellow Car<br>
                        Orange <br>
                        Red Car <br>
                        </p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/Bluemohinh " target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/watch?v=vUiPf1XvZSA" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>

</html>