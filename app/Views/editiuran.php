<?=
    $this->include('template/headercontent');
?>

<?php
foreach($dataiuran as $row):

    $drafttgl = isset($row['tanggal']);
    $draftbln = isset($row['bulan']);
    $thn = isset($row['tahun']);

    if(strlen($draftbln) == 1){
        $bln = '0'.$draftbln;
    }else{
        $bln = $draftbln;
    }   

    if(strlen($drafttgl) == 1){
        $tgl = '0'.$drafttgl;
    }else{
        $tgl = $drafttgl;
    }

    $tgl1 = $thn.'-'.$bln.'-'.$tgl;
    ?>

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"><br><br>
                    <h4 class="card-title"><?= $title;?></h4>
                    <p class="card-description"> Silahkan isi data berikut </p>
                    <form class="forms-sample" action="<?= base_url('iuran/update/'.isset($row['idiuran'])) ?>" method="POST">
                      <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" required="" name="id" value="<?= $row['id'];?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tgl" class="col-sm-3 col-form-label">Tanggal Transaksi</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" value="<?= $tgl1;?>" required="" name="tanggal">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Jumlah Pembayaran</label><br>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="jumlah" id="" value="<?= isset($row['jumlah']);?>" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="keterangan" value="<?= isset($row['keterangan']);?>">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Save</button>
                      <button class="btn btn-danger">Cancel</button>
                    </form>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
<?=
    $this->include('template/footercontent');
?>