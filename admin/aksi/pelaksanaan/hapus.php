<?php

$id = $_GET['id'];
// unlink file
$ambil = $con->query("SELECT * FROM tb_stage WHERE id_stage = '$id'")->fetch_assoc();
unlink('../upload/stage/' . $ambil['file_gambar']);

$hapus = $con->query("DELETE FROM tb_stage WHERE id_stage='$id'");

if ($hapus == TRUE) {
    echo "<script>
        window.location='?page=page/pelaksanaan';
    </script>";
} else {
    echo "<script>
        window.location='?page=page/pelaksanaan';
    </script>";
}
