<div class="card card-info">
  <div class="card-header">
    <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
    <!-- </div> -->
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_buku')?>" method="post" enctype="multipart/form-data">
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Judul Buku<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="judul_buku" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="judul_buku" required="required" placeholder="Judul Buku">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Cover Buku<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="cover_buku" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="cover_buku" required="required" placeholder="Cover Buku">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Kategori Buku<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="kategori_buku" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="kategori_buku" required="required" placeholder="Kategori Buku">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Tanggal<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="datetime-local" id="tanggal" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="tanggal" required="required" placeholder="Tanggal">
        </div>
      </div>
      <h1></h1>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="/home/buku" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>