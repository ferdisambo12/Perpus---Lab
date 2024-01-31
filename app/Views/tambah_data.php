<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_transaksi')?>" method="post">
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
          <label class="control-label col-12" >Data<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="data" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="data" required="required" placeholder="Data">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Jenis Data<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="x" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jenis_data" required="required" placeholder="Jenis Data">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="datetime-local" id="tanggal_transaksi" name="tanggal_transaksi" placeholder="Tanggal " required="required" class="form-control col-12">
          </div>
        </div>
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/transaksi" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>