<section>
            <!-- Navbar Start -->
            <div class="container-fluid nav-bar bg-transparent" style="margin-top: 0px;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <a href="{{route('layouts.app')}}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                            {{-- <h1 class="m-0 text-primary text-uppercase">HajUmrah</h1> --}}
                            <img style="height:5rem;" src="{{asset('asserts/user/img/haj/RAHAT_UMRAH_LOGO.png')}}" alt="rahat_logo">
                        </a>
                    </div>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <div class="nav-item dropdown">
                        <a href="{{route('about')}}"  class="nav-link  d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" data-bs-toggle="dropdown">
                                        <img style="height:50px;" src="{{asset('asserts/user/images/navicons/UMRAH.png')}}" alt="">
                                        <div class="d-flex"><span>Umrah</span><i class="fa fa-chevron-down mx-2 my-1"></i> </div> </a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('umrah-by-bus-from-uae')}}" class="dropdown-item">Fixed Group Departures</a>
                                <a href="{{route('coming-soon')}}" class="dropdown-item">Umrah Land Packages</a>
                                <!-- <a href="property-agent.html" class="dropdown-item">Property Agent</a> -->
                            </div>
                        </div>
                        <a href="{{route('about')}}" class="nav-item nav-link">
                            <img style="height:50px;" src="{{asset('asserts/user/images/navicons/ramzan.png')}}" alt="">
                            <div class="d-flex"><span>Ramzaan</span> </div> </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link " data-bs-toggle="dropdown">
                            <img style="height:50px;" src="{{asset('asserts/user/images/navicons/ZIYARAT.png')}}" alt="">
                            <div class="d-flex"><span>Ziyart</span><i class="fa fa-chevron-down mx-2 my-1"></i> </div></a>
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
                            <a href="#" class="nav-link " data-bs-toggle="dropdown">
                            <img style="height:50px;" src="{{asset('asserts/user/images/navicons/Hajj.png')}}" alt="">
                            <div class="d-flex"><span>Hajj</span><i class="fa fa-chevron-down mx-2 my-1"></i> </div></a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('hajj.bybus')}}" class="dropdown-item">Short Hajj</a>
                                <a href="{{route('hajj.bybus.long')}}" class="dropdown-item">Long Hajj</a>
                                <!-- <a href="property-agent.html" class="dropdown-item">Property Agent</a> -->
                            </div>
                        </div>


                        <a href="{{route('hotels')}}" class="nav-item nav-link active">
                            <img style="height:50px;" src="{{asset('asserts/user/images/navicons/hotel.png')}}" alt="">
                            <div class="d-flex"><span>Hotels</span></div></a>
                        <a href="{{route('saudi-visa')}}" class="nav-item nav-link">
                            <img style="height:50px;" src="{{asset('asserts/user/images/navicons/visa.png')}}" alt="">
                            <div class="d-flex"><span>Visa</span> </div></a>
                        <a href="{{route('sightseeing')}}" class="nav-item nav-link">
                            <img style="height:50px;" src="{{asset('asserts/user/images/navicons/transport.png')}}" alt="">
                            <div class="d-flex"><span>Transfers</span></div></a>
                        <a href="{{route('catring')}}" class="nav-item nav-link">
                            <img style="height:50px;" src="{{asset('asserts/user/images/navicons/Sightseeing.png')}}" alt="">
                            <div class="d-flex"><span>Sightseeing</span> </div></a>
                        <a href="{{route('partner-with-us')}}" class="nav-item nav-link">
                            <img style="height:50px;" src="{{asset('asserts/user/images/navicons/Catering.png')}}" alt="">
                            <div class="d-flex"><span>Catering</span> </div></a>
                        <a href="{{route('contact-us')}}" class="nav-item nav-link">
                            <img style="height:50px;" src="{{asset('asserts/user/images/navicons/Holiday.png')}}" alt="">
                            <div class="d-flex"><span>Holidays</span> </div></a>
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