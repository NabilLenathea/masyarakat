<h5>Halaman Pengaduan.</h5>
<a href="?url=masyarakat" class="btn btn-primary">kembali</a>
<hr>

    <?php
    include '../koneksi.php';

    $sql = "SELECT*FROM masyarakat ORDER BY nomor_ktp DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>    
    <?php } ?>

    
</table>