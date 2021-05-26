<div class="col-lg-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Menu Pencarian</h5>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIP :</label>
                                <div class="col-sm-5">
                                    <input type="text" name="nip_cari" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NAMA :</label>
                                <div class="col-sm-5">
                                    <input type="text" name="nama_cari" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="form-group text-center">
                        <img src="<?= base_url() ?>dist/img/default.jpg" alt="foto" width="200" height="200">
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <table width="100%">
                            <tbody>
                                <tr>
                                    <td width="40%">Nama</td>
                                    <td width="5%">:</td>
                                    <td width="60%">Muhammad rizaldi</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>:</td>
                                    <td>198508152009031005</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>11-11-2020</td>
                                </tr>
                                <tr>
                                    <td>Status Kepegawaian</td>
                                    <td>:</td>
                                    <td>PNS</td>
                                </tr>
                                <tr>
                                    <td>Pangkat Akhir</td>
                                    <td>:</td>
                                    <td>Penata Tingkat 1</td>
                                </tr>
                                <tr>
                                    <td colspan="3">

                                        <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align" data-toggle="modal" data-target="#modal-default">
                                            <i class="fa fa-info-circle"></i> Data Detail
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align" data-toggle="modal" data-target="#modal-default">
                                            <i class="fa fa-user"></i> Biodata
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
        </div> -->

    </div>
</div>