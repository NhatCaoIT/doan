<?php session_start()?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
	<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-md-9">
					<div id="colorlib-logo"><a href="index.php">SHOP GIÀY</a></div>
				</div>
				<div class="col-sm-5 col-md-3">
					<form action="#" class="search-wrap">
						<div class="form-group">
							<input type="search" class="form-control search" placeholder="Tìm kiếm">
							<button class="btn btn-primary submit-search text-center" type="submit"><i
									class="icon-search"></i></button>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-left menu-1">
					<ul>
						<li class="active"><a href="index.php">Trang chủ</a></li>
						<li><a href="about.php">Thông tin</a></li>
						<li><a href="contact.php">Liên hệ</a></li>
						<li class="has-dropdown">
							<a href="men.php"> <?php echo $_SESSION['kh'] ?></a>
							<ul class="dropdown">
								<li><a href="detailUser.php">Thông tin cá nhân</a></li>
								<li><a href="changePass">Đổi mật khẩu</a></li>
								<li><a href="logout.php">Đăng xuất</a></li>
								<li><a href="backend/login.php">Đăng nhập</a></li>
							</ul>
						</li>
						<li class="cart"><a href="cart.php"><i class="icon-shopping-cart"></i> Giỏ hàng [0]</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="sale">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 offset-sm-2 text-center">
					<div class="row">
						<div class="owl-carousel2">
							<div class="item">
								<div class="col">
									<h3><a href="#">Giảm giá 25% tất cả các loại giày dép! Mã giảm giá: Summer Sale</a></h3>
								</div>
							</div>
							<div class="item">
								<div class="col">
									<h3><a href="#">Giảm giá 50% tất cả các loại giày mùa hè</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>