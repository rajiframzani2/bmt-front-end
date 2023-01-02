<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    require "../controller/Pintasan.php";
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
            <h1 class="h3 mb-0 text-gray-800">Management User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="utama.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Managment User</li>
            </ol>
          </div>

          <!-- row -->
          <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="col-lg-12 mb-3 mr-auto">
                <a href="tambahuser.php" class="btn btn-sm btn-primary">Tambah User</a>
                </div>
           
              <!-- Simple Tables -->
              <div class="card">
                
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light text-center">
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Hak Akses</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody class="text-center">

                    <?php

                          $no=1;
                          $hasil = $proses->tampil_data_harian('t_user', $user['id']);

                          foreach($hasil as $isi){
                      ?>

                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $isi['nama']?></td>
                        <td><?php echo $isi['jabatan']?></td>
                        <td><?php echo $isi['username']?></td>
                        <td><?php echo $isi['password']?></td>
                        <td><?php echo $isi['hak_akses']?></td>
                        
                        
                        <td> <a href="#" class="btn btn-sm btn-success"><i class="fas fa-info-circle"></i> Edit</a> | <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a></td>
                      </tr>

                      <?php
                          $no++;
                          }
                      ?>

                      </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->



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