<?=
    $this->include('template/headercontent');
?>


                    <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body"><br><br><br>
                          <h4 class="card-title"><?= $title;?></h4>
                          <p class='text-right'>
                            <a href="iuran/add" class="btn btn-primary btn-icon-text"><i class="fa fa-plus"></i>Add Data</a>
                          </p>
                          <div class="table-responsive">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Tanggal</th>
                                  <th>Nama Warga</th>
                                  <th>Jumlah</th>
                                  <th>Keterangan</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no = 1;
                                if($iuran): foreach($iuran as $row): 

                                 $bulan =$row['bulan'];
                                 if($bulan == '01'){ $bulan = 'Januari';
                                }elseif($bulan == '02'){ $bulan = 'Februari';
                                }elseif($bulan == '03'){ $bulan = 'Maret';
                                }elseif($bulan == '04'){ $bulan = 'April';
                                }elseif($bulan == '05'){ $bulan = 'Mei';
                                }elseif($bulan == '06'){ $bulan = 'Juni';
                                }elseif($bulan == '07'){ $bulan = 'Juli';
                                }elseif($bulan == '08'){ $bulan = 'Agustus';
                                }elseif($bulan == '09'){ $bulan = 'September';
                                }elseif($bulan == '10'){ $bulan = 'Oktober';
                                }elseif($bulan == '11'){ $bulan = 'November';
                                }elseif($bulan == '12'){ $bulan = 'Desember';
                                }

                                $tgltransaksi = $row['tanggal']. ' '.$bulan.' '.$row['tahun'];
                                ?>
                                <tr>
                                  <th scope="row"><?php echo $no++; ?></th>
                                  <td><?= $tgltransaksi; ?></td>

                                  <?php
                                  $query = $db->query('select nama from warga where id = '.$row['id']);

                                  foreach ($query->getResultArray() as $row2){ echo "<td>".$row2['nama']."</td>"; }?>

                                  <td><?php $number = $row['jumlah'];  echo 'Rp ' . number_format($number, 0, ',', '.'); ?></td>
                                  <td><?= $row['keterangan'] ?></td>
                                  <td>
                                    <a href="<?= base_url('iuran/delete/'.$row['idiuran']); ?>" class ="btn btn-danger btn-icon-text" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Delete</a>
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