 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reservasi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulir Periksa</h1>
                            </div>
                            <form action="<?= base_url('Reservasi/tambah_periksa'); ?>" class="user" method="POST">
                            
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="foto">Tanggal Periksa</label>
                                    <input type="date" id="tgl_periksa" name="tgl_grooming" class="form-control form-control-user" placeholder="Tanggal Periksa *" value="" />
                                          
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="foto">Nama</label>
                                    <input type="text" id="id_wali" name="nama" class="form-control form-control-user" value="<?= $log['nama']; ?>" readonly> 
                                    </div>
                                    <input type="hidden"  name="id_wali" class="" value="<?= $log['id_wali']; ?>" ?> <readonly>
                                    
                                </div>
                                <div class="form-group">
                                <label for="foto">Alamat</label>
                                <input type="text" class="form-control form-control-user" value="<?= $log['alamat']; ?>" readonly> 
                                </div>
                                <div class="form-group">
                                <label for="foto">No Whatsapp</label>
                                <input type="text" class="form-control form-control-user" value="<?= $log['no_telp']; ?>"readonly> 
                                </div>
                                <div class="form-group">
                                <label for="foto">Hewan</label>
                                <input type="text" id="hewan" name="hewan" class="form-control form-control-user" placeholder="Nama Hewan/Jenis *" value="" />
                                </div>
                                <div class="form-group">
                                <label for="foto">Keluhan</label>
                                <input type="text" id="keluhan" name="keluhan" class="form-control form-control-user" placeholder="Keluhan *" value="" />
                                </div>
                                
                                <input type="submit" class="btn btn-primary btn-user btn-block"  value="Kirim"/>
                                <hr>
                                <?php if ($this->session->flashdata('pesan') != null) : ?>
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                                        <span aria-hidden="true">&times;</span>
                                        
                                    </button><?= $this->session->flashdata('pesan'); ?>
                                </div>
                            <?php endif ?>
                                <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Catatan!</h4>
                                <p>Formulir reservasi yang sudah dikirimkan tidak bisa dibatalkan. Diharapkan untuk datang maksmimal satu jam sebelum jam tutup. Apabila kedatangan lebih dari jam tersebut maka akan otomatis dibatalkan</p>
                                <hr>
                                
                                <hr>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
                