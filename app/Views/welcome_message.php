<?php
echo view('layouts/v_header');
// echo view('layouts/v_navbar');
?>

<div class="text-center img-fit">
  <img class="img-responsive img-fluid" src="<?= base_url('gambar/logogabung.png') ?>" alt="Photo">
</div>


<div class="login-page vsc-initialized" style="min-height: 512.391px;">
  <div class="login-box bg-success color-palette">
    <div class="login-logo">
      <h1>Selamat Datang</h1>
      <b>SI SDM </b> PUSRI</a>
    </div>

    <!-- /.login-logo -->

    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Login Menggunakan Username Ekios-K</p>
        <form action="<?= base_url() ?>" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="badge" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-success btn-block">Log In</button>
            </div>
          </div> <!-- tombol login -->
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
    <!-- card -->
  </div>
  <!-- /.login-box -->

</div>

<?php
echo view('layouts/v_footer');
?>