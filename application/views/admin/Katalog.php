
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                    <div class="container-fluid">
                            <!-- Page Heading -->
                            <div class="col-md">
                                <a href="#tambah" style="float: left;" class="btn btn-primary " data-toggle="modal">
                                <i class="fas fa-plus"></i>
                                <span class="icon text-white-50"></span>Tambah Katalog</a><br><br><br>
                                
                            </div>
                        <div class="modal fade" id="tambah">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    
                                </div>
                                <form action="<?= base_url('Petugas/ins_katalog') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <label for="nama">Nama Barang </label>
                                        <input type="text" id="nama" name="nama" class="form-control" required><br>
                                        <label for="nama">Deskripsi </label>
                                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" required><br>
                                        <label for="foto">Foto </label>
                                        <input type="file" id="foto" name="foto" class="form-control" required><br>
                                   
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                            
                     </div>
                    
                        <p class="mb-4"></a></p>

                        <?php if ($this->session->flashdata('pesan') != null) : ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button><?= $this->session->flashdata('pesan'); ?>
                                </div>
                            <?php endif ?>
                            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Katalog</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>BARANG</th>
                                            <th>DESKRIPSI</th>
                                            <th>FOTO</th>
                                            <th>AKSI</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <img src="" alt="">
							<?php
							$no = 0;
							foreach ($katalog as $pm) {
								$no++;
								echo '<tr>
										<td>' . $no . '</td>
										<td>' . $pm->nama . '</td>
										<td>' . $pm->deskripsi . '</td>
										<td> <img style="width: 200px; height:200px;" src="' . base_url('assets/uploads/') . $pm->foto . '" alt="' . $pm->nama . '"></td>	
                                       
                           
                                       </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>    
                            </div> 
                            <?php if ($this->session->flashdata('pesan') != null) : ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button><?= $this->session->flashdata('pesan'); ?>
                            </div>
			            <?php endif ?>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->
            

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?= base_url('Login/logout') ?>">Keluar</a>
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

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>