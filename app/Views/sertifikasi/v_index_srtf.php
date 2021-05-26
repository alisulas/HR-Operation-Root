<div class="row">
    <div class="col-md-12">
        <div class="kotakku-aja">
            <a href="<?= base_url('sertifikasi/add'); ?>" class="btn-lg bgku-primary">Tambah Data</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="kotakku table-responsive">
            <table id="example1" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th width="50px">No.</th>
                        <th>Nama Sertifikasi</th>
                        <th>Karyawan</th>
                        <!-- <th>Lembaga</th> -->
                        <th>Tanggal Terbit</th>
                        <th>Tgl Kadaluarsa</th>
                        <!-- <th>Unit Kerja</th> -->
                        <th>Biaya</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody class="list">
                    <?php $no = 1;
                    foreach ($sertifikasidata as $item) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="Lihat Detail Sertifikat">
                                <a href="<?= base_url('sertifikasi/' . $item['id']) ?>"><?= $item['nama_sertifikasi'] ?></a></td>
                            <td><?= $item['Personnel_Number'] ?></td>
                            <!-- <td><?= $item['lembaga'] ?></td> -->
                            <!-- <td><?= $item['tanggal_terbit'] ?></td> -->
                            <td><?= date('d F Y', strtotime($item['tanggal_terbit'])) ?></td>
                            <td><?= date('d F Y', strtotime($item['tanggal_kadaluarsa'])) ?></td>
                            <!-- <td><?= $item['Name_of_Organizational_Unit'] ?></td> -->
                            <td>Rp. <?= number_format($item['biaya'], 0, ",", ".") ?></td>
                            <td>
                                <a href="<?= base_url('sertifikasi/edit/' . $item['id']) ?>" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-edit"></i></a>
                                <button class=" btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $item['id'] ?>"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>



<div class="row">
    <div class="col-md-12">







    
    </div>
</div>