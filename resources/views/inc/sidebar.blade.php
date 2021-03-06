<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse border-dark border-right" style="background:#FFFFFF;">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="/">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home mr-1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users float-left mr-2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Struktur Pegawai
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file float-left mr-2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Rekap Aktivitas Bersama
            </a>
          </li>
          
            <li class="active">
                <a href="#inputSub" class="nav-link" data-toggle="collapse" aria-expanded="false">Input Sasaran Kerja</a>
                <ul class="collapse list-unstyled" id="inputSub">
                    <li><a href="#" class="ml-3 nav-link">Utama</a></li>
                    <li><a href="#" class="ml-3 nav-link">Tambahan</a></li>
                    <li><a href="#" class="ml-3 nav-link">Kreativitas</a></li>
                </ul>
            </li>

            <li class="active">
                <a href="#pelaporanSub" class="nav-link" data-toggle="collapse" aria-expanded="false">Pelaporan Kinerja</a>
                <ul class="collapse list-unstyled" id="pelaporanSub">
                    @if(auth()->user()->level === 1)
                    <li><a href="/targetkinerja" class="ml-3 nav-link">Target Kinerja</a></li>
                    <li><a href="/penugasan" class="ml-3 nav-link">Penugasan</a></li>
                    <li><a href="/inisiatif" class="ml-3 nav-link">Inisiatif Mandiri</a></li>
                    @else
                    <li><a href="/targetkinerjasup" class="ml-3 nav-link">Target Kinerja</a></li>
                    <li><a href="/penugasansup" class="ml-3 nav-link">Penugasan</a></li>
                    <li><a href="/inisiatifsup" class="ml-3 nav-link">Inisiatif Mandiri</a></li>
                    @endif
                </ul>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
              Statistik
            </a>
          </li>
          
        </ul>

        
      </div>
    </nav>