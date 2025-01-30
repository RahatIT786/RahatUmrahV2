<section>
            <!-- Navbar Start -->
            <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <a href="{{route('layouts.app')}}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                            {{-- <h1 class="m-0 text-primary text-uppercase">HajUmrah</h1> --}}
                            <img style="height:7rem;" src="{{asset('asserts/user/img/haj/RAHAT_UMRAH_LOGO.png')}}" alt="rahat_logo">
                        </a>
                    </div>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <div class="nav-item dropdown">
                            <a href="{{asset('images/umrah_Icon.png')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Umrah</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('umrah-by-bus-from-uae')}}" class="dropdown-item">Fixed Group Departures</a>
                                <a href="{{route('coming-soon')}}" class="dropdown-item">Umrah Land Packages</a>
                                <!-- <a href="property-agent.html" class="dropdown-item">Property Agent</a> -->
                            </div>
                        </div>
                        <a href="{{route('about')}}" class="nav-item nav-link">Ramzaan</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ziyart</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('coming-soon')}}" class="dropdown-item">Jordan</a>
                                <a href="{{route('coming-soon')}}" class="dropdown-item">Baghdad</a>
                                <a href="{{route('coming-soon')}}" class="dropdown-item">Egypt</a>
                                <a href="{{route('coming-soon')}}" class="dropdown-item">Turkey</a>
                                <a href="{{route('coming-soon')}}" class="dropdown-item">Uzbekistan</a>
                                <a href="{{route('coming-soon')}}" class="dropdown-item">Azerbaijan</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Hajj</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('hajj.bybus')}}" class="dropdown-item">Short Hajj</a>
                                <a href="{{route('hajj.bybus.long')}}" class="dropdown-item">Long Hajj</a>
                                <!-- <a href="property-agent.html" class="dropdown-item">Property Agent</a> -->
                            </div>
                        </div>


                        <a href="{{route('hotels')}}" class="nav-item nav-link active">Hotels</a>
                        <a href="{{route('saudi-visa')}}" class="nav-item nav-link">Visa</a>
                        <a href="{{route('sightseeing')}}" class="nav-item nav-link">Transfers</a>
                        <a href="{{route('catring')}}" class="nav-item nav-link">Sightseeing</a>
                        <a href="{{route('partner-with-us')}}" class="nav-item nav-link">Catering</a>
                        <a href="{{route('contact-us')}}" class="nav-item nav-link">Holidays</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.html" class="dropdown-item">Property List</a>
                                <a href="property-type.html" class="dropdown-item">Property Type</a>
                                <a href="property-agent.html" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Error</a>
                            </div>
                        </div> -->
                        <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>
                    <!-- <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a> -->
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</section>