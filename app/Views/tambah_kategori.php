<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_kategori')?>" method="post">
                <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Nama Kategori<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_kategori" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_kategori" required="required" placeholder="Nama Kategori">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Deskripsi Kategori<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="deskripsi_kategori" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="deskripsi_kategori" required="required" placeholder="Deskripsi Kategori">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="datetime-local" id="tanggal" name="tanggal" placeholder="Tanggal " required="required" class="form-control col-12">
          </div>
        </div>
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/kategori" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>