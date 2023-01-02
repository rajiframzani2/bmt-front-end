<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include('../template/head.php');
      include('../template/link.php');
    ?>
  </head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include ("../template/sidebar.php");?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include ("../template/topbar.php");?>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="utama.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Managment User</li>
            </ol>
          </div>

          <!-- row -->
          <div class="row">
            
            <div class="col-lg-6">
              <!-- General Element -->
              <div class="card mb-4">
                
                <div class="card-body">
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
                      <label for="hak_akses">Hak Akses</label>
                      <select class="form-control" id="hak_akses" name="hak_akses">
                        <option value="">Pilih hak akses</option>
                        <option value="Admin">Admin</option>
                        <option value="CS">Costumer Service</option>
                        <option value="Pengelola Arsip">Pengelola Arsip</option>
                        <option value="Sales Officer">Sales Officer</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                    </div>
                  </form>
                </div>
           
              
          </div>
          <!--Row-->
        </div>



        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; 2022 - developed by
              <b><a href="https://techiraid.com/" target="_blank">ProgrammerMuda</a></b>
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

 <?php include ("../template/footer.php");?>
</body>