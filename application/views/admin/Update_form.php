<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Jawab Pesan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                   
                </thead>
                <tfoot>
                    <tr>
                        
                    </tr>
                </tfoot>

                <tbody><?php
                foreach ($data_form as $row) :  ?>
                    <form action="<?= base_url('Reservasi/ans_forum/') . $row->id_forum ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" name="nama" value="<?php echo $row->nama ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" value="<?php echo $row->email ?>"placeholder="Alamat">
                            </div>
                        </div>  
                    
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pesan" value="<?php echo $row->pesan ?>" placeholder="Alamat">
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Jawab</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                            </div>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Tombol</button>
                        
                        <div class="form-group row">
                            
                        </div>
                        
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                        </div>
                         
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                        </div>
                         
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                        </div>
                    </form>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->