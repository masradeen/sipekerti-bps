<div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              
              <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">
                  <i class="nav-icon fa fa-angle-left"></i>
                  <p>Data Tahun 2023</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('2022.tahap1')}}" class="nav-link">
                  <i class="nav-icon fa fa-sort"></i>
                  <p>Nominasi Pegawai</p>
                </a>
              </li>
              
              @if (Auth::user()->role <= 2 )
              <li class="nav-item">
                <a href="{{route('2022.rekap1')}}" class="nav-link">
                  <i class="nav-icon fa fa-qrcode"></i>
                  <!-- <i class="fa fa-qrcode"></i> -->
                  <p>Rekap Hasil Nominasi</p>
                </a>
              </li>
              @else
              @endif
              @if (Auth::user()->role == 1 )
              <li class="nav-item">
                <a href="{{route('2022.penilai')}}" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p> Atur Penilai  </p>
                </a>
              </li>
              @else
              @endif
              @if (Auth::user()->role <= 3 )
              <li class="nav-item">
                <a href="{{route('2022.tahap2')}}" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>Penilaian Tahap 2</p>
                </a>
              </li>
              @else
              @endif
              @if (Auth::user()->role == 1 )
              <li class="nav-item">
                <a href="{{route('2022.rekap2')}}" class="nav-link">
                  <i class="nav-icon fa fa-qrcode"></i>
                  <!-- <i class="fa fa-qrcode"></i> -->
                  <p>Rekap Nilai Tahap 2</p>
                </a>
              </li>
              @else
              @endif
              
              <div class="dropdown-divider"></div>
              
              <div class="dropdown-divider"></div>
              
              <!-- <li class="nav-item">
                <a href="{{route('komponen')}}" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p> Komponen  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('subkomponen')}}" class="nav-link">
                  <i class="nav-icon far fa-check-square"></i>
                  <p>Subkomponen </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seleksi')}}" class="nav-link">
                  <i class="nav-icon far fa-check-square"></i>
                  <p>Indikator Seleksi 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('indikator')}}" class="nav-link">
                  <i class="nav-icon far fa-check-square"></i>
                  <p>Indikator Seleksi 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('pegawai')}}" class="nav-link">
                  <i class="nav-icon far fa-check-square"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link">
                  <i class="nav-icon far fa-check-square"></i>
                  <p>Daftar Pengguna</p>
                </a>
              </li> -->
              <li class="nav-item">
                

                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon far fa-check-square"></i>
                          {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>