<nav class="navbar">
    <div class="container navbar-inner">

        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('images/LOGO-DSB.png') }}" alt="Diaspora Sdn Bhd">
        </a>

        <div class="nav-links">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a>
            <a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'active' : '' }}">Services</a>
            <a href="{{ url('/certification') }}" class="{{ request()->is('certification') ? 'active' : '' }}">Certification</a>
            <a href="{{ url('/media') }}" class="{{ request()->is('media') ? 'active' : '' }}">Media</a>
            <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
        </div>

    </div>
</nav>