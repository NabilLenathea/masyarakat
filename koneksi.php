<?php

    $koneksi = mysqli_connect('localhost', 'root' , '', 'db_pengaduan');

    if(!$koneksi) {
        echo "Koneksi Gagal";
    }

?>