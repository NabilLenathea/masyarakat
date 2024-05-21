<?php

$nomor_ktp = $_GET['nomor_ktp'];

include '../koneksi.php';
$sql = "SELECT*FROM masyarakat WHERE nomor_ktp='$nomor_ktp'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit Aduan.</h5>
<a href="?url=aduan" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-edit-aduan&nomor_ktp=<?= $nomor_ktp; ?>">

    <div class="form-group mb-2">
        <label>tanggal kejadian</label>
        <input value="<?= $data['tgl_aduan'] ?>" type="date" name="tgl_aduan" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label>isi aduan</label>
        <input value="<?= $data['isi_aduan'] ?>" type="text" name="isi_aduan" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label>lok kejadian</label>
        <input value="<?= $data['lok_kejadian'] ?>" type="text" name="lok_kejadian" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>


</form>