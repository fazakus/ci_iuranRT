<?=
    $this->include('template/headercontent');
?>


                    <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body"><br><br><br>
                          <h4 class="card-title">Data Warga</h4>
                          <p class='text-right'>
                            <a href="warga/add" class="btn btn-primary btn-icon-text"><i class="fa fa-plus"></i>Add Data</a>
                          </p>
                          <div class="table-responsive">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>NIK</th>
                                  <th>Nama Warga</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Alamat Rumah</th>
                                  <th>No Rumah</th>
                                  <th>Status</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no = 1;
                                if($warga): foreach($warga as $row): ?>
                                <tr>
                                  <th scope="row"><?php echo $no++; ?></th>
                                  <td><?= $row['nik']; ?></td>
                                  <td><?= $row['nama'];?></td>
                                  <td><?= $row['kelamin'];?></td>
                                  <td><?= $row['alamat'];?></td>
                                  <td><?= $row['no_rumah'];?></td>
                                  <td><?= $row['status'];?></td>
                                  <td>
                                    <a href="<?= base_url('warga/edit'.$row['id']); ?>" class="btn btn-info btn-icon-text"><i class="fa fa-pencil"></i> edit</a> &nbsp;&nbsp;
                                    <a href="<?= base_url('warga/delete'); ?>" class ="btn btn-danger btn-icon-text"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                                </tr>
                                <?php endforeach; else: ?>
                                  <tr>
                                    <td colspan="8">Tidak ada data</td>
                                </tr>
                                <?php endif; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                        
<?=
    $this->include('template/footercontent');
?>