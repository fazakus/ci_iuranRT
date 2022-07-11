<?=
    $this->include('template/headercontent');
?>

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"><br><br>
                    <h4 class="card-title">Tambah Warga</h4>
                    <p class="card-description"> Silahkan isi data berikut </p>
                    <form class="forms-sample" action="<?= base_url('warga/save') ?>" method="POST">
                      <div class="form-group row">
                        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" required="" name="nik" placeholder="Nomor Induk Kewarganegaraan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" required="" name="nama" placeholder="Nama Lengkap">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                          <select name="kelamin" class="form-control" style="color:white">
                            <option>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat Rumah</label><br>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="alamat" placeholder="Alamat Rumah">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="no_rumah" class="col-sm-3 col-form-label">No Rumah</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="no_rumah" placeholder="No Rumah">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                          <select name="status" class="form-control" style="color:white">
                            <option value="1" selected>Aktif</option>
                            <option value="0">Tidak Aktif</option>
                          </select>
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