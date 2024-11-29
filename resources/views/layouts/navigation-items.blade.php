<ul class="navbar-nav mx-auto">
    <li class="nav-item {{ request()->routeIs('welcome') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
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