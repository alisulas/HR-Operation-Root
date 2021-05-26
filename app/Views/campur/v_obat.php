<div class="row">
    <div class="col-sm-12">
        <div class="card card-success">
            <div class="card-header">
                <h1 class="card-title">Data <?= $title ?></h1>
                <div class="card-tools float-right">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>Tambah Data</button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"> -->

                <?php

                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success" role="alert">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
                ?>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Lembaga</th>
                            <th>Tgl Terbit</th>
                            <th>Tgl Kadaluarsa</th>
                            <th>Biaya</th>
                            <th width="150px" class="text-center">Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php $no = 1;
                        foreach ($obat as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['kode_obat'] ?></td>
                            <td><?= $value['nama_obat'] ?></td>
                            <td><?= $value['bentuk_obat'] ?></td>
                            <td><?= $value['tanggal_produksi'] ?></td>
                            <td><?= $value['tanggal_kadaluarsa'] ?></td>
                            <td><?= $value['harga'] ?></td>

                            <td class="text-center">
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal"
                                    data-target="#edit<?= $value['kode_obat'] ?>"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal"
                                    data-target="#delete<?= $value['kode_obat'] ?>"><i
                                        class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php  } ?>

                    </tbody>
                </table>
            <!-- </div> -->
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<!-- modal Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Divisi</h4>
            </div>
            <div class="modal-body">
                <?php
                echo form_open('fakultas/add');
                ?>

                <div class="form-group">
                    <label>Divisi</label>
                    <input name="divisi" class="form-control" placeholder="Divisi" required>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left btn-flat" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success btn-flat">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- modal edit -->
<?php foreach ($obat as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value['kode_obat'] ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Divisi</h4>
            </div>
            <div class="modal-body">
                <?php
                    echo form_open('fakultas/edit/' . $value['kode_obat']);
                    ?>

                <div class="form-group">
                    <label>Fakultas</label>
                    <input name="fakultas" value="<?= $value['nama_obat'] ?>" class="form-control" placeholder="Divisi"
                        required>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left btn-flat" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success btn-flat">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>


<!-- modal delete -->
<?php foreach ($obat as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value['kode_obat'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Divisi</h4>
            </div>
            <div class="modal-body">

                Apakah Anda Yakin Ingin Menghapus <b><?= $value['nama_obat'] ?> ?</b>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left btn-flat" data-dismiss="modal">Cancel</button>
                <a href="<?= base_url('fakultas/delete/' . $value['kode_obat']) ?>"
                    class="btn btn-success btn-flat" type="submit">Delete</a>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>



