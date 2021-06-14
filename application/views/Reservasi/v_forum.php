<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forum</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets2/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets2/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.3.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<div class="testimonials" id="testimonials">
		<div class="container">

			<h3 class="title">Diskusi bersama Kami</h3>
      

			<div class="carousel slide" data-ride="carousel" id="quote-carousel">
				<!-- Bottom Carousel Indicators -->
				<ol class="carousel-indicators">
				
				</ol>
           <!-- ======= Contact Us Section ======= -->

          
        </div>
        <div class="container-fluid mt-100">
    <div class="row">
    <?php
            foreach ($form as $pm) {
					echo'
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center"> 
                        <div class="media-body ml-3"> '.$pm->nama.'</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p> '.$pm->pesan.'</p>
                    <b>Answer :</b>'.$pm->jawab.'</p>
                </div>
                <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                
                </div>
            </div>
        </div>
        ';
}?> 
    </div>
    
</div>


			</div>
		</div>
	</div>
	<!-- testimonials -->

 
<!-- Contact -->

<div class="contact" id="contact">

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

		<div class="container">
			<h3 class="title clr"></h3>
			<div class=" col-md-8 col-sm-8 col-xs-7 contact-map">
			
			</div>

			<div class="contact-us">
      <form action="<?= base_url('Reservasi/tambah_forum'); ?>" method="POST" role="form" >
					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
					<input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name" required>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
					</div>

					<div class="clearfix"> </div>
					<div class="styled-input">
						<textarea name="pesan" placeholder="Message" required=""></textarea>
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

  

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets2/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url() ?>assets2/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets2/js/main.js"></script>

</body>

</html>