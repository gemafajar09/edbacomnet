<div class="card">
    <div class="card-header">
        <div class="float-left">
            <span>Pelaksanaan</span>
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
                        <th>Level</th>
                        <th>File Gambar</th>
                        <th>Materi</th>
                        <th>Instruksi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = $con->query("SELECT * FROM tb_stage");
                    foreach ($data as $i => $a) :
                    ?>
                        <tr>
                            <td>Level <?= $a['level'] ?></td>
                            <td><a href="../upload/stage/<?= $a['file_gambar'] ?>" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;<?= $a['file_gambar'] ?></a></td>
                            <td><?= $a['materi'] ?></td>
                            <td><?= $a['instruksi'] ?></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit" onclick="edit(
                                '<?= $a['id_stage'] ?>',
                                '<?= $a['level'] ?>',
                                '<?= $a['file_gambar'] ?>',
                                '<?= $a['materi'] ?>',
                                '<?= $a['instruksi'] ?>'
                                )"></i></button>
                                <button type="button" onclick="hapusdata('<?= $a['id_stage'] ?>')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal -->
<div id="pelaksanaanadd" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b id="title"></b></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="?page=aksi/pelaksanaan/simpan" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Level</label>
                        <input type="number" class="form-control" id="level" name="level" placeholder="Level">
                    </div>
                    <div class="form-group">
                        <label for="">File Gambar</label>
                        <input type="file" class="form-control" name="file_gambar">
                        <div id="fileold" style="display:none">
                            <span>File Lama : <i style="color:red" id="file_gambar"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Materi</label>
                        <textarea class="form-control" id="materi" name="materi" placeholder="Materi Pelajaran"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Instruksi</label>
                        <textarea class="form-control" id="instruksi" name="instruksi" placeholder="Instruksi Pelajaran"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Tutup</button>
                    <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </form>
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