<?php
include "../koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = $con->query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'")->fetch_assoc();


if ($login == TRUE) {
    session_start();
    $_SESSION['id_admin'] = $login['id_admin'];
    $_SESSION['nama'] = $login['nama'];
    $_SESSION['level'] = $login['level'];

    echo "
        <script>
            window.location='index.php'
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
