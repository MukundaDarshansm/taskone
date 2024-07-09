
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('user-dashboard')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Task One</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        @auth
        <ul>
          <li><a href="{{ route('user-logout') }}" class="active">Logout</a></li>
        </ul>

        @else
        <ul>
          <li><a href="{{route('user-register')}}" class="active">Register</a></li>
          
          <li><a href="{{route('user-login')}}">Login</a></li>
        </ul>

        @endauth

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>