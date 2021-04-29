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
									<div class="outs_more-buttn">
										<a href="<?= base_url('Login/index'); ?>" data-toggle="modal" data-target="#myModal">Reservasi Now</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img ">
							<div class="container">
								<div class="slider-info">
									<h4><span class="home-banner">P</span>et<span class="home-banner">&</span>Cares <span class="home-banner"></span>
										<span
										    class="fa fa-paw paw-banner" aria-hidden="true"></span><span class="fa fa-paw paw-banner" aria-hidden="true"></span> </h4>
									<p></p>
									<div class="outs_more-buttn">
										<a href="<?= base_url('Login/index'); ?>" data-toggle="modal" data-target="#myModal">Reservasi Now</a>
									</div>
								</div>
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
					<h2>About Us </h2>
					
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
				<div class="col-md-5 pope banner-agileits-btm" id="video">
					<div class="button">

						<a href="#small-dialog1" class="play-icon popup-with-zoom-anim"><span class="fa fa-play-circle" aria-hidden="true"></span></a>
					</div>
					<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
						<div class="agileits_modal_body">
							<iframe src="https://player.vimeo.com/video/72859932?"></iframe>

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
			<h3 class="title clr">Services</h3>

			<div class="banner-bottom-girds ">
				<div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<span class="fa fa-scissors banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>Grooming</h4>
						<p></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<span class="fa fa-stethoscope  banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>USG</h4>
						<p>
							</p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<span class="fa fa-home banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>Penitipan Hewan</h4>
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
						<h4>Pemeriksaan Laboratorium</h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4  col-sm-6 col-xs-6  its-banner-grid">
					<div class="left-icon-grid">
						<span class="fa fa-medkit banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>Operasi</h4>
						<p></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<span class="fa fa-heartbeat banner-icon" aria-hidden="true"></span>
					</div>
					<div class=" white-shadow">
						<h4>Vaksinasi</h4>
						<p>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				
				<div class="col-md-4 col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<span class="fa fa-smile-o banner-icon" aria-hidden="true"></span>
					</div>
					<div class="white-shadow">
						<h4>Sterillisasi </h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<span class="fa fa-commenting-o banner-icon" aria-hidden="true"></span>
					</div>
					<div class="white-shadow">
						<h4>Konsultasi </h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6  its-banner-grid">
					<div class=" left-icon-grid">
						<span class="fa fa-user-md banner-icon" aria-hidden="true"></span>
					</div>
					<div class="white-shadow">
						<h4>Scalling Gigi Anjing </h4>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//services-->
	<div class="portfolio" id="gallery">

		<h3 class="title">Our Gallery</h3>

		<div class="sap_tabs">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>All</span></li>
					<li class="resp-tab-item"><span>Pets 1</span></li>
					<li class="resp-tab-item"><span>Pets 2</span></li>
					<li class="resp-tab-item"><span>Pets 3</span></li>
				</ul>
				<div class="clearfix"> </div>
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
							<img src='assets/images/gal1.jpg' data-big-src='assets/images/gal1.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
							<img src='<?php echo base_url() ?>assets/images/g2.jpg' data-big-src='<?php echo base_url() ?>assets/images/g2.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
							<img src='<?php echo base_url() ?>assets/images/g10.jpg' data-big-src='<?php echo base_url() ?>assets/images/g10.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='<?php echo base_url() ?>assets/images/g4.jpg' data-big-src='<?php echo base_url() ?>assets/images/g4.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6  portfolio-grids">
							<div class="gallery-grid">
								<img src='<?php echo base_url() ?>assets/images/g5.jpg' data-big-src='<?php echo base_url() ?>assets/images/g5.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>

						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g6.jpg' data-big-src='images/g6.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g8.jpg' data-big-src='images/g8.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g11.jpg' data-big-src='images/g11.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g1.jpg' data-big-src='images/g1.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g10.jpg' data-big-src='images/g10.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g8.jpg' data-big-src='images/g8.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g11.jpg' data-big-src='images/g11.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g5.jpg' data-big-src='images/g5.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g7.jpg' data-big-src='images/g7.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>

						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g6.jpg' data-big-src='images/g6.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g7.jpg' data-big-src='images/g7.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g2.jpg' data-big-src='images/g2.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g6.jpg' data-big-src='images/g6.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g4.jpg' data-big-src='images/g4.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g7.jpg' data-big-src='images/g7.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!--price table-->
	<div class="price-table" id="price">
		<div class="container">
			<h3 class="title clr ">Price</h3>

			<div class="agileits-banner-grids text-center">

				<div class="col-md-4  col-sm-4  col-xs-4 clr1 agileits-banner-grid">

					<h4>Grooming</h4>
					<div class="table_cost">
						
					</div>
					<div class="list-price">
						<ul>
							<li>Bengal cat</li>
							<li>Russian Cat</li>
							<li>Maine Cat</li>
							<li>Perian Cat</li>
						</ul>
					</div>
					<a class="w3_play_icon1" href="#" data-toggle="modal" data-target="#myModal"> Buy Now</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4  clr2 agileits-banner-grid">

					<h4>Dolor ipsum</h4>
					<div class="table_cost">
						<span class="cost"> 150$</span>
					</div>
					<div class="list-price">
						<ul>
							<li>Bengal cat</li>
							<li>Russian Cat</li>
							<li>Maine Cat</li>
							<li>Perian Cat</li>
						</ul>
					</div>
					<a class="w3_play_icon1" href="#" data-toggle="modal" data-target="#myModal"> Buy Now</a>
				</div>
				<div class=" col-md-4 col-sm-4 col-xs-4 clr3 agileits-banner-grid">

					<h4>Lorem ipsum</h4>
					<div class="table_cost">
						<span class="cost clr-price "> 90$</span>
					</div>
					<div class="list-price">
						<ul>
							<li>Bengal cat</li>
							<li>Russian Cat</li>
							<li>Maine Cat</li>
							<li>Perian Cat</li>
						</ul>
					</div>
					<a class="w3_play_icon1" href="#" data-toggle="modal" data-target="#myModal"> Buy Now</a>
				</div>
				<div class="clearfix"></div>

			</div>

		</div>
	</div>
	<!--//price table-->
	<!-- testimonials -->
	<div class="testimonials" id="testimonials">
		<div class="container">

			<h3 class="title">Ulasan</h3>

			<div class="carousel slide" data-ride="carousel" id="quote-carousel">
				<!-- Bottom Carousel Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/t1.jpg" alt="">
					</li>
					<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/t2.jpg" alt="">
					</li>
					<li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/t3.jpg" alt="">
					</li>
				</ol>

				<!-- Carousel Slides / Quotes -->
				<div class="carousel-inner text-center">

					<!-- Quote 1 -->
					<div class="item active">
						<blockquote>
							<div class="row">
								<div class=" left-matter">
									<p>Ntab<h5>--kelly ove</h5>
								</div>


							</div>
						</blockquote>
					</div>
					<!-- Quote 2 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
									<h5>--Kennedy</h5>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 3 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
									<h5>--Rosey</h5>
								</div>
							</div>
						</blockquote>
					</div>
				</div>

				<!-- Carousel Buttons Next/Prev 
					<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><span class="fa fa-chevron-left"></span></a>
					<a data-slide="next" href="#quote-carousel" class="right carousel-control"><span class="fa fa-chevron-right"></span></a> -->
			</div>
		</div>
	</div>
	<!-- testimonials -->

	<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title clr">Contact</h3>
			<div class=" col-md-8 col-sm-8 col-xs-7 contact-map">
				<div class="map-grid">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.982772222147!2d112.15901791432982!3d-8.103235783300644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78ec7531504f87%3A0x2319f8069463bde9!2sKlinik%20hewan%20sekar%20satwa!5e0!3m2!1sid!2sid!4v1618146538892!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

				</div>
			</div>

			<div class=" col-md-4 col-sm-4 col-xs-5 contact-icons">
				<div class="footer_grid_left">
					<h5 class="fa fa-map-marker">Address</h5>
					<p>Jln Melati no 106  <span> Kota Blitar</span></p>
				</div>
				<div class="footer_grid_left">
					<h5> Contact Us</h5>
					<p>085743779699 <span></p>
				</div>
				<div class="footer_grid_left">
					<h5>Social Media</h5>
					<p class="fa fa-facebook-official" style="color:blue"><a href="https://www.facebook.com/Klinik-Hewan-Sekar-Satwa-1499028173464825/">Klinik Sekar Satwa</a>
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
				<div class="footer_grid_left">
					<h5>Times</h5>
					<p>Mon-Sat:9AM to 6PM
						<span>Sun:9AM to 7PM</span></p>
				</div>
			</div>
			<div class="clearfix"> </div>

			<div class="contact-us">
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
						<input type="text" name="Name" placeholder="Name" required="">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
						<input type="text" name="Last Name" placeholder="Last Name" required="">
					</div>

					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
						<input type="email" name="Email" placeholder="Email" required="">

					</div>

					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">

						<input type="text" name="phone" placeholder="phone" required="">

					</div>
					<div class="clearfix"> </div>
					<div class="styled-input">

						<textarea name="Message" placeholder="Message" required=""></textarea>
					</div>
					<div>
						<div class="click">
							<input type="submit" value="SEND">
						</div>
					</div>
				</form>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="buttom-w3">
		<div class="container">
			<div class="col-md-4 bottom-head text-center">
				<h4><a href="index.html">LOVELY-PETS</a></h4>
				<div class="pet-cat">
					<p>Care Pets</p>
				</div>
			</div>
			<div class="col-md-4 copyright text-center">
				<div class="">
					<h4> About Us</h4>
				</div>
				<div class="sub-para">
					<p>Lorem ipsum dolor sit amet,dolor sit amet,iste natus error sit voluptatem</p>
				</div>
				
			</div>
			<div class="col-md-4 letter-sub text-center">

				<div class="post">
					<form action="#" method="post">

						<div class="letter">
							<input class="email" type="email" placeholder="Your email..." required="">
						</div>
						<div class="newsletter">
							<input type="submit" value="Subscribe">
						</div>
					</form>
				</div>
				<div class="sub-para">
					<p>Lorem ipsum dolor sit amet,dolor sit amet,iste natus error sit voluptatem</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
	<footer>
		<p>&copy; 2018 Lovely-Pets. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a></p>
	</footer>

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