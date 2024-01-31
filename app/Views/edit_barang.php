<div class="card card-info">
  <div class="card-header">
    <!-- <h3 class="card-title">Edit Departement</h3> -->
    <!-- </div> -->
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_barang')?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $ferdi->id_barang?>">
      <div class="item form-group">
        <label class="control-label col-12" >Nama Barang<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="nama_barang" class="form-control col-12 "name="nama_barang" required="required" placeholder="Nama Menu" value="<?= $ferdi->nama_barang?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-12" >Deskripsi Barang<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="deskripsi_barang" class="form-control col-12 "name="deskripsi_barang" required="required" placeholder="Deskripsi Menu" value="<?= $ferdi->deskripsi_barang?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-12" >Kode Barang <span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="kode_barang" name="kode_barang" placeholder="Harga Menu " required="required" class="form-control col-12 " value="<?= $ferdi->kode_barang?>">
        </div>
      </div>
      <h1></h1>
       <div class="item form-group">
        <label class="control-label col-12" >Harga Barang <span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="harga_barang" name="harga_barang" placeholder="Harga Menu " required="required" class="form-control col-12 " value="<?= $ferdi->harga_barang?>">
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="/home/barang" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Update</button>
        </div>
      </div>
    </form>
  </div>