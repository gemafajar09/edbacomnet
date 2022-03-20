<?php
if (isset($_POST['simpan'])) {
    $level = $_POST['level'];
    $materi = $_POST['materi'];
    $instruksi = $_POST['instruksi'];

    if ($_POST['id'] == NULL) {

        $tempdir = "../upload/stage/";
        if (!file_exists($tempdir)) mkdir($tempdir, 0755);
        //target file
        $targetfolder = $tempdir . basename($_FILES['file_gambar']['name']);
        $file_tmp = $_FILES['file_gambar']['tmp_name'];
        $file_type = $_FILES['file_gambar']['type'];

        if ($file_type == "image/jpeg" || $file_type == "image/png") {
            if (move_uploaded_file($file_tmp, $targetfolder)) {
                $file = basename($_FILES['file_gambar']['name']);
                $simpan = $con->query("INSERT INTO `tb_stage`(`level`, `file_gambar`, `materi`, `instruksi`) VALUES ('$level','$file','$materi','$instruksi')");

                if ($simpan == TRUE) {
                    $_SESSION['success'] = "Berhasil";
                } else {
                    $_SESSION['error'] = "Error";
                }
            } else {
                $_SESSION['error'] = "Upload File Gagal";
            }
        } else {
            $_SESSION['error'] = "Pastikan File Format Jpg";
        }
    } else {
        $id = $_POST['id'];
        if ($_FILES['file_gambar']['name'] != NULL) {
            // unlink file
            $ambil = $con->query("SELECT * FROM tb_stage WHERE id_stage = '$id'")->fetch_assoc();
            unlink('../upload/stage/' . $ambil['file_gambar']);

            $tempdir = "../upload/stage/";
            if (!file_exists($tempdir)) mkdir($tempdir, 0755);
            //target file
            $targetfolder = $tempdir . basename($_FILES['file_gambar']['name']);
            $file_tmp = $_FILES['file_gambar']['tmp_name'];
            $file_type = $_FILES['file_gambar']['type'];

            if ($file_type == "application/pdf" || $file_type == "image/gif" || $file_type == "image/jpeg" || $file_type == 'application/msword' || $file_type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
                if (move_uploaded_file($file_tmp, $targetfolder)) {
                    $file = basename($_FILES['file_gambar']['name']);
                    $edit = $con->query("UPDATE `tb_rpp` SET `judul` = '$judul', `mata_pelajaran` = '$mata_pelajaran', `file_gambar` = '$file', `kelas` = '$kelas' WHERE id_stage = '$id' ");

                    if ($edit == TRUE) {
                        $_SESSION['success'] = "Berhasil";
                    } else {
                        $_SESSION['error'] = "Error";
                    }
                } else {
                    $_SESSION['error'] = "Upload File Gagal";
                }
            } else {
                $_SESSION['error'] = "Pastikan File Format PDF";
            }
        } else {

            $edit = $con->query("UPDATE `tb_stage` SET `level` = '$level', `materi` = '$materi', `instruksi` = '$instruksi' WHERE id_stage = '$id' ");

            if ($edit == TRUE) {
                $_SESSION['success'] = "Berhasil";
            } else {
                $_SESSION['error'] = "Error";
            }
        }
    }
}
?>
<script>
    window.location = '?page=page/pelaksanaan'
</script>