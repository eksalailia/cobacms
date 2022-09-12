<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{URL::asset('frontend/assets/img/logo4.png')}}" style="height: 70px;width:195px;max-height:100px">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Beranda</a></li>
          {{-- <li><a href="/about">Tentang</a></li> --}}
          <li class="dropdown"><a href="/about"><span>Tentang</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/about">Profil</a></li>
              <li><a href="/tupoksi">Tugas Pokok dan Fungsi</a></li>
              <li><a href="/standarpelayanan">Standar Pelayanan</a></li>
              {{-- <li><a href="#">Dropdown 4</a></li> --}}
            </ul>
          </li>
          <li class="dropdown"><a href="/petugas"><span>PPID</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><a href="/petugas">Petugas PPID</a></li>
              <li><a href="#">Prosedur Permohonan Informasi</a></li>
              <li><a href="#">Prosedur Pengajuan Keberatan</a></li>
              <li><a href="#">Prosedur Penyelesaian Sengketa</a></li>
            </ul>
          </li>
          <li><a href="/blog">Kegiatan</a></li>
          <li><a href="/contact">Kontak</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
