
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               
                <!-- End of Topbar -->
                <div class="container-fluid">
                            <!-- Page Heading -->
                            <div class="col-md">
                                <a href="#tambah" style="float: left;" class="btn btn-primary " data-toggle="modal">
                                <i class="fas fa-plus"></i>
                                <span class="icon text-white-50"></span>Tambah Data Rekam Medis</a><br><br><br>
                                
                            </div>
                        <div class="modal fade" id="tambah">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    
                                </div>
                                <form action="<?= base_url('Dokter/ins_rm') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <label for="hewan">Nama Hewan </label>
                                        <input type="text" id="hewan" name="hewan" class="form-control" required><br>
                                        <label for="anamnesa">Anamnesa</label>
                                        <input type="text" id="anamnesa" name="anamnesa" class="form-control" required><br>
                                        <label for="lab">Lab </label>
                                        <input type="text" id="lab" name="lab" class="form-control" required><br>
                                        <label for="diagnosa">Diagnosa </label>
                                        <input type="text" id="diagnosa" name="diagnosa" class="form-control" required><br>
                                        <label for="terapi">Terapi </label>
                                        <input type="text" id="terapi" name="terapi" class="form-control" required><br>
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" id="keterangan" name="keterangan" class="form-control" required><br>
                                        <label for="tanggal">Tanggal Masuk</label>
                                        <input type="date" id="tanggal" name="tanggal" class="form-control" required><br>
                                        <label for="id_wali">Nama Wali</label>
                                        <select name="id_wali" id="id_wali" class="form-control" required>
                                            <?php foreach ($wali as $w) : ?>
                                                <option value="<?= $w->id_wali ?>"><?= $w->nama?></option>
                                            <?php endforeach; ?>
                                        </select><br>

                                        <label for="id_petugas">Dokter</label>
                                        <select name="id_petugas" id="id_petugas" class="form-control" required>
                                            <?php foreach ($petugas as $p) : ?>
                                                <option value="<?= $p->id_petugas ?>"><?= $p->nama_petugas?></option>
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
                <!-- Begin Page Content -->
                         
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Rekam Medis Sekar Satwa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>  
                                            <th>NAMA</th>  
                                            <th>ANAMNESA</th>                                           
                                            <th>LAB</th>
                                            <th>DIAGNOSA</th>
                                            <th>TERAPI</th>
                                            <th>KETERANGAN </th>
                                            <th>TANGGAL</th>
                                            <th>WALI </th>
                                            <th>DOKTER</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <img src="" alt="">
							<?php
                           
							$no = 0;
							foreach ($rekam_medis as $pm) {
								$no++;
                               
								echo '<tr>
										<td>' . $no . '</td>
                                      
                                        <td>' .  $pm->hewan .  '</td>		
										<td>' .  $pm->anamnesa .  '</td>	
                                        <td>' . $pm->lab . '</td>
                                        <td>' . $pm->diagnosa . '</td>
                                        <td>' . $pm->terapi . '</td>
                                        <td>' . $pm->keterangan . '</td>
                                        <td>' . $pm->tanggal . '</td>
                                        <td>' . $pm->nama . '</td>
                                        <td>' . $pm->nama_petugas   . '</td>
                                       
										
									  </tr>';
                                
							}
							?>
                                    </tbody>
                                </table>
                                
                            
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