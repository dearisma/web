
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
                                <span class="icon text-white-50"></span>Tambah Data Petugas</a><br><br><br>
                                
                            </div>
                        <div class="modal fade" id="tambah">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    
                                </div>
                                <form action="<?= base_url('Admin/tambah') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <label for="nama">Nama </label>
                                        <input type="text" id="nama_petugas" name="nama_petugas" class="form-control" required><br>
                                        <label for="nama">Jabatan </label>
                                        <input type="text" id="jabatan" name="jabatan" class="form-control" required><br>
                                        <label for="nama">Alumni </label>
                                        <input type="text" id="alumni" name="alumni" class="form-control" required><br>
                                       
                                       
                                        <label for="id_level">Status</label>
                                        <select name="id_level" id="id_level" class="form-control" required>
                                            <?php foreach ($level as $level) : ?>
                                                <option value="<?= $level->id_level ?>"><?= $level->status ?></option>
                                            <?php endforeach; ?>
                                        </select><br>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Petugas Klinik Sekar Satwa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>ALUMNI</th>
                                           
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <img src="" alt="">
							<?php
							$no = 0;
							foreach ($data_petugas as $pm) {
								$no++;
								echo '<tr>
										<td>' . $no . '</td>
										<td>' . $pm->nama_petugas . '</td>
										<td>' . $pm->alumni . '</td>
										
										<td>' . $pm->status . '</td>	
                                        <td>
										
                                        <a href="" class="btn btn-warning" data-toggle="modal" data-target="#update' . $pm->id_petugas . '"  data-popup="tooltip" data-placement="top" >Update</a> 
                                        <a href="' . base_url('Admin/hapus/' . $pm->id_petugas) . '" class="btn btn-danger">Delete</a></td>
                                        
                                        </td>
                                        
                                    </tr>';
							}
							?>
                                    </tbody>
                                </table>
                                <?php $no = 0;
			                    foreach ($data_petugas as $pm) : $no++; ?>
                                <div class="modal fade " id="update<?= $pm->id_petugas; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                
                                            </div>
                                            <form action="<?= base_url('Admin/update/') . $pm->id_petugas ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <label for="nama">Nama </label>
                                                    <input type="text" id="nama_petugas" name="nama_petugas" class="form-control"value="<?= $pm->nama_petugas ?>" required><br>
                                                    <label for="nama">Jabatan </label>
                                                    <input type="text" id="jabatan" name="jabatan" class="form-control"value="<?= $pm->jabatan ?>" required><br>
                                                    <label for="nama">Alumni </label>
                                                    <input type="text" id="alumni" name="alumni" class="form-control" value="<?= $pm->alumni ?>"required><br>
                                                    <!-- <label for="nama">Status </label> -->
                                                    <input type="hidden" id="id_level" name="id_level" class="form-control" value=" <?= $pm->id_level ?>" readonly> <br>
                                                    
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                        
                                </div>
                                <?php endforeach; ?>
                            </div>
                            
                            </div>
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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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