<?php
include 'index.php';
include './koneksi/koneksi.php';
?>

    <!-- awal Main Content -->
    <div id="content" class="position-relative h-100">
      
      <!-- container isi halaman -->
      <div class="custom-container">
        <!-- row -->
        
        <!-- awal tempat tabel -->
        <div >
          <!-- tabel data -->
          <!-- row -->
        <div class="row g-6 mb-6">
          <div class="col-xl-0">
            <!-- card -->
            <div class="card card-lg">
              <!-- card header -->
              <div class="card-header border-bottom-0">
                <div>
                  <h5 class="mb-0">Daftar Pegawai</h5>
                </div>
              </div>
              <!-- table -->
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 table-centered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pegawai</th>
                      <th>NIP</th>
                      <th>Keterangan</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    //panggil tabel
                    $panggil=mysqli_query($koneksi, "SELECT * FROM t_pegawai ORDER BY kode_pegawai asc");
                    $no = 1;
                    while ($data = mysqli_fetch_array($panggil)) {
                    ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $data['nama_pegawai']?></td>
                      <td><?= $data['NIP']?></td>
                      <td><?= $data['penanggung_jawab']?></td>
                      <td><img src="../foto/<?php echo $data['gambar'];?>"  alt="..." style="height:80px;"></td>
                      
                      <td><a href="#!" class="btn btn-white btn-sm">View</a></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- akhir container isi halaman -->

    </div>
    <!-- akhir main content -->