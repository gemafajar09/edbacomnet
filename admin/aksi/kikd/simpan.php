<?php
if(isset($_POST['simpan']))
{
    $judul = $_POST['judul'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $kelas = $_POST['kelas'];

    if($_POST['id'] == NULL){

        $tempdir = "../upload/kikd/";
        if (!file_exists($tempdir)) mkdir($tempdir, 0755);
        //target file
        $targetfolder = $tempdir . basename($_FILES['file_pdf']['name']);
        $file_tmp = $_FILES['file_pdf']['tmp_name'];
        $file_type = $_FILES['file_pdf']['type'];

        
        if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {
            if(move_uploaded_file($file_tmp, $targetfolder))
            {
                $file = basename($_FILES['file_pdf']['name']);
                $simpan = $con->query("INSERT INTO `tb_kikd`(`judul`, `mata_pelajaran`, `file_pdf`, `kelas`) VALUES ('$judul','$mata_pelajaran','$file','$kelas')");
        
                if($simpan == TRUE)
                {
                    $_SESSION['success'] = "Berhasil";
                }else{
                    $_SESSION['error'] = "Error";
                }
            }else{
                $_SESSION['error'] = "Upload File Gagal";
            }
        }else{
            $_SESSION['error'] = "Pastikan File Format PDF";
        }
    }else{
        $id = $_POST['id'];
        if($_FILES['file_pdf']['name'] != NULL)
        {
            // unlink file
            $ambil = $con->query("SELECT * FROM tb_kikd WHERE id_kikd = '$id'")->fetch_assoc();
            unlink('../upload/kikd/'.$ambil['file_pdf']);

            $tempdir = "../upload/kikd/";
            if (!file_exists($tempdir)) mkdir($tempdir, 0755);
            //target file
            $targetfolder = $tempdir . basename($_FILES['file_pdf']['name']);
            $file_tmp = $_FILES['file_pdf']['tmp_name'];
            $file_type = $_FILES['file_pdf']['type'];
        
            if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg" || $file_type == 'application/msword' || $file_type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
                if(move_uploaded_file($file_tmp, $targetfolder))
                {
                    $file = basename($_FILES['file_pdf']['name']);
                    $edit = $con->query("UPDATE `tb_kikd` SET `judul` = '$judul', `mata_pelajaran` = '$mata_pelajaran', `file_pdf` = '$file', `kelas` = '$kelas' WHERE id_kikd = '$id' ");
            
                    if($edit == TRUE)
                    {
                        $_SESSION['success'] = "Berhasil";
                    }else{
                        $_SESSION['error'] = "Error";
                    }
                }else{
                    $_SESSION['error'] = "Upload File Gagal";
                }
            }else{
                $_SESSION['error'] = "Pastikan File Format PDF";
            }
        }else{
            $edit = $con->query("UPDATE `tb_kikd` SET `judul` = '$judul', `mata_pelajaran` = '$mata_pelajaran', `file_pdf` = '$file', `kelas` = '$kelas' WHERE id_kikd = '$id' ");
            
            if($edit == TRUE)
            {
                $_SESSION['success'] = "Berhasil";
            }else{
                $_SESSION['error'] = "Error";
            }
        }
    }
}
?>
<script>
    window.location='?page=page/kikd'
</script>



