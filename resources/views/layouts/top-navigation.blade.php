<!-- Combined Navbar with Centered Links -->
<header class="navbar navbar-expand-lg bg-light ">
  <div class="container-xl">
    <a class="navbar-brand text-primary" href="{{ route('home') }}">i-Bear True Solutions Inc.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-menu">
      <!-- Centered navigation links -->
      @auth
      @if(auth()->user()->user_type != 0)
      <ul class="navbar-nav mx-auto">
        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('services') }}">Services</a>
        </li>
        <li class="nav-item {{ request()->routeIs('careers') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('careers') }}">Careers</a>
        </li>
        <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('about') }}">About Us</a>
        </li>
        <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
        </li>
      </ul>
      @endif
      @endauth

      <!-- Right-side user-related elements -->
      <div class="navbar-nav flex-row order-md-last ms-auto">
        <div class="d-none d-md-flex">
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @endif
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else


          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <div class="d-none d-xl-flex align-items-center ps-2">
                <span class="avatar me-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler- text-blue icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                  </svg><span class="badge bg-azure"></span>
                </span>
                <div>
                  <div>{{ auth()->user()->name }}</div>
                  <div class="mt-1 fw-bold text-blue">
                    @if (auth()->user()->user_type == 0)
                    iBTS Admin
                    @elseif (auth()->user()->user_type == 1)
                    Applicant
                    @endif
                  </div>
                </div>
              </div>

            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              @auth
              @if(auth()->user()->user_type == 1)
              <a href="{{ route('applicants.getJobApplications') }}" class="dropdown-item">My Job Applications</a>
              @endif
              @endauth
              <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </div>
          </div>
          @endguest
        </div>
      </div>
    </div>
  </div>
</header>


<script>
  // Toggle the notification card visibility
  document.getElementById('notificationBell').addEventListener('click', function(event) {
    event.preventDefault();
    const card = document.getElementById('notificationCard');
    card.style.display = card.style.display === 'none' || card.style.display === '' ? 'block' : 'none';
  });

  // Close the card if clicked outside
  document.addEventListener('click', function(event) {
    const card = document.getElementById('notificationCard');
    const bell = document.getElementById('notificationBell');
    if (!card.contains(event.target) && !bell.contains(event.target)) {
      card.style.display = 'none';
    }
  });
</script>