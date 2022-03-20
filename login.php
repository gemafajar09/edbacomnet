<?php
include "koneksi.php";

$nis = $_POST['nis'];
$password = md5($_POST['password']);

$login = $con->query("SELECT * FROM tb_siswa WHERE nis='$nis' AND password='$password' AND status='Y'")->fetch_assoc();


if ($login == TRUE) {
    session_start();
    $_SESSION['id_siswa'] = $login['id_siswa'];
    $_SESSION['nama'] = $login['nama'];
    $_SESSION['nis'] = $login['nis'];

    echo "
        <script>
            window.location='siswa/index.php'
        </script>
    ";
} else {
    echo "
        <script>
        alert('Maaf Username Atau Password Salah')
            window.location='index.php'
        </script>
    ";
}
