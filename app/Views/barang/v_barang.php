<div class="row">
    <div class="mr-2">
        <a href="<?= base_url('barang/tambah'); ?>" class="btn btn-success mb-2 bgku-primary">Tambah Data</a></div>
    <div><a href="<?= base_url('barang/tambah'); ?>" class="btn btn-success mb-2 bgku-inverse">Tambah Data</a></div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="kotakku table-responsive">

            <table id="example1" class="table table-hover table-condensed">
                <thead class="kotakku">
                    <tr>
                        <th width="50px" class="text-center">No.</th>
                        <th>id_barang</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1;
                    foreach ($getBarang3 as $isi) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $isi['id_barang']; ?></td>
                            <td><?= $isi['nama_barang']; ?></td>
                            <td><?= $isi['qty']; ?></td>
                            <td>Rp<?= number_format($isi['harga_beli']); ?>,-</td>
                            <td>Rp<?= number_format($isi['harga_jual']); ?>,-</td>
                            <td>
                                <a href="<?= base_url('barang/edit/' . $isi['id_barang']); ?>" class="btn btn-success">
                                    Edit</a>
                                <a href="<?= base_url('barang/hapus/' . $isi['id_barang']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')" class="btn btn-danger">
                                    Hapus</a>

                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>