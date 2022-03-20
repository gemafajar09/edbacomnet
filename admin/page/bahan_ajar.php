<div class="card">
    <div class="card-header">
        <div class="float-left">
            <span>Bahan Ajar</span>
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
                        <th>Judul</th>
                        <th>Mata Pelajaran</th>
                        <th>File Pdf</th>
                        <th>Kelas</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $data = $con->query("SELECT * FROM tb_bahan_ajar");
                        foreach($data as $i => $a):
                    ?>
                    <tr>
                        <td><?= $i+1 ?></td>
                        <td><?= $a['judul'] ?></td>
                        <td><?= $a['mata_pelajaran'] ?></td>
                        <td><a href="../upload/kikd/<?= $a['file_pdf'] ?>" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;<?= $a['file_pdf'] ?></a></td>
                        <td><?= $a['kelas'] ?></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit" onclick="edit(
                                '<?= $a['id_bahan_ajar'] ?>',
                                '<?= $a['judul'] ?>',
                                '<?= $a['mata_pelajaran'] ?>',
                                '<?= $a['file_pdf'] ?>',
                                '<?= $a['kelas'] ?>'
                                )"></i></button>
                            <button type="button" onclick="hapusdata('<?= $a['id_bahan_ajar'] ?>')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal -->
<div id="bahanadd" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b id="title"></b></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="?page=aksi/bahan_ajar/simpan" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <textarea class="form-control" id="judul" type="text" class="form-control" name="judul" placeholder="Judul Materi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Mata Pelajaran</label>
                        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" placeholder="Mata Pelajaran">
                    </div>
                    <div class="form-group">
                        <label for="">File PDF</label>
                        <input type="file" class="form-control" name="file_pdf">
                        <div id="fileold" style="display:none">
                            <span>File Lama : <i style="color:red" id="file_pdf"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
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
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        
            toastr.success('<?= $_SESSION['success'] ?>')
    </script>
<?php 
unset($_SESSION['success']);

}elseif(isset($_SESSION['error'])){ 
?>
    <script>
            toastr.error('<?= $_SESSION['error'] ?>')
    </script>
<?php 
} 
unset( $_SESSION['error']);  
?>

<script>
    function buka()
    {
        $('#title').html('Tambah Data');
        $('#bahanadd').modal('show')
        $('#fileold').hide()
        kosong()
    }

    function edit(id,judul,mata_pelajaran,file_pdf,kelas)
    {
        $('#fileold').show()
        $('#title').html('Edit Data');
        $('#bahanadd').modal('show')

        $('#id').val(id)
        $('#judul').val(judul)
        $('#mata_pelajaran').val(mata_pelajaran)
        $('#file_pdf').html(file_pdf)
        $('#kelas').val(kelas)
    }

    function hapusdata(id)
    {
        Swal.fire({
            title: 'Yakin Ingin Menghapus Data?',
            showDenyButton: true,
            confirmButtonText: '<a style="color:white" href="?page=aksi/bahan_ajar/hapus&id='+id+'">Hapus</a>',
            denyButtonText: `Batal Hapus`,
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('Berhasil Menghapus Data!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Batal Menghapus Data', '', 'info')
            }
        })
    }

    function kosong()
    {
        $('#id').val('')
        $('#judul').val('')
        $('#mata_pelajaran').val('')
        $('#file_pdf').html('')
        $('#kelas').val('')
    }
</script>