
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                         
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pemeriksaan Sekar Satwa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>  
                                            <th>AKSI</th>                                           
                                            <th>TANGGAL PENGAJUAN</th>
                                            <th>KELUHAN</th>
                                            <th>NAMA </th>
                                          
                                            <th>HEWAN </th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <img src="" alt="">
							<?php
                           
                           $no = 0;
                           foreach ($data_periksa as $pm) {
                               $no++;
                               if ($pm->status == "mengajukan") {
                                   $sts = "konfirmasi";
                               
                               echo '<tr>
                                       <td>' . $no . '</td>
                                       <td><a href="'. base_url('Petugas/upd_periksa/'). $sts . '/'  .$pm->id_periksa .'" class="btn btn-success btn-icon-split">
                                       <span class="icon text-white-50">
                                           <i class="fas fa-check"></i>
                                           <a href="'.  base_url('Reservasi/print_periksa/') .$pm->id_periksa . '" class="btn btn-success btn-icon-split">
                                           
                                           <span class="icon text-white-50">
                                               <i class="fas fa-print"></i>
                                                
                                       </td>
                                       </span>
                                      
                                   </a> 
                                       <td>' .  $pm->tgl_periksa .  '</td>	
                                       <td>' . $pm->nama . '</td>
                                       <td>' . $pm->hewan . '</td>
                                       <td>' . $pm->keluhan . '</td>
                                      
                                       
                                     </tr>';
                               
                               }else if ($pm->status == "Dikonfirmasi") {
                                   
                                    echo '<tr>
                                    <td>' . $no . '</td>
                                       <td>
                                       <span class="icon text-white-50">
                                           <i class="fas fa-check"></i>
                                           <a href="'.  base_url('Petugas/print_periksa/') .$pm->id_periksa . '" class="btn btn-success btn-icon-split">
                                           
                                           <span class="icon text-white-50">
                                               <i class="fas fa-print"></i>
                                                
                                       </td>
                                       </span>
                                       <td>' .  $pm->tgl_periksa .  '</td>	
                                       <td>' . $pm->nama . '</td>
                                       <td>' . $pm->hewan . '</td>
                                       <td>' . $pm->keluhan . '</td>
                                      
                                       
                               </tr>';
                               }
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
                        <span aria-hidden="true">??</span>
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