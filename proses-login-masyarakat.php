<?php

$nomor_ktp = $_POST['nomor_ktp'];

include 'koneksi.php';
$sql = "SELECT * FROM masyarakat WHERE nomor_ktp='$nomor_ktp'";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query)>0){
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['nomor_ktp'] = $data['nomor_ktp'];

    header('Location:masyarakat/masyarakat.php');
}else{
    echo"<script>
    alert('Maaf Anda Gagal Login, Silahkan Ulangi Lagi');
    window.Location.assign('index.php');
    </script>";

}

?>