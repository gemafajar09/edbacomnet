<?php

$id = $_GET['id'];
// unlink file
$ambil = $con->query("SELECT * FROM tb_silabus WHERE id_silabus = '$id'")->fetch_assoc();
unlink('../upload/silabus/'.$ambil['file_pdf']);

$hapus = $con->query("DELETE FROM tb_silabus WHERE id_silabus='$id'");

if($hapus == TRUE)
{
    echo "<script>
        window.location='?page=page/silabus';
    </script>";
}else{
    echo "<script>
        window.location='?page=page/silabus';
    </script>";
}