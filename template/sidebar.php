<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="<?php echo $url['base_url']?>assets/img/logo/bmtlogo2.png">
    </div>
    <div class="sidebar-brand-text mx-3">BMT Talaga</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item">
    <a class="nav-link" href="<?php echo $url['base_url']?>views/utama.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Home</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Menu
  </div>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo $url['base_url']?>views/managmentuser.php">
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Managment User</span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengumuman"
      aria-expanded="true" aria-controls="collapsePengumuman">
      <i class="far fa-fw fa-window-maximize"></i>
      <span>Input Pengumuman</span>
    </a>
    <div id="collapsePengumuman" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Pengumuman</h6>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/harian.php">Input Pengumuman</a>
        
      </div>
    </div>
  </li>

  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Arsip</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Arsip</h6>
            <a class="collapse-item" href="<?php echo $url['base_url']?>views/harian.php">Data Master Arsip</a>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/mingguan.php">Pembiayaan</a>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/bulanan.php">Simpanan</a>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/bulanan.php">Deposito</a>
          </div>
        </div>
      </li>
  

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjam"
      aria-expanded="true" aria-controls="collapsePeminjam">
      <i class="far fa-fw fa-window-maximize"></i>
      <span>Peminjaman Arsip</span>
    </a>
    <div id="collapsePeminjam" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Peminjaman Arsip</h6>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/harian.php">Peminjaman Arsip</a>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/mingguan.php">Pengembalian Arsip</a>
        
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJaminan"
      aria-expanded="true" aria-controls="collapseJaminan">
      <i class="far fa-fw fa-window-maximize"></i>
      <span>Jaminan</span>
    </a>
    <div id="collapseJaminan" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Pilih Jaminan</h6>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/harian.php">Data Master Pinjaman</a>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/mingguan.php">BPKB</a>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/bulanan.php">SHM</a>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/bulanan.php">Sertifikat Deposito</a>
      </div>
    </div>
  </li>

   <li class="nav-item">
    <a class="nav-link" href="<?php echo $url['base_url']?>views/catatan.php">
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Pengambilan Jaminan</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
      aria-expanded="true" aria-controls="collapseBootstrap">
      <i class="far fa-fw fa-window-maximize"></i>
      <span>Surat Masuk-Keluar</span>
    </a>
    <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Pilih surat</h6>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/harian.php">Surat Masuk</a>
        <a class="collapse-item" href="<?php echo $url['base_url']?>views/mingguan.php">Surat Keluar</a>
        
      </div>
    </div>
  </li>
  
</ul>