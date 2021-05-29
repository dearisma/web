		<!-- Slideshow 4 -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<div class="slider-img">
							<div class="container">
								<div class="slider-info">
									<h4> <span class="home-banner">O</span>ur <span class="home-banner">P</span>roduct <span class="home-banner"></span>
										<span
										    class="fa fa-paw paw-banner" aria-hidden="true"></span><span class="fa fa-paw paw-banner" aria-hidden="true"></span></h4>
									<p>We provide reliable veterinary services for your pets</p>
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
	
	</div>
	<!-- Rotating card -->
<div class="card-wrapper">
  <div id="card-2" class="card card-rotating text-center">

    <!--Front Side-->
    <div class="face front">

      <!-- Image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo5.jpg" alt="Example photo">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Content-->
      <div class="card-body">

        <a class="rotate-btn float-right" data-card="card-2"><i class="fas fa-share-alt fa-lg"></i></a>
        <h4 class="">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat tenetur odio suscipit
          non commodi vel eius veniam maxime.</p>
        <a class="link-text">
          <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
        </a>

      </div>

    </div>
    <!--Front Side-->

    <!--Back Side-->
    <div class="face back">

      <!-- Content -->
      <div class="content text-center">

        <h4 class="card-title font-weight-bold my-4">Social shares <i class="fas fa-times rotate-btn text-muted"
            data-card="card-2"></i></h4>
        <hr>
        <!-- Social Icons -->
        <ul class="list-unstyled list-inline d-flex justify-content-center flex-wrap mt-4 py-2">
          <li class="list-inline-item"><a class="btn-floating btn-dribbble"><i class="fab fa-dribbble"> </i></a></li>
          <li class="list-inline-item"><a class="btn-floating btn-slack"><i class="fab fa-slack-hash"> </i></a></li>
          <li class="list-inline-item"><a class="btn-floating btn-ins"><i class="fab fa-instagram"> </i></a></li>
          <li class="list-inline-item"><a class="btn-floating btn-pin"><i class="fab fa-pinterest"> </i></a></li>
          <li class="list-inline-item"><a class="btn-floating btn-tw"><i class="fab fa-twitter"> </i></a></li>
          <li class="list-inline-item"><a class="btn-floating btn-gplus"><i class="fab fa-google-plus-g"> </i></a></li>
          <li class="list-inline-item"><a class="btn-floating btn-git"><i class="fab fa-github"> </i></a></li>
        </ul>
        <h5 class="font-weight-bold my-4">Join our community</h5>
        <hr>
        <!-- Social Icons -->
        <ul class="list-unstyled list-inline d-flex justify-content-center flex-wrap mt-4">
          <li class="list-inline-item"><a class="btn btn-fb px-4"><i class="fab fa-facebook-f"> </i></a></li>
          <li class="list-inline-item"><a class="btn btn-tw px-4"><i class="fab fa-twitter"> </i></a></li>
          <li class="list-inline-item"><a class="btn btn-li px-4"><i class="fab fa-linkedin-in"> </i></a></li>
          <li class="list-inline-item"><a class="btn btn-ins px-4"><i class="fab fa-instagram"> </i></a></li>
        </ul>

      </div>

    </div>
    <!--Back Side-->

  </div>
</div>
<!-- Rotating card -->

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

]
</body>

</html>