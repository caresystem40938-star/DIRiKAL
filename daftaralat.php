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
                  <h5 class="mb-0">Daftar Alat</h5>
                </div>
              </div>
              <!-- table -->
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
                      <th colspan="4" class="text-center">Aksi</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // panggil tabel
                    $panggil=mysqli_query($koneksi, "SELECT a.kode_alat, a.nama_alat, a.tipe_alat, a.merek, a.gambar_alat, a.pic, s.tgl_kalibrasi, s.kal_next FROM t_alat a LEFT JOIN t_bmn b ON a.kode_alat = b.kode_alat LEFT JOIN t_serti s ON b.kode_bmn = s.kode_bmn;");
                    $no = 1;
                    while ($data = mysqli_fetch_array($panggil)) {
                    ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $data['nama_alat']?></td>
                      <td><?= $data['merek']?></td>
                      <td><?= $data['tipe_alat']?></td>
                      <td><?= $data['tgl_kalibrasi']?></td>
                      <td><?= $data['kal_next']?></td>
                      <td><a href="view.php?hal=view&id=<?php echo $data['kode_alat']?>" class="btn btn-white btn-sm">View</a></td>
                      <td><a href="view.php?hal=view&id=<?php echo $data['kode_alat']?>" class="btn badge text-info-emphasis bg-info-subtle" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</a></td>
                      <td><a href="view.php?hal=view&id=<?php echo $data['kode_alat']?>" class="btn badge text-danger-emphasis bg-danger-subtle">Hapus</a></td>
                      <td><a href="view.php?hal=view&id=<?php echo $data['kode_alat']?>" class="btn badge text-warning-emphasis bg-warning-subtle">Edit</a></td>
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

<!-- awal halaman modal untuk tambah data -->
<div class="container modal fade" id="tambah" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0 mb-3">
        <label class="form-label">Kode Alat</label>
        <input type="search" class="form-control border-0 rounded-0 ps-0 form-focus-none" id="kodealat"
          placeholder="Kode Alat" aria-label="Search" aria-describedby="search-addon" /></label>
        <button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal" aria-label="Close">Esc</button>
      </div>

      <div class="modal-header border-0 mb-3">
        <label class="form-label">Tipe Alat</label>
        <input type="search" class="form-control border-0 rounded-0 ps-0 form-focus-none" id="kodealat"
          placeholder="Masukkan Tipe Alat" aria-label="Search" aria-describedby="search-addon" /></label>
        <button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal" aria-label="Close">Esc</button>
      </div>

      <div class="modal-header border-0 mb-3">
        <label class="form-label">Merek</label>
        <input type="search" class="form-control border-0 rounded-0 ps-0 form-focus-none" id="kodealat"
          placeholder="Masukkan Merek" aria-label="Search" aria-describedby="search-addon" /></label>
        <button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal" aria-label="Close">Simpan</button>
      </div>

    </div>
  </div>
</div>
<!-- awal halaman modal untuk tambah data -->