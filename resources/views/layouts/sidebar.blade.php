<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <!-- <div class="sidebar-brand-icon" style="transform: rotateY(180deg) rotate(-45deg);">
      <i class="fas fa-plane" style="font-size: 29px;"></i>
    </div> -->
    <div class="sidebar-brand-icon" style="transform: rotateY(180deg)">
      <i class="fas fa-plane-departure" style="font-size: 29px;"></i>
    </div>
    <div class="sidebar-brand-text mx-2">Al Madinah <p class="m-0"><sup>Tour & Travel</sup></p></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/') }}">
      <i class="fas fa-fw fa-home"></i>
      <span>Beranda</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Data
  </div>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuJamaah">
      <i class="fas fa-fw fa-users"></i>
      <span>Jamaah</span>
    </a>
    <div id="menuJamaah" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">jamaah</h6>
        <a class="collapse-item" href="{{ url('/jamaah') }}">Daftar Jamaah</a>
        <a class="collapse-item" href="{{ url('/jamaah/form') }}">Tambah Jamaah</a>
      </div>
    </div>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuAgent">
      <i class="fas fa-fw fa-user-friends"></i>
      <span>Agent</span>
    </a>
    <div id="menuAgent" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">agent</h6>
        <a class="collapse-item" href="{{ url('/agent') }}">Daftar Agent</a>
        <a class="collapse-item" href="{{ url('/agent/form') }}">Tambah Agent</a>
      </div>
    </div>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuKaryawan">
      <i class="fas fa-fw fa-user-tie"></i>
      <span>Karyawan</span>
    </a>
    <div id="menuKaryawan" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">karyawan</h6>
        <a class="collapse-item" href="{{ url('/karyawan') }}">Daftar Karyawan</a>
        <a class="collapse-item" href="{{ url('/karyawan/form') }}">Tambah Karyawan</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Keuangan
  </div>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuPemasukan">
      <i class="fas fa-fw fa-sign-in-alt"></i>
      <span>Pemasukan</span>
    </a>
    <div id="menuPemasukan" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">pemasukan</h6>
        <a class="collapse-item" href="{{ url('/pemasukan') }}">Daftar Pemasukan</a>
        <a class="collapse-item" href="{{ url('/pemasukan/form') }}">Tambah Pemasukan</a>
      </div>
    </div>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuPengeluaran">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Pengeluaran</span>
    </a>
    <div id="menuPengeluaran" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">pengeluaran</h6>
        <a class="collapse-item" href="{{ url('/pengeluaran') }}">Daftar Pengeluaran</a>
        <a class="collapse-item" href="{{ url('/pengeluaran/form') }}">Tambah Pengeluaran</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Sistem
  </div>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuPesan">
      <i class="fas fa-fw fa-envelope"></i>
      <span>Pesan</span>
    </a>
    <div id="menuPesan" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">pesan</h6>
        <a class="collapse-item" href="{{ url('/pesan/form') }}">Kirim Pesan</a>
        <a class="collapse-item" href="{{ url('/pesan') }}">Pesan Terkirim</a>
        <a class="collapse-item" href="{{ url('/kontak') }}">Daftar Kontak</a>
        <a class="collapse-item" href="{{ url('/template') }}">Template Pesan</a>
      </div>
    </div>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuUsers">
      <i class="fas fa-fw fa-users-cog"></i>
      <span>Users</span>
    </a>
    <div id="menuUsers" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">users</h6>
        <a class="collapse-item" href="{{ url('/users') }}">Daftar User</a>
        <a class="collapse-item" href="{{ url('/hak-akses') }}">Hak Akses</a>
      </div>
    </div>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuKonfigurasi">
      <i class="fas fa-fw fa-cubes"></i>
      <span>Ekstra</span>
    </a>
    <div id="menuKonfigurasi" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">ekstra</h6>
        <a class="collapse-item" href="{{ url('/riwayat') }}">Riwayat Data</a>
        <a class="collapse-item" href="{{ url('/backup') }}">Backup & Restore</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->