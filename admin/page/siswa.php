<div class="card">
    <div class="card-header">
        <div class="float-left">
            <span>Data Siswa</span>
        </div>
        <div class="float-right">
            <button type="button" class="btn btn-primary btn-sm" onclick="buka()">Tambah Data</button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telpon</th>
                        <th>Foto Siswa</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = $con->query("SELECT * FROM tb_siswa");
                    foreach ($data as $i => $a) :
                    ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td>Level <?= $a['nama'] ?></td>
                            <td><?= $a['tanggal_lahir'] ?></td>
                            <td><?= $a['jenis_kelamin'] == 1 ? 'Laki-Laki' : 'Perempuan' ?></td>
                            <td><?= $a['no_telpon'] ?></td>
                            <td><a href="../upload/siswa/<?= $a['foto_siswa'] ?>" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;<?= $a['foto_siswa'] ?></a></td>
                            <td class="text-center">
                                <?php if ($a['status'] == 'N') : ?>
                                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-lock"></i></button>
                                <?php else : ?>
                                    <button type="button" class="btn btn-info btn-sm"><i class="fa fa-unlock"></i></button>
                                <?php endif ?>
                                <button type="button" onclick="hapusdata('<?= $a['id_stage'] ?>')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- alert -->
<?php if (isset($_SESSION['success'])) { ?>
    <script>
        toastr.success('<?= $_SESSION['success'] ?>')
    </script>
<?php
    unset($_SESSION['success']);
} elseif (isset($_SESSION['error'])) {
?>
    <script>
        toastr.error('<?= $_SESSION['error'] ?>')
    </script>
<?php
}
unset($_SESSION['error']);
?>

<script>
    function buka() {
        $('#title').html('Tambah Data');
        $('#pelaksanaanadd').modal('show')
        $('#fileold').hide()
        kosong()
    }

    function edit(id, level, file_gambar, materi, instruksi) {
        $('#fileold').show()
        $('#title').html('Edit Data');
        $('#pelaksanaanadd').modal('show')

        $('#id').val(id)
        $('#level').val(level)
        $('#file_gambar').html(file_gambar)
        $('#materi').val(materi)
        $('#instruksi').val(instruksi)
    }

    function hapusdata(id) {
        Swal.fire({
            title: 'Yakin Ingin Menghapus Data?',
            showDenyButton: true,
            confirmButtonText: '<a style="color:white" href="?page=aksi/pelaksanaan/hapus&id=' + id + '">Hapus</a>',
            denyButtonText: `Batal Hapus`,
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('Berhasil Menghapus Data!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Batal Menghapus Data', '', 'info')
            }
        })
    }

    function kosong() {
        $('#id').val('')
        $('#judul').val('')
        $('#mata_pelajaran').val('')
        $('#file_pdf').html('')
        $('#kelas').val('')
    }
</script>