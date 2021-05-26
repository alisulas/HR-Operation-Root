<div class="container">
    <div class="content">
        <a href="<?= base_url('barang'); ?>" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Barang <?= $barang->nama_barang; ?></h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url('barang/update') ?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $barang->nama_barang ?>">
                </div>
                <div class="form-group">
                    <label for="qty">qty</label>
                    <input type="number" name="qty" id="qty" class="form-control" value="<?= $barang->qty ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Harga Beli</label>
                    <input type="number" name="hbeli" id="nama" class="form-control" value="<?= $barang->harga_beli ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Harga Jual</label>
                    <input type="number" name="jual" id="nama" class="form-control" value="<?= $barang->harga_jual?>">
                </div>
                <input type="hidden" value="<?= $barang->id_barang;?>" name="id_barang">
                <button class="btn btn-success">Edit Data</button>


                
            </form>

        </div>
    </div>
</div>