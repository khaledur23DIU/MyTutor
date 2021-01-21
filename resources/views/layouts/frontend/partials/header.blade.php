<header class="header-area">
      <!-- Navbar Start -->
  <nav class="navbar bg-white navbar-expand-lg fixed-top py-3">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('assets/frontend/assets/img/logo.png')}}" alt="" class="img img-fluid">
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#myNavbar">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav ml-auto">
          @guest
          <li class="nav-item {{ $activePage == 'home' ? ' active' : '' }}">
            <a href="{{ route('home') }}" class="nav-link ">{{ __('HOME') }}</a>
          </li>
          <li class="nav-item {{ $activePage == 'jobBoard' ? ' active' : '' }}">
            <a href="#" class="nav-link">{{ __('JOB BOARD') }}</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">{{ __('TUTORIAL') }}</a>
          </li>
          <li class="nav-item {{ $activePage == 'tutorHub' ? ' active' : '' }}">
            <a href="{{ route('tutor-hub') }}" class="nav-link"> {{ __('TUTORS HUB') }}</a>
          </li>
          <li class="nav-item {{ $activePage == 'register' ? ' active' : '' }}">
            <a href="{{ route('register') }}" class="nav-link"> {{ __('REGISTRATION') }}</a>
          </li>
          <li class="nav-item {{ $activePage == 'login' ? ' active' : '' }}">
            <a href="{{ route('login') }}" class="nav-link"> {{ __('LOGIN') }}</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="navSlideBox">
              <i class="fa fa-info-circle" aria-hidden="true"></i>
            </a>
          </li>
          @else
          <li class="nav-item {{ $activePage == 'home' ? ' active' : '' }}">
            <a href="{{ route('home') }}" class="nav-link ">{{ __('HOME') }}</a>
          </li>
          <li class="nav-item {{ $activePage == 'jobBoard' ? ' active' : '' }}">
            <a href="#" class="nav-link">{{ __('JOB BOARD') }}</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">{{ __('TUTORIAL') }}</a>
          </li>
          <li class="nav-item {{ $activePage == 'tutorHub' ? ' active' : '' }}">
            <a href="{{ route('tutor-hub') }}" class="nav-link"> {{ __('TUTORS HUB') }}</a>
          </li>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ ucfirst(Auth::user()->name) }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('opinion.index',Auth::user()->name) }}">{{ __('OPINION') }}</a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('LOGOUT') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="navSlideBox">
              <i class="fa fa-info-circle" aria-hidden="true"></i>
            </a>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
</header>