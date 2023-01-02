<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include('../template/head.php');
      include('../template/link.php');
    ?>
  </head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Pembuatan Akun</h1>
                  </div>
                  <form action="<?php echo $url['base_url'];?>controller/Crud.php?aksi=daftar" method="POST">
                  <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap">
                  </div>  
                  <div class="form-group">
                      <label>Jabatan</label>
                      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan Jabatan">
                  </div>
                  <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" id="username"  placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                    </div>
                  
          
                    <div class="form-group">
                      <label>Hak Akses</label>
                      <input type="text" class="form-control" id="hak_akses" name="hak_akses" placeholder="Hak Akses">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="../index.php">Sudah Punya Akun?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; 2022 - developed by
              <b><a href="" target="_blank">ProgrammerMuda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include ("../template/footer.php"); ?>
</body>
</html>