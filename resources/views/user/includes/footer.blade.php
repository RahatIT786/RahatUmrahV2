

       <!-- Footer Start -->
       <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <div class=" rounded p-4">
                            <img src="{{asset('asserts/user/img/haj/RAHAT_UMRAH_LOGO.png')}}" style="height: 7rem;" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><a style="color:white" href="tel:+971566115491"><i class="fa fa-phone-alt me-3"></i>+971 56 6115491  </a></p>
                        <p class="mb-2"><a style="color:white" href="tel:+971567866713"><i class="fa fa-phone-alt me-3"></i>+971 56 7866713 </a></p>
                        <p class="mb-2"><a style="color:white" href="mailto:dubai@Rahat.in"><i class="fa fa-envelope me-3"></i>Dubai@Rahat.in</a></p>


                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/rahattravelsofindia/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/rahattravelsofindia/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@RahatGroup"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://api.whatsapp.com/send/?phone=%2B971567866713&text=Hello%2C+I+want+some+details+about+package&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                        </div><br>
                        <p>Mumbai | Delhi | Bangalore | Lucknow</p>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">About US</h6>
                                <a class="btn btn-link" href="{{route('who-we-are')}}" style="color:white">Who We are</a>
                                <a class="btn btn-link" href="{{route('ourservices')}}" style="color:white">Our Services</a>
                                <a class="btn btn-link" href="{{route('mission-vision')}}" style="color:white">Mission and Vision</a>
                                <a class="btn btn-link" href="{{route('why-choose-us')}}" style="color:white">Why Choose Us</a>
                                <a class="btn btn-link" href="{{route('coming-soon')}}" style="color:white">Awards & Recognition</a>
                                <a class="btn btn-link" href="{{route('director-speak')}}" style="color:white">Directors Speak</a>
                                <a class="btn btn-link" href="{{route('agent-speak')}}" style="color:white">Agents Speak</a>
                                <a class="btn btn-link" href="{{route('partner-with-us')}}" style="color:white">Partner with Us</a>
                                <a class="btn btn-link" href="{{route('bankaccount')}}" style="color:white">Bank Accounts</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>

                                <a class="btn btn-link" href="{{route('coming-soon')}}" style="color:white">Umrah Packages </a>
                                <a class="btn btn-link" href="{{route('hotels')}}" style="color:white">Hotels & Rooms </a>
                                <a class="btn btn-link" href="{{route('saudi-visa')}}" style="color:white">Visas & Insurance </a>
                                <a class="btn btn-link" href="{{route('coming-soon')}}" style="color:white">Catering Services </a>
                                <a class="btn btn-link" href="{{route('coming-soon')}}" style="color:white">Laundry Services </a>
                                <a class="btn btn-link" href="{{route('sightseeing')}}" style="color:white">Sightseeing in Makka Madina </a>
                                <a class="btn btn-link" href="{{route('coming-soon')}}" style="color:white">Guides and Assistance </a>
                                <a class="btn btn-link" href="{{route('coming-soon')}}" style="color:white">Pickup & Drop Services </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">RahatUmrah</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="">RahatIT Solutions</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Privacy Policy</a>
                                <a href="">Terms and Condition</a>
                                <a href="">Director Speak</a>
                                <a href="">FAQ's</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('asserts/user/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('asserts/user/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('asserts/user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('asserts/user/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('asserts/user/js/main.js')}}"></script>
    <livewire:scripts />
</body>

</html>