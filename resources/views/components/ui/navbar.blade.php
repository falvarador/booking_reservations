<nav class="navbar is-light" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href={{ route('home') }}>
            Booking and Reservations
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="main-navbar" class="navbar-menu">
        <div class="navbar-start">
            <a href="{{ route('services.index') }}" class="navbar-item">
                Services
            </a>

            <a href="{{ route('users.index') }}" class="navbar-item">
                Users
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    More
                </a>

                <div class="navbar-dropdown">
                    <a href={{ route("bookings.index") }} class="navbar-item">
                        Bookings
                    </a>
                    <a href={{ route("reviews.index") }} class="navbar-item is-selected">
                        Reviews
                    </a>
                    <a href={{ route("locations.index") }} class="navbar-item">
                        Locations
                    </a>
                    <hr class="navbar-divider">
                    <a href={{ route("cancellation-refunds.index") }} class="navbar-item">
                        Cancellation Refunds
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <button class="primary-button">
                    Login
                </button>
            </div>
        </div>
    </div>
</nav>