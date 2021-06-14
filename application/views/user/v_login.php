<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Halaman Masuk</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/stylelog.css" type="text/css" media="all" />

    <!-- fontawesome v5-->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="signinform">
        <h1></h1>
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3l_form">
                    <div class="left_grid_info">
                        <img src="<?php echo base_url() ?>assets/images/image.svg" alt="" />
                    </div>
                </div>
                <div class="w3_info">
                    <h2>Masuk</h2>
                    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password" autofocus>
                        </div>
                        
                        <button class="btn btn-primary btn-block" type="submit" value="login">Masuk</button>
                    </form>
                    <!-- <p class="continue"><span>or Sign in with</span></p>
                    <div class="social-login">
                        <a href="#facebook">
                            <div class="facebook">
                                <span class="fab fa-facebook" aria-hidden="true"></span> Facebook

                            </div>
                        </a>
                        <a href="#google">
                            <div class="google">
                                <span class="fab fa-google-plus-g" aria-hidden="true"></span> Google
                            </div>
                        </a>
                    </div> -->
                    <p class="account">Belum memiliki akun?<a href="<?php echo base_url('Login/register'); ?>">Daftar Sekarang!</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        
        <!-- footer -->
    </div>
</body>

</html>