		<!-- Slideshow 4 -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<div class="slider-img">
							<div class="container">
								<div class="slider-info">
									<h4> <span class="home-banner">O</span>ur <span class="home-banner">A</span>wesome <span class="home-banner">T</span>eam
										<span
										    class="fa fa-paw paw-banner" aria-hidden="true"></span><span class="fa fa-paw paw-banner" aria-hidden="true"></span></h4>
									<p>We have a profesional team</p>
									<div class="outs_more-buttn">
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
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
		<div class="container"><?php
				foreach ($data_petugas as $pm) {
					echo'
			<div class="about-top-grids">
				<div class="col-md-7 about-top-grid">
				
				<br><br><br><h3>'. $pm->nama . '</h3>
					<br>
					<div class="about-para">
						<b>Head Doctor/Medical</b>
						<p>Alumni : '. $pm->alumni . '</p>
						
					</div>
				</div>
				<br>
					<img style="width: 300px; height:400px;"  src="' . base_url('assets/uploads/') . $pm->foto . '" alt="' . $pm->nama . '" class="rounded-circle"">
					</div>
					
					';
				}?>
				
			</div>
		</div>
	</div> 
	
	<div class="about" id="about">
		<div class="container">
			<div class="about-top-grids">
				<div class="col-md-7 about-top-grid">
					<h2>Hardono Ananto Hadi</h2>
					
					<div class="about-para"><br>
						<b><p style="text-indent:45px">Head Doctor/Medical</p></b>
						<p>Tanggal Lahir : Blitar, 01 Januari 1983 </p>
						<p>Alumni : Universitas Airlangga</p>
						<p>Seminar and Course : </p>
					</div>
					<div class="arrow">
						<ul>
							<li><span class="fa fa-paw dog-arrow" aria-hidden="true"></span>
								<p>VRVC (VPAT Regional Veterinary Congress 2009 , 2010, 2011</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5 " >
				<img src='<?php echo base_url() ?>assets/images/dokter.png' style="width:300px;height:400px">
					
			</div>
		</div>
	</div>
	

	<!--js working-->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js  working-->

	<script src="js/responsiveslides.min.js"></script>

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
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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
	<script type='text/javascript' src='js/jquery.easy-gallery.js'></script>
	<script type='text/javascript'>
		//init Gallery
		$('.portfolio').easyGallery();
	</script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
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
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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