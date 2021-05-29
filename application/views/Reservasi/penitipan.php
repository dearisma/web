<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo base_url() ?>assets/css/form.css" rel='stylesheet' type='text/css' media="all">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Formulir Penitipan</h3>
								<?php
								$a=$this->session->set_userdata('data_session');
								?>
                                <div class="row register-form">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Tanggal Dititipkan *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Tanggal Diambil *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nama Pemilik *" value="<?= $a->nama ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Alamat *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Nomor Hp *" value="" />
                                        </div>
										<div class="form-group">
                                            <input type="email" class="form-control" placeholder="Nama Hewan/Jenis *" value="" />
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                       
                                        <input type="submit" class="btnRegister"  value="Send"/>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <script>
                