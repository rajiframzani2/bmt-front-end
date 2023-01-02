<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include('template/head.php');
      include('template/link.php');
    ?>
  </head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    
                    <p>(Sistem Informasi Pengolahan Arsip)</p>
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    
                  </div>
                  <form class="user" action="<?php echo $url['base_url']; ?>controller/Login.php?aksi=login" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control" id="username" name="username" 
                        placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    Belum punya Akun? Silahkan <a class="font-weight-bold normal" href="views/daftar.php">Daftar</a>
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
  <!-- Login Content -->
  <?php include ("template/footer.php");?>
</body>
</html>