<?=
    $this->include('template/headercontent');
?>

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"><br><br>
                    <h4 class="card-title"><?= $title;?></h4>
                    <p class="card-description"> Silahkan isi data berikut </p>
                    <form class="forms-sample" action="<?= base_url('iuran/save') ?>" method="POST">
                      <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" required="" name="id" placeholder="ID Warga">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tgl" class="col-sm-3 col-form-label">Tanggal Transaksi</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" value="<?= date("Y-m-d");?>" required="" name="tanggal">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Jumlah Pembayaran</label><br>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="jumlah" id="" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Save</button>
                      <button class="btn btn-danger">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
<?=
    $this->include('template/footercontent');
?>