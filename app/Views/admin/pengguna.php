<?php $this->extend('layout/template') ?>

<?php $this->section('konten') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pengguna</h1>
          </div><!-- /.col -->          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">       
            <div class="row">
                <div class="col-12">
                    <div class="card">                        
                        <div class="row mt-4 mr-4">
                            <div class="col-md-4 ml-4">
                                <!-- SEARCH FORM -->
                                <form class="form-inline" action="" method="POST">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Cari.." name="keyword">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" id="button-addon2">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>level</th>
                                <th>Aktivasi?</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $currentPage -= 1;
                                $i = 1 + (6 * $currentPage);
                                foreach ($pengguna as $user) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $user['nama_pengguna'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['nomor_telepon'] ?></td>
                                        <td><?= $user['level'] ?></td>
                                        <td><?= $user['is_active'] == 1 ? '<span class="badge bg-success">Sudah Aktivasi</span>' : '<span class="badge bg-danger">Belum Aktivasi</span>' ?></td>                            
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>                  
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <?= $pager->links('pengguna', 'my_pager') ?>                            
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /col -->
            </div>  
        </div>
        <!-- /.row -->    
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $this->endSection() ?>