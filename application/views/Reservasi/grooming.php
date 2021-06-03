<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo base_url() ?>assets/css/form.css" rel='stylesheet' type='text/css' media="all">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>

                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Formulir Grooming</h3>

                                <form action="<?= base_url('Reservasi/tambah_grooming'); ?>" class="form-group" method="POST">
                                <div class="row register-form">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="date" id="tgl_grooming" name="tgl_grooming" class="form-control" placeholder="Tanggal Grooming *" value="" />
                                        </div>
                                        <div class="form-group">
                                        <input type="text" id="id_wali" name="nama" class="form-control" value="<?= $log['nama']; ?>" ?> <readonly>
                                            
                                        </div>
                                        <input type="hidden"  name="id_wali" class="" value="<?= $log['id_wali']; ?>" ?> <readonly>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="<?= $log['alamat']; ?>" readonly>
                                        </div>                                          
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Nomor Hp *" value="<?= $log['no_telp'] ?>" />
                                        </div>
										<div class="form-group">
                                            <input type="text" id="hewan" name="hewan" class="form-control" placeholder="Nama Hewan/Jenis *" value="" />
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                       
                                        <input type="submit" class="btnRegister"  value="Send"/>
                                    </div>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <script>
                