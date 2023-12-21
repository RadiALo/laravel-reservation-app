<header class="header">
  <div class="header__nav">
    <nav class="nav">
      <ul class="nav__list">
        @if (Auth::check())
          <li class="nav__item">
            <a class="nav__link" href="{{ route('index')}}">
              Home
            </a>
          </li>

          <li class="nav__item">
            <a class="nav__link" href="{{ route('reservation.show') }}">
              My Reservations
            </a>
          </li>

          <li class="nav__item">
            <a class="nav__link" href="{{ route('reservation.create') }}">
              New Reservation
            </a>
          </li>

          <li class="nav__item">
            <a class="nav__link" href="{{ route('user.logout') }}">
              Logout
            </a>
          </li>
        @else
          <li class="nav__item">
            <a class="nav__link" href="{{ route('user.login') }}">
              Login
            </a>

          </li>
          <li class="nav__item">
            <a class="nav__link" href="{{ route('user.register') }}">
              Register
            </a>
          </li>
        @endif
      </ul>
    </nav>
</header>
