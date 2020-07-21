<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Brookshill Farm</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase text-expanded" href="{{ route('index.index') }}">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase text-expanded" href="{{ route('about.index') }}">About</a>
                </li>
                <li class="nav-item dropdown px-lg-3">
                    <a class="nav-link dropdown-toggle text-uppercase text-expanded" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Glamping
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('glamping.accomodation') }}">Accomodation</a></li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">For the Foodies</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('glamping.hampers') }}">Brookshill Hampers</a></li>
                                <li><a class="dropdown-item" href="{{ route('glamping.eating-out') }}">Eating Out</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('glamping.activities') }}">Activities</a></li>
                        <li><a class="dropdown-item" href="{{ route('glamping.horsey-holidays') }}">Horsey Holidays</a></li>
                        <li><a class="dropdown-item" href="{{ route('glamping.booking.index') }}">How to Book</a></li>
                    </ul>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase text-expanded" href="{{ route('countryside-management.index') }}">Countryside Management</a>
                </li>
                <!-- <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase text-expanded" href="{{ route('events.index') }}">Events</a>
                </li> -->
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase text-expanded" href="{{ route('news.index') }}">News</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase text-expanded" href="{{ route('gallery.index') }}">Gallery</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase text-expanded" href="{{ route('contact.index') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>