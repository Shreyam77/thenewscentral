<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>The News Central</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
	
	<link href="fonts/ionicons.css" rel="stylesheet">
	
		
	<link href="common/styles.css" rel="stylesheet">
	
	<link rel="icon" href="images/favicon.ico">

</head>
<body>
	
	<header>
		<div class="bg-191">
			<div class="container">	
				<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
				
					<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
						<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-instagram"></i></a></li>
						<li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
					</ul>
					
				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- bg-191 -->
		
		<div class="container">
			<a class="logo" href="index.php"><img src="images/logo1.png" alt="Logo"></a>
			
			<a class="right-area src-btn" href="#" >
				<i class="active src-icn ion-search"></i>
				<i class="close-icn ion-close"></i>
			</a>
			<div class="src-form">
				<form>
					<input type="text" placeholder="Search here">
					<button type="submit"><i class="ion-search"></i></a></button>
				</form>
			</div><!-- src-form -->
			
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<ul class="main-menu" id="main-menu">
				<li><a href="single-post.php"> NEWS</a></li>
				<li class="drop-down"><a href="#">CATEGORY<i class="ion-arrow-down-b"></i></a>
					<ul class="drop-down-menu drop-down-inner">
						<li><a href="category.php">Politics</a></li>
						<li><a href="category.php">world</a></li>
						<li><a href="category.php">Technology</a></li>
						<li><a href="category.php">Health</a></li>
						<li><a href="category.php">Travel</a></li>
						<li><a href="category.php">Sports</a></li>					
					</ul>
				</li>
				<li><a href="Interviews.html">INTERVIEWS</a></li>
				<li><a href="Entertainment.html">ENTERTAINMENT</a></li>
				<li><a href="05_FAQS-single.html">ABOUT</a></li>
				<li><a href="06_contact-us.html">CONTACT</a></li>
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
	
	
	<section class="ptb-0">
		<div class="mb-30 brdr-ash-1 opacty-5"></div>
		<div class="container">
			<a class="mt-10" href="index.php"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
			<a class="mt-10 color-ash" href="category.php">More News</a>
		</div><!-- container -->
	</section>
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					
					<div class="row">
					
					<!--------------------------- Politics --------------------------->
					<?php
						$query = mysqli_query($connection,"select * from politics ORDER by no DESC");
						while ($row1 = mysqli_fetch_array($query))
						{
					?>
						<div class="col-sm-6">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $row1['t'];?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b><?php echo $row1['a'];?>,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $row1['likes'];?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $row1['comments'];?></li>
							</ul>
						</div><!-- col-sm-6 -->

					<?php
                        }
                    ?>	

					<!--------------------------- World --------------------------->
					<?php
						$query = mysqli_query($connection,"select * from world ORDER by no DESC");
						while ($row1 = mysqli_fetch_array($query))
						{
					?>
						<div class="col-sm-6">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $row1['t'];?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b><?php echo $row1['a'];?>,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $row1['likes'];?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $row1['comments'];?></li>
							</ul>
						</div><!-- col-sm-6 -->

					<?php
                        }
                    ?>						

					<!--------------------------- Technology --------------------------->
					<?php
						$query = mysqli_query($connection,"select * from technology ORDER by no DESC");
						while ($row1 = mysqli_fetch_array($query))
						{
					?>
						<div class="col-sm-6">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $row1['t'];?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b><?php echo $row1['a'];?>,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $row1['likes'];?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $row1['comments'];?></li>
							</ul>
						</div><!-- col-sm-6 -->

					<?php
                        }
                    ?>	

					<!--------------------------- Sports --------------------------->
					<?php
						$query = mysqli_query($connection,"select * from sports ORDER by no DESC");
						while ($row1 = mysqli_fetch_array($query))
						{
					?>
						<div class="col-sm-6">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $row1['t'];?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b><?php echo $row1['a'];?>,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $row1['likes'];?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $row1['comments'];?></li>
							</ul>
						</div><!-- col-sm-6 -->

					<?php
                        }
                    ?>	

					<!--------------------------- Travel --------------------------->
					<?php
						$query = mysqli_query($connection,"select * from travel ORDER by no DESC");
						while ($row1 = mysqli_fetch_array($query))
						{
					?>
						<div class="col-sm-6">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $row1['t'];?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b><?php echo $row1['a'];?>,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $row1['likes'];?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $row1['comments'];?></li>
							</ul>
						</div><!-- col-sm-6 -->

					<?php
                        }
                    ?>	

					<!--------------------------- Health --------------------------->
					<?php
						$query = mysqli_query($connection,"select * from health ORDER by no DESC");
						while ($row1 = mysqli_fetch_array($query))
						{
					?>
						<div class="col-sm-6">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $row1['t'];?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b><?php echo $row1['a'];?>,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $row1['likes'];?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $row1['comments'];?></li>
							</ul>
						</div><!-- col-sm-6 -->

					<?php
                        }
                    ?>	

					</div><!-- row -->
					
					<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="single-post.php"><b>VIEW MORE NEWS</b></a>
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						<ul class="list-block list-li-ptb-15 list-btm-border-white bg-primary text-center">
							<li><b>1 BTC = $13,2323</b></li>
							<li><b>1 BCH = $13,2323</b></li>
							<li><b>1 ETH = $13,2323</b></li>
							<li><b>1 LTC = $13,2323</b></li>
							<li><b>1 DAS = $13,2323</b></li>
							<li><b>1 BCC = $13,2323</b></li>
						</ul>
						
						<div class="mtb-50">
							<h4 class="p-title"><b>POPULAR POSTS</b></h4>
							
							<?php
								$query1 = mysqli_query($connection,"Select * from politics WHERE likes=(Select MAX(likes) from politics)");
								$row1 = mysqli_fetch_array($query1);
                			?>	
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="popular.php#politics">
								<div class="wh-100x abs-tlr"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?php echo $row1['t'];?></b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b><?php echo $row1['a'];?>,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<?php
								$query1 = mysqli_query($connection,"Select * from world WHERE likes=(Select MAX(likes) from world)");
								$row1 = mysqli_fetch_array($query1);
                			?>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="popular.php#world">
								<div class="wh-100x abs-tlr"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?php echo $row1['t'];?></b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b><?php echo $row1['a'];?>,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<?php
								$query1 = mysqli_query($connection,"Select * from technology WHERE likes=(Select MAX(likes) from technology)");
								$row1 = mysqli_fetch_array($query1);
                			?>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="popular.php#technology">
								<div class="wh-100x abs-tlr"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?php echo $row1['t'];?></b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b><?php echo $row1['a'];?>,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<?php
								$query1 = mysqli_query($connection,"Select * from sports WHERE likes=(Select MAX(likes) from sports)");
								$row1 = mysqli_fetch_array($query1);
                			?>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="popular.php#sports">
								<div class="wh-100x abs-tlr"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['i']);?>" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?php echo $row1['t'];?></b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b><?php echo $row1['a'];?>,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->

						
						<div class="mtb-50 mb-md-0">
							<h4 class="p-title"><b>NEWSLETTER</b></h4>
							<p class="mb-20">Subscribe to our newsletter to get notification about new updates,
								information, discount, etc..</p>
							<form class="nwsltr-primary-1">
								<input type="text" placeholder="Your email"/>
								<button type="submit"><i class="ion-ios-paperplane"></i></button>
							</form>
						</div><!-- mtb-50 -->
						
					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
	
	<footer class="bg-191 color-ccc">
		
		<div class="container">
			<div class="pt-50 pb-20 pos-relative">
				<div class="abs-tblr pt-50 z--1 text-center">
					<div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="images/map.png" alt=""></div>
				</div>
				<div class="row">
				
					<div class="col-sm-4">
						<div class="mb-30">
							<a href="#"><img src="images/logo2.png"></a>
							<p class="mtb-20 color-ccc">Bit coin is an open-source, peer-to-peer, digital decentralized cryptocurrency.
							Powered by blockchain technology, its defining characteristic is</p>
							<p class="color-ash"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
				</div><!-- row -->
			</div><!-- ptb-50 -->
			
			<div class="brdr-ash-1 opacty-2"></div>
			
			<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
			
				<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
					<li><a class="pl-0 pl-sm-10" href="#">Terms & Conditions</a></li>
					<li><a href="#">Privacy policy</a></li>
					<li><a href="#">Jobs advertising</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
				<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
					<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
					<li><a href="#"><i class="ion-social-twitter"></i></a></li>
					<li><a href="#"><i class="ion-social-google"></i></a></li>
					<li><a href="#"><i class="ion-social-instagram"></i></a></li>
					<li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
				</ul>
				
			</div><!-- oflow-hidden -->
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/tether.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.js"></script>
	
	<script src="common/scripts.js"></script>
	
</body>
</html>