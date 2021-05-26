<div class="row">
    <div class="col-sm-12">
        <div class="card card-success">
            <div class="card-header">
                <h1 class="card-title">Data <?= $title ?></h1>
                <button type="button" class="btn btn-default float-right" data-toggle="modal" data-target="#add"><i
                        class="fa fa-plus"></i>Tambah Data</button>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="card-body">
            
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
                            <th>Divisi</th>
                            <th width="150px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($gedung as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['gedung'] ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal"
                                    data-target="#edit<?= $value['id_gedung'] ?>"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal"
                                    data-target="#delete<?= $value['id_gedung'] ?>"><i
                                        class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php  } ?>

                    </tbody>
                </table>
            
            </div>
            <!-- /.box-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-default">Back</button>
                <button type="submit" class="btn btn-info float-right">Next</button>
            </div>
            <!-- card footer -->
        </div>
        <!-- /.box -->
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
                echo form_open('gedung/add');
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
<?php foreach ($gedung as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value['id_gedung'] ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Divisi</h4>
            </div>
            <div class="modal-body">
                <?php
                    echo form_open('gedung/edit/' . $value['id_gedung']);
                    ?>

                <div class="form-group">
                    <label>gedung</label>
                    <input name="gedung" value="<?= $value['gedung'] ?>" class="form-control" placeholder="Divisi"
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
<?php foreach ($gedung as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value['id_gedung'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Divisi</h4>
            </div>
            <div class="modal-body">

                Apakah Anda Yakin Ingin Menghapus <b><?= $value['gedung'] ?> .?</b>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left btn-flat" data-dismiss="modal">Cancel</button>
                <a href="<?= base_url('gedung/delete/' . $value['id_gedung']) ?>"
                    class="btn btn-success btn-flat">Delete</a>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>

<?php 
  print_r ($gedung);
  ?>