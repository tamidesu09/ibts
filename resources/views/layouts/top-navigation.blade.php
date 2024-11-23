<!-- Combined Navbar with Centered Links -->
<header class="navbar navbar-expand-lg bg-light ">
  <div class="container-xl">
    <a class="navbar-brand text-primary" href="{{ route('home') }}">i-Bear True Solutions Inc.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-menu">
      <!-- Centered navigation links -->
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

      <!-- Right-side user-related elements -->
      <div class="navbar-nav flex-row order-md-last">
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
<div class="nav-item position-relative">
  <!-- Bell Icon with Badge -->
  <a href="#" class="nav-link p-0" id="notificationBell">
   <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-bell"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
    <span class="badge bg-danger position-absolute" style="top: 0; right: 0; transform: translate(50%, -50%);">3</span>
  </a>

  <!-- Notification Card -->
  <div class="card position-absolute shadow" id="notificationCard" style="display: none; top: 100%; right: 0; width: 300px; z-index: 1050;">
    <div class="card-header bg-primary text-white">Notifications</div>
    <div class="card-body">
      <ul class="list-unstyled mb-0">
        <li class="mb-2">
          <strong>Notification 1:</strong> This is a sample notification.
        </li>
        <li class="mb-2">
          <strong>Notification 2:</strong> Another sample notification.
        </li>
        <li>
          <strong>Notification 3:</strong> Final sample notification.
        </li>
      </ul>
    </div>
    <div class="card-footer text-center">
      <a href="#" class="btn btn-link">View All</a>
    </div>
  </div>
</div>

            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <div class="d-none d-xl-block ps-2">
                  <div>{{ auth()->user()->name }}</div>
                  <div class="mt-1 small text-muted">{{ auth()->user()->email }}</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="{{ route('status') }}" class="dropdown-item">Status</a>
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
  document.getElementById('notificationBell').addEventListener('click', function (event) {
    event.preventDefault();
    const card = document.getElementById('notificationCard');
    card.style.display = card.style.display === 'none' || card.style.display === '' ? 'block' : 'none';
  });

  // Close the card if clicked outside
  document.addEventListener('click', function (event) {
    const card = document.getElementById('notificationCard');
    const bell = document.getElementById('notificationBell');
    if (!card.contains(event.target) && !bell.contains(event.target)) {
      card.style.display = 'none';
    }
  });
</script>