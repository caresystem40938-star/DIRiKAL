<?php
include '././koneksi/koneksi.php';

$kode_alat = isset($_GET['id']) ? $_GET['id'] : '';


$sql = "
SELECT 
  a.kode_alat,
  a.nama_alat,
  a.tipe_alat,
  a.merek,
  a.gambar_alat,
  a.pic,
  b.no_inv_lab,
  b.no_bmn,
  b.tahun_perolehan,
  b.nilai_perolahan,
  b.kondisi,
  s.tgl_kalibrasi,
  s.kal_next,
  s.file,
  l.ruangan
FROM t_alat a
LEFT JOIN t_bmn b ON a.kode_alat = b.kode_alat
LEFT JOIN t_serti s ON b.kode_bmn = s.kode_bmn
LEFT JOIN t_lab l ON s.kode_ruangan = l.kode_ruangan
WHERE a.kode_alat = '$kode_alat'
LIMIT 1
";

$result = mysqli_query($koneksi, $sql);
if (!$result) {
    die("Query Error: " . mysqli_error($koneksi));
}

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Alat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <a href="daftaralat.php" class="btn btn-secondary mb-3">&laquo; Kembali</a>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4>Detail Alat: <?= htmlspecialchars($data['nama_alat']); ?></h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr><th>Kode Alat</th><td><?= $data['kode_alat']; ?></td></tr>
                    <tr><th>Nama Alat</th><td><?= $data['nama_alat']; ?></td></tr>
                    <tr><th>Tipe Alat</th><td><?= $data['tipe_alat']; ?></td></tr>
                    <tr><th>Merek</th><td><?= $data['merek']; ?></td></tr>
                    <tr><th>No Inventaris Lab</th><td><?= $data['no_inv_lab']; ?></td></tr>
                    <tr><th>No BMN</th><td><?= $data['no_bmn']; ?></td></tr>
                    <tr><th>Tahun Perolehan</th><td><?= $data['tahun_perolehan']; ?></td></tr>
                    <tr><th>Nilai Perolehan</th><td><?= number_format($data['nilai_perolahan'], 0, ',', '.'); ?></td></tr>
                    <tr><th>Kondisi</th><td><?= $data['kondisi']; ?></td></tr>
                    <tr><th>Tanggal Kalibrasi</th><td><?= $data['tgl_kalibrasi']; ?></td></tr>
                    <tr><th>Kalibrasi Berikutnya</th><td><?= $data['kal_next']; ?></td></tr>
                    <tr><th>Ruangan</th><td><?= $data['ruangan']; ?></td></tr>
                    <tr><th>PIC</th><td><?= $data['pic']; ?></td></tr>
                    <?php if (!empty($data['file'])): ?>
  <div class="text-center mt-3">
    <a href="../foto/sertifikat/<?= htmlspecialchars($data['file']); ?>" 
       target="_blank" 
       class="btn btn-outline-primary">
       📄 Lihat Sertifikat Kalibrasi
    </a>
  </div>
<?php else: ?>
  <p class="text-center text-muted mt-3">Tidak ada file sertifikat.</p>
<?php endif; ?>

                </table>

                <?php if ($data['gambar_alat']) { ?>
                    <div class="text-center mt-3">
                       <img src="../foto/alat/<?= htmlspecialchars($data['gambar_alat']); ?>" 
     alt="Gambar Alat" 
     class="img-fluid" 
     style="max-width:400px;">



                    </div>
                <?php } ?>

                <!-- QR Code -->
                <div class="text-center mt-4">
                    <img src="<?= $qrFile ?>" alt="QR Code" width="150">
                    <p class="text-muted mt-2">Scan untuk membuka halaman ini</p>
                </div>

            </div>
        </div>
