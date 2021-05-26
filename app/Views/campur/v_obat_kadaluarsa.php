<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Tabel Obat Kadaluarsa</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="kode">No</th>
                            <th scope="col" class="sort" data-sort="kode">Kode</th>
                            <th scope="col" class="sort" data-sort="nama">Nama</th>
                            <th scope="col" class="sort" data-sort="bentuk">Bentuk</th>
                            <th scope="col" class="sort" data-sort="tanggalProduksi">Tanggal Produksi</th>
                            <th scope="col" class="sort" data-sort="tanggalKadaluarsa">Tanggal Kadaluarsa</th>
                            <th scope="col" class="sort" data-sort="harga">Harga</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $no = 1;
                        foreach ($dataarr as $key => $item) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?=$item->kode_obat?></td>
                            <td><?=$item->nama_obat?></td>
                            <td><?=$item->bentuk_obat?></td>
                            <td><?=$item->tanggal_produksi?></td>
                            <td><?=$item->tanggal_kadaluarsa?></td>
                            <td><?=$item->harga?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if(!count($dataarr)): ?>
                <p class="text-center">
                    tidak ada data untuk ditampilkan
                </p>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>