<?=
    $this->include('template/headercontent');
?>



<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"><br><br>
                    <h4 class="card-title">Edit Data Warga</h4>
                    <p class="card-description"> Silahkan edit data berikut </p>

                    <?php
                  foreach($data as $row):

                      $kelamin = [
                          'L' => 'Laki - laki',
                          'P' => 'Perempuan'
                      ];
                      $status = [
                          '1' => 'Aktif',
                          '0' => 'Tidak aktif'
                      ];
                  ?>
                    <form class="forms-sample" action="<?= base_url('/warga/update/'.$row['id']) ?>" method="POST">
                      <div class="form-group row">
                        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                        <input type="text" name="nik" class="form-control " value="<?= $row['nik']; ?>">  
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nama" id="namalengkap" placeholder="Username" value="<?= $row['nama']; ?>" required ="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="kelamin" class="col-sm-3 col-form-label">Jenis kelamin</label>
                        <div class="col-sm-9">
                          <?php echo form_dropdown('kelamin', $kelamin, $row['kelamin'], ['class' => 'form-control', 'required' => '', 'style'=>'color: white;']); ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamatrumah" class="col-sm-3 col-form-label">Alamat Rumah</label>
                        <div class="col-sm-9">
                          <textarea name="alamat" class="form-control" required=""><?= $row['alamat']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="no_rumah" class="col-sm-3 col-form-label">No Rumah</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="no_rumah" value="<?= $row['no_rumah']; ?>" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status Warga</label>
                        <div class="col-sm-9">
                          <?php echo form_dropdown('status', $status, $row['status'], ['class' => 'form-control', 'required' => '', 'style'=>'color: white;']); ?>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                      <button class="btn btn-danger">Cancel</button>
                    </form>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>

<?=
    $this->include('template/footercontent');
?>