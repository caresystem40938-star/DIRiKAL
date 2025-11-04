<?php
include 'index.php';
include './koneksi/koneksi.php';
?>
<div>
  <div id="content" class="position-relative h-100">
      <!-- row -->
        <div class="row g-6 mb-6">
          <div class=" col-12">
            <!-- card -->
            <div class="card card-lg">
              <!--  card body -->
              <div class="card-body d-flex flex-column gap-5">
                <div class="mb-4">
                  <!-- heading -->
                  <h5 class="mb-0">Laporan Kalibrasi</h5>
                </div>
                <div class="bg-gray-100 p-3 rounded-3">
                  <ul class="nav nav-pills-white nav-fill" id="chartTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="current-week-tab" data-bs-toggle="pill"
                        data-bs-target="#current-week" type="button" role="tab" aria-controls="current-week"
                        aria-selected="true">
                        <span class="d-flex flex-column">
                          <span class="d-flex align-items-center gap-2">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                fill="currentColor"
                                class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-primary">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                  d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                              </svg></span><span>Tahun Berjalan (2025)</span>
                          </span>
                          <span class="text-start fs-8 mt-2"><?=$total_data1?> Data ditemukan untuk tahun 2025</span>
                        </span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="past-week-tab" data-bs-toggle="pill" data-bs-target="#past-week"
                        type="button" role="tab" aria-controls="past-week" aria-selected="false">
                        <span class="d-flex flex-column">
                          <span class="d-flex align-items-center gap-2">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                fill="currentColor"
                                class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-warning">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                  d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                              </svg></span><span>Tahun Berikutnya (2026)</span>
                          </span>
                          <span class="text-start fs-8 mt-2"><?=$total_data2?> Data ditemukan untuk tahun 2026</span>
                        </span>
                      </button>
                    </li>
                  </ul>
                </div>
                <!-- awal konten dashboard -->
                <div class="tab-content" id="chartTabsContent">
                  <div class="tab-pane fade show active" id="current-week" role="tabpanel"
                    aria-labelledby="current-week-tab">
                    <div class="row g-6 mb-6">
          <div class="col-xl-0">
            <!-- card -->
            <div class="card card-lg">
              <!-- card header -->
              <div class="card-header border-bottom-0">
                <div>
                  <h5 class="mb-0">Daftar Alat</h5>
                </div>
              </div>
              <!-- table tahun berjalan -->
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 table-centered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Alat</th>
                      <th>Merk</th>
                      <th>Tipe Alat</th>
                      <th>Kalibrasi Terakhir</th>
                      <th>Kalibrasi Selanjutnya</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                    $no = 1;
                    if ($total_data1 > 0) {
                    while ($data1 = mysqli_fetch_array($panggil1)) {
                    ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $data1['nama_alat']?></td>
                      <td><?= $data1['merek']?></td>
                      <td><?= $data1['tipe_alat']?></td>
                      <td><?= $data1['tgl_kalibrasi']?></td>
                      <td><?= $data1['kal_next']?></td>
                    </tr>
                  <?php } 
                  } else {?>

                    <?php
                  }?>
                  </tbody>
                </table>
              </div>
              <!-- akhir tabel tahun berjalan-->
            </div>
          </div>
        </div>
                  </div>
                  <div class="tab-pane fade" id="past-week" role="tabpanel" aria-labelledby="past-week-tab">
                    <!-- table tahun berjalan -->
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 table-centered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Alat</th>
                      <th>Merk</th>
                      <th>Tipe Alat</th>
                      <th>Kalibrasi Terakhir</th>
                      <th>Kalibrasi Selanjutnya</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                    $no = 1;
                    if ($total_data2 > 0) {
                    while ($data2 = mysqli_fetch_array($panggil2)) {
                    ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $data2['nama_alat']?></td>
                      <td><?= $data2['merek']?></td>
                      <td><?= $data2['tipe_alat']?></td>
                      <td><?= $data2['tgl_kalibrasi']?></td>
                      <td><?= $data2['kal_next']?></td>
                    </tr>
                  <?php } 
                  } else {?>

                    <?php
                  }?>
                  </tbody>
                </table>
              </div>
              <!-- akhir tabel tahun berjalan-->
                  </div>
                </div>
                <!-- akhir konten dashborad -->
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>