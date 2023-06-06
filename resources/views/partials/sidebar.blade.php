<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item border-right">
    <a href="/dashboard" class="nav-link ">
      <i class="bi bi-back"></i>
        <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Data</li>

  <li class="nav-item">
    <a href="/datakelas" class="nav-link collapsed">
      <i class="bi bi-text-wrap"></i>
      <span>Data Siswa</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="/dataprodi" class="nav-link collapsed">
      <i class="bi bi-asterisk"></i>
      <span>Data Guru</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="/dataprodi" class="nav-link collapsed">
      <i class="bi bi-asterisk"></i>
      <span>Data Kelas</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('dataspp*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-book-half"></i>
      <span>Mata Pelajaran</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="#" class="nav-link {{ Request::is(['datapembayaran','datapembayaran/*/edit','datapembayaran/*'])?'fw-bold':'collapsed' }}">
      <i class="bi bi-palette2"></i>
      <span>Jadwal Pembelajaran</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('dataspp*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-book-half"></i>
      <span>Data Kehadiran</span>
    </a>
  </li>

  <li class="nav-heading">Opsi Lainnya</li>

  <li class="nav-item">
    <a href="/profile" class="nav-link {{ Request::is('profile*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-universal-access"></i>
      <span>Profile</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="#" data-bs-toggle="modal" data-bs-target="#disablebackdrop" class="nav-link collapsed">
      <i class="bi bi-chevron-left text-danger"></i>
      <span class="text-danger">Logout</span>
    </a>
  </li>

</ul>