<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Klinik Sekar Satwa</title>

	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/images/logo3.png">
	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Lovely-pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//meta tags ends here-->

	<!--booststrap-->

	<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="<?php echo base_url() ?>assets/css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link rel='stylesheet' type='text/css' href="<?php echo base_url() ?>assets/css/jquery.easy-gallery.css" />
	<!-- For-gallery-CSS -->
	<link href="<?php echo base_url() ?>assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-ups-->
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">

</head>
<?php if ($this->session->flashdata('pesan') != null) : ?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button><?= $this->session->flashdata('pesan'); ?>
				</div>
			<?php endif ?>
<body>
		<!-- Slideshow 4 -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<div class="slider-img">
							<div class="container">
								<div class="slider-info">
									<h4> <span class="home-banner">K</span>linik <span class="home-banner">H</span>ewan <span class="home-banner">S</span>ekar
										<span<span class="home-banner">S</span>atwa
										<span
										    class="fa fa-paw paw-banner" aria-hidden="true"></span><span class="fa fa-paw paw-banner" aria-hidden="true"></span></h4>
									<p></p>
									
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img ">
							<div class="container">
								<div class="slider-info">
									<h4><span class="home-banner">P</span>eduli<span class="home-banner">P</span>eliharaanmu <span class="home-banner"></span>
										<span
										    class="fa fa-paw paw-banner" aria-hidden="true"></span><span class="fa fa-paw paw-banner" aria-hidden="true"></span> </h4>
									<p></p>
									<!--<div class="outs_more-buttn">
										<a href="<?= base_url('Login/index'); ?>" data-toggle="modal" data-target="#myModal">Reservasi Now</a>
									</div>
								</div>-->
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- This is here just to demonstrate the callbacks -->
		<!-- <ul class="events">
      <li>Example 4 callback events</li>
    </ul>-->
		<!-- //banner -->
		<!-- modal -->
		<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Register</h4>
					</div>
					<div class="modal-body">
						<div class="out-info">
							<div class="letter-w3ls">

								<form action="#" method="post">
									<div class="main">
										<div class="form-left-to-w3l">

											<input type="text" name="name" placeholder="Name" required="">
											<div class="clear"></div>
										</div>
										<div class="form-right-to-w3ls">

											<input type="text" name="last name" placeholder="Last Name" required="">
											<div class="clear"></div>
										</div>

									</div>

									<div class="main">
										<div class="form-left-to-w3l">

											<input type="email" name="email" placeholder="Email" required="">
											<div class="clear"></div>
										</div>
										<div class="form-right-to-w3ls">

											<input type="text" name="phone number" placeholder="Phone Number" required="">
											<div class="clear"></div>
										</div>
									</div>
									<div class="main">

										<div class="form-left-to-w3l">
											<select class="form-control">
					<option value="">Adopt Pet</option>
						<option>Male</option>
						<option>Female</option>
					</select>
										</div>
										<div class="form-right-to-w3ls">
											<select class="form-control">
					<option value="">Breed</option>
						<option>Bull Dog</option>
						<option>German Dog</option>
						<option>Poodle Dog</option>
						<option>Husky Dog</option>
					</select>
										</div>
									</div>


									<div class="form-add-to-w3ls add">

										<input type="text" name="address" placeholder="Street Address" required="">
										<div class="clear"></div>
									</div>


									<div class="main">
										<div class="form-left-to-w3l">

											<input type="text" name="city" placeholder="City" required="">
											<div class="clear"></div>
										</div>
										<div class="form-right-to-w3ls">
											<input type="text" name="state" placeholder="State" required="">
											<div class="clear"></div>
										</div>

									</div>
									<div class="main">
										<div class="form-left-to-w3l">
											<input type="text" name="Pin code" placeholder="Pin code" required="">
											<div class="clear"></div>
										</div>
										<div class="form-right-to-w3ls">
											<select class="form-control buttom">
												<option value="">
												Select Country</option>
													<option value="category2">Oman</option>
													<option value="category1">Australia</option>
													<option value="category3">America</option>
													<option value="category3">London</option>
													<option value="category3">Goa</option>
													<option value="category3">Canada</option>
													<option value="category3">Srilanka</option>
												</select>

											<div class="clear"></div>
										</div>

									</div>

									<div class="form-control-w3l">
										<textarea name="Message" placeholder="Why You Want Adopt Pet...?" required=""></textarea>
									</div>
									<div class="btnn">
										<button type="submit">Submit</button><br>
									</div>

								</form>
							</div>
						</div>
						<!--//register form-->

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!--About-->
	<div class="about" id="about">
		<div class="container">
			<div class="about-top-grids">
				<div class="col-md-7 about-top-grid">
					<h2>Tentang Kami </h2>
					
					<div class="about-para"><br>
						<p style="text-indent:45px">Klinik Sekar Satwa merupakan sebuah klinik hewan di Kota Blitar yang dikelola langsung oleh drh.Sekar Lolita. Kami memberikan pelayanan
						kesehatan dan perawatan hewan dengan profesional</p>
						<p style="text-indent:45px">Dengan mengedepankan proses pelayanan yang tepat dan cepat, kami akan mencoba untuk selalu memenuhi kebutuhan pemilik hewan dan hewan peliharaan anda</p>
						
					</div>
					<div class="arrow">
						<ul>
							<li><span class="fa fa-paw dog-arrow" aria-hidden="true"></span>
								<p>Opening Hours : 8.00 - 20.00 WIB</p>
							</li>
							<li><span><img src='assets/images/fb.png' aria-hidden="true" style="width:20px"></span>
							<a href="https://www.facebook.com/Klinik-Hewan-Sekar-Satwa-1499028173464825/"><p>Klinik Hewan Sekar Satwa </p>
							</li>
							<li><span><img src='assets/images/ig.png' aria-hidden="true" style="width:20px"></span>
							<a href="https://www.instagram.com/klinikhewansekarsatwa/?hl=id">
								<p>Klinik Hewan Sekar Satwa </p>
							</li>
							<li><span><img src='assets/images/wa.png' aria-hidden="true" style="width:20px"></span>
								<p>0857-9865-0072 </p>
							</li>
							<li><span><img src='assets/images/map.png' aria-hidden="true" style="width:25px"></span>
							<a href="https://www.google.com/maps/place/Jl.+Melati+No.106,+Kepanjen+Kidul,+Kec.+Kepanjenkidul,+Kota+Blitar,+Jawa+Timur+66117/@-8.1032038,112.1588593,17z/data=!3m1!4b1!4m5!3m4!1s0x2e78ec0e80ee04a1:0xb2a3f11d8ad3b8b0!8m2!3d-8.1032038!4d112.161048"><p>Jln Melati NO 106 Kota Blitar </p>
							</li>
						</ul>
					</div>
				</div>
				<!-- <div class="col-md-5 pope banner-agileits-btm" id="video">	 -->
				<div class=" col-md-5 col-sm-10 col-xs-9 contact-map">
					<div class="map-grid">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1974.9913715575335!2d112.16023805935181!3d-8.103238748684948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78ec7531504f87%3A0x2319f8069463bde9!2sKlinik%20hewan%20sekar%20satwa!5e0!3m2!1sid!2sid!4v1622080775977!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//About-->
	<!--services-->
	<div class="services" id="services">
		<div class="container">
			<h3 class="title clr">Pelayanan & Reservasi</h3>

			
				
				<div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid"><br><br>
						<span class="fa fa-home banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4> <a href="<?= base_url() ?>Login/index"> Penitipan Hewan</h4>
						<p>
							</p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<span class="fa fa-flask banner-icon" aria-hidden="true"></span>
					</div>
					<div class="white-shadow">
						<h4><a href="<?= base_url() ?>Login/index">Pemeriksaan </h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<span class="fa fa-scissors banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4> <a href="<?= base_url() ?>Login/index"> Grooming</h4>
						
						<p></p>
						<div class="clearfix"> </div>
					</div>
				</div><div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
					<!--	<span class="fa fa-stethoscope  banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>USG</h4>-->
						<p>
							</p>
						<div class="clearfix"> </div>
					</div>
				</div><div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
					<!--	<span class="fa fa-stethoscope  banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>USG</h4>-->
						<p>
							</p>
						<div class="clearfix"> </div>
					</div>
				</div><div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
					<!--	<span class="fa fa-stethoscope  banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>USG</h4>-->
						<p>
							</p>
						<div class="clearfix"> </div>
					</div>
				</div><div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
					<!--	<span class="fa fa-stethoscope  banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>USG</h4>-->
						<p>
							</p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid"><br><br>
						<span class="fa fa-commenting-o banner-icon" aria-hidden="true"></span>
					</div>
					<div class="white-shadow">
						<h4><a href="<?= base_url() ?>Login/index">Konsultasi </h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
					<!--	<span class="fa fa-stethoscope  banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>USG</h4>-->
						<p>
							</p>
						<div class="clearfix"> </div>
					</div>
				</div>
				
				
				<div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class="left-icon-grid">
						<!--<span class="fa fa-medkit banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>Operasi</h4>-->
						<p></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				
				<p><p></p></p>
				<div class="col-md-4 col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<!--<span class="fa fa-heartbeat banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4><a href="<?= base_url() ?>Login/index">Vaksinasi</h4>-->
						<p>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				
				<div class="col-md-4 col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<!--<span class="fa fa-smile-o banner-icon" aria-hidden="true"></span>
					</div>
					<div class="white-shadow">
						<h4>Sterillisasi </h4>-->
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<div class="col-md-4 col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<!--<span class="fa fa-user-md banner-icon" aria-hidden="true"></span>
					</div>
					<div class="white-shadow">
						<h4>Scalling Gigi Anjing </h4>-->
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//services-->
	
	
	
	
	

	</div>

	<!--js working-->
	<script type='text/javascript' src='<?php echo base_url() ?>assets/js/jquery-2.2.3.min.js'></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
	<!-- //js  working-->

	<script src="<?php echo base_url() ?>assets/js/responsiveslides.min.js"></script>

	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 900,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--// banner-->
	<!--pop-up-box video-->
	<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box video -->

	<!-- script for portfolio -->
	<script type='text/javascript' src='<?php echo base_url() ?>assets/js/jquery.easy-gallery.js'></script>
	<script type='text/javascript'>
		//init Gallery
		$('.portfolio').easyGallery();
	</script>
	<script src="<?php echo base_url() ?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true // 100% fit in a container
			});
		});
	</script>
	<!-- //script for portfolio -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- for-bottom-to-top smooth scrolling -->
	<script type="text/javascript">
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //for-bottom-to-top smooth scrolling -->


</body>

</html>