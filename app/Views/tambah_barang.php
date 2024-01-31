<div class="card card-info">
  <div class="card-header">
    <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
    <!-- </div> -->
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_barang')?>" method="post" enctype="multipart/form-data">
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Nama Barang<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="nama_barang" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_barang" required="required" placeholder="Nama Barang">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Deskripsi Barang<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="deskripsi_barang" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="deskripsi_barang" required="required" placeholder="Deskripsi Barang">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Kode Barang<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="kode_barang" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="kode_barang" required="required" placeholder="Kode Barang">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Harga Barang<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="harga_barang" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="harga_barang" required="required" placeholder="Harga Barang">
        </div>
      </div>
      <h1></h1>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="/home/barang" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>