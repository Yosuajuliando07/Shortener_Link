<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Search form -->
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center  ml-md-auto ">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{ asset('assets/images/' . Auth::user()->image) }}" class="">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->nama }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right ">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Selamat Datang!</h6>
              </div>
              @if (Auth::check() && Auth::user()->role->id == 1)
              <a href="./adminedit" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Profil</span>
              </a>
              <a href="{{route('admin.ubahpasswordindex')}}" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Ubah Password</span>
              </a>
              @else
              <a href="./memberedit" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Profil</span>
              </a>
              <a href="{{route('member.ubahpasswordindex')}}" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Ubah Password</span>
              </a>
              @endif
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>

              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>