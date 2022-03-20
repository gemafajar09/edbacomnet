<?php

$id = $_GET['id'];
// unlink file
$ambil = $con->query("SELECT * FROM tb_bahan_ajar WHERE id_bahan_ajar = '$id'")->fetch_assoc();
unlink('../upload/bahan_ajar/'.$ambil['file_pdf']);

$hapus = $con->query("DELETE FROM tb_bahan_ajar WHERE id_bahan_ajar='$id'");

if($hapus == TRUE)
{
    echo "<script>
        window.location='?page=page/bahan_ajar';
    </script>";
}else{
    echo "<script>
        window.location='?page=page/bahan_ajar';
    </script>";
}