
    <!-- Transparent Sticky Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TravelSite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('feeds') }}">Feeds</a>
                    </li>   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="{{ route('pujas') }}" id="templesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Poojas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="templesDropdown">
                            <li><a class="dropdown-item" href="{{ route('pujas') }}">Lord Shiva</a></li>
                            <li><a class="dropdown-item" href="#">Lord Vishnu</a></li>
                            <li><a class="dropdown-item" href="#">Lord Ganesha</a></li>
                            <li><a class="dropdown-item" href="#">Goddess Lakshmi</a></li>
                            <!-- Add more gods as needed -->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="{{ route('temples') }}" id="templesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Temples
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="templesDropdown">
                            <li><a class="dropdown-item" href="{{ route('temples') }}">Lord Shiva</a></li>
                            <li><a class="dropdown-item" href="#">Lord Vishnu</a></li>
                            <li><a class="dropdown-item" href="#">Lord Ganesha</a></li>
                            <li><a class="dropdown-item" href="#">Goddess Lakshmi</a></li>
                            <!-- Add more gods as needed -->
                        </ul>
                    </li>
                    
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="templesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Packages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="templesDropdown">
                            <li><a class="dropdown-item" href="#">Lord Shiva</a></li>
                            <li><a class="dropdown-item" href="#">Lord Vishnu</a></li>
                            <li><a class="dropdown-item" href="#">Lord Ganesha</a></li>
                            <li><a class="dropdown-item" href="#">Goddess Lakshmi</a></li>
                            <!-- Add more gods as needed -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Hotels & Lodges</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white ms-2" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> Sign Up
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>