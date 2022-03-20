<?php
include "koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telpon = $_POST['telpon'];
$password = md5($_POST['password']);

$simpan = $con->query("INSERT INTO `tb_siswa`(`nis`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `no_telpon`, `password`) VALUES ('$nis','$nama','$tgl_lahir','$jenis_kelamin','$telpon','$password')");


if ($simpan == TRUE) {
    echo "
    <script>
        alert('Silahkan Tunggu Aktifasi Dari Admin')
        window.location='index.php'
    </script>
    ";
} else {
    echo "
    <script>
        alert('Error')
        window.location='index.php'
    </script>
    ";
}
