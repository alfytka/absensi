<ul class="sidebar-nav" id="sidebar-nav">
  <li class="nav-item border-right">
    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}">
      <i class="bi bi-bullseye"></i>
        <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-heading">Data</li>
  <li class="nav-item">
    <a href="/siswa" class="nav-link {{ Request::is('siswa*') ? '' : 'collapsed' }}">
      <i class="bi bi-person-fill-check"></i>
      <span>Data Siswa</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="/guru" class="nav-link {{ Request::is('guru*') ? '' : 'collapsed' }}">
      <i class="bi bi-person-video3"></i>
      <span>Data Guru</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="/kelas" class="nav-link {{ Request::is('kelas*') ? '' : 'collapsed' }}">
      <i class="bi bi-hypnotize"></i>
      <span>Data Kelas</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="/mata-pelajaran" class="nav-link {{ Request::is('mata-pelajaran*') ? '' : 'collapsed' }}">
      <i class="bi bi-book-half"></i>
      <span>Mata Pelajaran</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="/pengajar" class="nav-link {{ Request::is('pengajar') ? '' : 'collapsed' }}">
      <i class="bi bi-palette2"></i>
      <span>Data Pengajar</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="/jadwal-pembelajaran" class="nav-link {{ Request::is('jadwal-pembelajaran') ? '' : 'collapsed' }}">
      <i class="bi bi-layout-text-sidebar-reverse"></i>
      <span>Jadwal Pembelajaran</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('dataspp*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-shield-check"></i>
      <span>Data Kehadiran</span>
    </a>
  </li>
  <li class="nav-heading">Opsi Lainnya</li>
  <li class="nav-item">
    <a href="#" data-bs-toggle="modal" data-bs-target="#disablebackdrop" class="nav-link collapsed">
      <i class="bi bi-power text-danger"></i>
      <span class="text-danger">Logout</span>
    </a>
  </li>
</ul>