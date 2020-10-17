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
	
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" hrelf="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">


	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
	
	<link href="fonts/ionicons.css" rel="stylesheet">
		
	<link href="common/styles.css" rel="stylesheet">
	
	
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
				<li><a href="02_archive-page.html">NEWS</a></li>
				<li class="drop-down"><a href="#">CATEGORY<i class="ion-arrow-down-b"></i></a>
					<ul class="drop-down-menu drop-down-inner">
						<li><a href="category.html">Politics</a></li>
						<li><a href="category.html">World</a></li>
						<li><a href="category.html">Technology</a></li>
						<li><a href="category.html">Health</a></li>
						<li><a href="category.html">Travel</a></li>
						<li><a href="category.html">Sports</a></li>					
					</ul>
				</li>
				<li><a href="04_FAQS.html">INTERVIEWS</a></li>
				<li><a href="04_FAQS.html">ENTERTAINMENT</a></li>
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
			<a class="color-ash mt-10" href="admin.php">Admin</a>
		</div><!-- container -->
	</section>


	<!------------------------- Main Section ------------------------->
	<br>
	<div class="container">
	<section>

		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add News</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Modify News</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Delete News</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured Posts</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			
			<br>
			<h3>Add Category News</h3>
			<form name="form1" method="POST" action="add.php" enctype="multipart/form-data">
				<br><br>
				<input name="image" type="file" style="width:300px;">
				<br><br>
				<input name="c" type="text" placeholder="Category" style="width:300px;">
				<br><br>
				<input name="a" type="text" placeholder="Author" style="width:300px;">
				<br><br>
				<input name="t" type="text" placeholder="Title" style="width:500px;">
				<br><br>
				<textarea name="e" type="text" cols="40" rows="5" placeholder="Excerp"></textarea>
				<br>
				<br>
				<br>
				<div>
					<img src="img/core-img/like.png" alt=""> <span><input name="l" type="text" size="2" value="392" ></span>
					<img src="img/core-img/chat.png" alt=""> <span><input name="co" type="text" size="2" value="10" ></span>
				</div>
				<br><br><br>
				<input name="sub" type="submit" class="submit-btn3" style="width:300px;">            
			</form>

			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Modify</div>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Delete</div>
			<div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
				<br>
				<h3>Featured Posts</h3>
				<br>
				<form name="form2" action="add.php" method="POST">
				<table>
				<tr>
					<th> Sr. no. </th>
					<th> Category </th>
					<th> Post Title </th>
				</tr>
				<tr>
					<td>1</td>
					<td>Politics</td>
					<td>
						<select name="politics">
							<?php
							$query = mysqli_query($connection,"SELECT t from politics");
							while($row1 = mysqli_fetch_array($query))
							{
							?>
							<option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>
							<?php
                        	}
                    		?>
						</select>
					</td>	
				</tr>
				<tr>
					<td>2</td>
					<td>world</td>
					<td>
						<select name="world">
							<?php
							$query = mysqli_query($connection,"SELECT t from world");
							while($row1 = mysqli_fetch_array($query))
							{
							?>
							<option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>
							<?php
                        	}
                    		?>
						</select>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Technology</td>
					<td>
						<select name="technology">
							<?php
							$query = mysqli_query($connection,"SELECT t from technology");
							while($row1 = mysqli_fetch_array($query))
							{
							?>
							<option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>
							<?php
                        	}
                    		?>
						</select>
					</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Health</td>
					<td>
						<select name="health">
							<?php
							$query = mysqli_query($connection,"SELECT t from health");
							while($row1 = mysqli_fetch_array($query))
							{
							?>
							<option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>
							<?php
                        	}
                    		?>
						</select>
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td>Travel</td>
					<td>
						<select name="travel">
							<?php
							$query = mysqli_query($connection,"SELECT t from travel");
							while($row1 = mysqli_fetch_array($query))
							{
							?>
							<option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>
							<?php
                        	}
                    		?>
						</select>
					</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Sports</td>
					<td>
						<select name="sports">
							<?php
							$query = mysqli_query($connection,"SELECT t from sports");
							while($row1 = mysqli_fetch_array($query))
							{
							?>
							<option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>
							<?php
                        	}
                    		?>
						</select>
					</td>
				</tr>
				</table>

				<br><br>
				<button name="featured-post" type="submit" class="submit-btn3">Make Changes</button>
				</form>
			</div>
		</div>


	</section>
	</div><!-- container -->

	<br><br><br>

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