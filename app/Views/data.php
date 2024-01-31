<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="<?= base_url('/home/tambah_data/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
                  <h1></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Data</th> 
                      <th>Jenis Data</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    foreach ($ferdi as $gas){
                      ?>
                      <tr>
                        <th><?php echo $no++ ?></th>
                        <td><?php echo $gas->id_barang?></td>
                        <td><?php echo $gas->data?></td>
                        <td><?php echo $gas->jenis_data?></td>
                        <td><?php echo $gas->tanggal?></td>
                        <td>
                          <a href="<?= base_url('/home/edit_data/'.$gas->id_data)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i>Edit </button></a>
                          <a href="<?= base_url('/home/hapus_data/'.$gas->id_data)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i>Hapus </button></a>
                        </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>