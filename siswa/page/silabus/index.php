<?php
$silabus = $con->query("SELECT * FROM tb_silabus");
?>
<div class="card">
    <div class="card-header">
        Silabus
    </div>
    <div class="card-body">
        <div class="row">
            <?php
            foreach ($silabus as $a) :
            ?>
                <div class="col-md-4">

                    <div class="card" style="background-color:grey; color:white">
                        <div class="card-body">
                            <i class="fa fa-book fa-lg"></i>
                            <?= $a['judul'] ?>
                            <div class="float-right">
                                <a href="../upload/kikd/<?= $a['file_pdf'] ?>" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>