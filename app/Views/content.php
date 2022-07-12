<div class="main-panel">
          <div class="content-wrapper">
            <!-- selamat datang -->
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Selamat datang di Sistem Iuran Kas RT | KAS KITA </h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Sudahkah anda membayar iuran?</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of selamat datang -->
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php $db = \Config\Database::connect();
                                                        $db = db_connect();
                                                                    
                                                        $queryuang = $db->query("select sum(jumlah) as jumlahuang from iuran");
                                                        $datauang = $queryuang->getResultArray();
                                                                    
                                                        foreach ($datauang as $row) { 
                                                          function buatRupiah($angka){
                                                              $hasil = "Rp " . number_format($angka,0,',','.');
                                                              return $hasil;
                                                          }
                                                          echo buatRupiah($row['jumlahuang']); } ?></h3>
                        </div>
                      </div>
                      <div class="col-3">
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Iuran Kas Warga</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php $db      = \Config\Database::connect();
                                                                    $db = db_connect();
                                                                    
                                                                    $querywarga = $db->query("select count(*) as jumlahwarga from warga");
                                                                    $datawarga = $querywarga->getResultArray();
                                                                    echo $datawarga[0]['jumlahwarga']; ?> Orang</h3>
                        </div>
                      </div>
                      <div class="col-3">
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Jumlah Warga</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Faza Ardan Kusuma</h3>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">312010001</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?=
            $this->include('template/footer');
          ?>
          <!-- partial -->
        </div>