<?php

$id = $_GET['id'];
// unlink file
$ambil = $con->query("SELECT * FROM tb_rpp WHERE id_rpp = '$id'")->fetch_assoc();
unlink('../upload/rpp/'.$ambil['file_pdf']);

$hapus = $con->query("DELETE FROM tb_rpp WHERE id_rpp='$id'");

if($hapus == TRUE)
{
    echo "<script>
        window.location='?page=page/rpp';
    </script>";
}else{
    echo "<script>
        window.location='?page=page/rpp';
    </script>";
}