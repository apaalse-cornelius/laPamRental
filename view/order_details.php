<?php
 include_once(dirname(__DIR__,1). '/functions/common_function.php');
  include_once(dirname(__DIR__,1). '/controllers/cart_controller.php');
  include_once(dirname(__DIR__,1). '/controllers/product_controller.php');
  include_once(dirname(__DIR__,1). '/settings/core.php');
 


getLinks();
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Order Details</title>

  <!-- For favicon png -->
  <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
       <!--font-awesome.min.css-->
       <link rel="stylesheet" href="assets/css/font-awesome.min.css">

       <!--linear icon css-->
   <link rel="stylesheet" href="assets/css/linearicons.css">

   <!--animate.css-->
       <link rel="stylesheet" href="assets/css/animate.css">

       <!--owl.carousel.css-->
       <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   
       <!--bootstrap.min.css-->
       <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   
   <!-- bootsnav -->
   <link rel="stylesheet" href="assets/css/bootsnav.css" >	
       
       <!--style.css-->
       <link rel="stylesheet" href="assets/css/style.css">
       
       <!--responsive.css-->
       <link rel="stylesheet" href="assets/css/responsive.css">

	       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

  



  
  
</head>

<style>
.qty{
  width: 60px;
  height: 30px;
  text-align: center;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.title{
   text-decoration: solid;
  
}



footer{
        
            bottom: 0;
            width: 100%;
            margin-top: auto;

        }

      

        .hand{
            cursor: pointer;
            border: double;
            background-color: #ccc;
        }

</style>

<body>
<?php

?>

<header id="home" class="welcome-hero">

			 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>

									<form action="product_search_result.php" role="search" method="get">
				                    <input type="search" class="form-control" name="search_data" placeholder="Search">
									<input type="hidden" value="Search"  class="btn btn-outline-dark" name="search_data_product" >
									</form>

				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

                <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li><!--/.search-->

									<?php 
									if(isset($_SESSION['id'])){
									?>
				                    <li class="dropdown">
				                        <a href="cart.php" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1"><?=countcartCtr($_SESSION['id']); ?></span>
				                        </a>
										
									

				                    </li><!--/.dropdown-->
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

							<?php
									}
							?>
						</div>



				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">LaPamRental</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class=""><a href="../index.php">home</a></li>
				                    <li class=""><a href="../index.php">products</a></li>
				                    <li class=""><a href="aboutus.php">About us</a></li>
				                    <li class=""><a href="../Login/register.php">Register</a></li>

									<?php   
									if(isset($_SESSION['id'])){
										echo "<li class='active'><a href='order_history.php' >Order History</a></li>";
										echo "<li><a href='../Login/logout.php'>Logout</a></li>";
										
									}else{
										echo "<li><a href='../Login/login.php'>Login</a></li>";
									}
									?>

				                    <!-- <li class="scroll"><a href="#newsletter">contact</a></li> -->
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->


        <?php
        // $select= selectallordercustomer($_SESSION['id']);

       // var_dump($select);
        
        ?>

        
<br><br>
<section id="new-arrivals" class="new-arrivals">
			<div class="container ">

<div class="title section-header ">
			<strong><h2>Details</h2></strong>
            <br>
				</div>

                <?php
                if(isset($_GET['id'])){
                    $orderid= $_GET['id'];
                    $result= selectallorderdetails_ctr($orderid);
                    
                    foreach($result as $results){
                        $productid= $results['product_id'];

                        $product= Oneprod($productid);

                  
                        echo '
                       
                        <div class="product-images p-4 ">
                        <div class="main-product-images">
                          <div class="product-image-display productImage1">
                              <img src="../images/'.$product['product_image'].'" alt="" style="max-width: 250px; max-height:250px; ">
                          </div>
                        
                          
                          
                        </div>
                        
                        
                        
                      </div>
                  
                  
                      <div class="product-text">
                          <h1 class="product-title"> Name:
                            '.$product['product_title'].'
                          </h1>
                          <h4 class="product-subtitle">
                            <span class="selectedProductColor"></span>
                          </h4>
                        <hr>
                          <p class="product-description">
                                 Description:       </p>
                          <p class="product-description">
                          '.$product['product_desc'].' 
                                  </p>
                          <p class="product-description"> Quantity:
                          '.$results['qty'].' 
                                  </p>

                  <br>
                  
                  <hr>
    
                  
                      </div>
                     
                  ';
                    }

              



                    //var_dump($result);

                    // $productid= $result['product_id'];
                    // $qty= $result['qty'];

                  //  print_r ($result);

                    // $prod= Oneprod($productid);
                }
                
                ?>
                <br>


                
<button class="btn btn-warning" onclick="window.location.href='order_history.php'">Return to Order History</button><br>
<!-- <a href="order_history.php" class="btn">Return to Order history</a> -->


<br><br>




            </div>
    </section>
 



<!--footer start-->
  <footer id="footer"  class="footer">
      <div class="container">
          <div class="hm-footer-copyright text-center">
              <div class="footer-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>	
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>	
              </div>
              <p>
                  &copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
              </p><!--/p-->
          </div><!--/.text-center-->
      </div><!--/.container-->

      <div id="scroll-Top">
          <div class="return-to-top">
              <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
          </div>
          
      </div><!--/.scroll-Top-->
      
  </footer><!--/.footer-->
  <!--footer end-->

</body>
<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>



		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
</html>