<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_data')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_data?>">

        <div class="item form-group">
          <label class="control-label col-12" >Nama Barang<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_barang" class="form-control col-12 "name="nama_barang" required="required" placeholder="Nama Barang" value="<?= $ferdi->nama_barang?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Data<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="data" class="form-control col-12 "name="data" required="required" placeholder="Data" value="<?= $ferdi->data?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Jenis Data<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="jenis_data" class="form-control col-12 "name="jenis_data" required="required" placeholder="Jenis Data" value="<?= $ferdi->jenis_data?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="datetime-local" id="tanggal" name="tanggal" placeholder="Tanggal " required="required" class="form-control col-12 " value="<?= $ferdi->tanggal?>">
          </div>
        </div>
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/data" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>