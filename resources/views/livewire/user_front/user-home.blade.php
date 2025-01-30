<section>
            <!-- Header Start -->
            <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-12 animated fadeIn" style="padding: 0;">
                    <img class="img-fluid" src="{{asset('asserts/user/images/ayse.jpg')}}" alt="" style="width: 100%; height: 50vh; object-fit: cover;">
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Team Start -->
        <div class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Left Section: Heading and Description -->
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Rahat Group</span></h1>
                <p class="mb-4">Your premier partner in facilitating memorable and spiritually enriching Umrah pilgrimages. Founded in 2007, our company has established itself as a leading provider of exceptional Hajj & Umrah services, dedicated to ensuring a seamless and fulfilling experience for every pilgrim.</p>
                <a class="btn btn-primary py-3 px-5 mt-2" href="#">Explore More</a>
            </div>
            <!-- Right Section: Image Gallery -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75" src="{{asset('asserts/user/img/haj/macca.jpg')}}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100" src="{{asset('asserts/user/img/haj/childmeccac.jpg')}}">
                    </div>
                    <!-- <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50" src="{{asset('asserts/user/img/haj/masque.jpg')}}">
                    </div> -->
                    <!-- <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75" src="{{asset('asserts/user/img/haj/peopelmacca.jpg')}}">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Team End -->
        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-2">Explore Our <span class="text-primary text-uppercase">Package</span></h1>
                    <p>Choose the Perfect Package for Your Needs</p>
                </div>
               
            </div>
        </div>
        <!-- Category End -->

        <div class="row g-4">
                 @foreach ($packages as $package )
                    <!-- Call to Action Start -->
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                    <img class="img-fluid rounded w-100" style="height: 20rem;"  src="{{Storage::exists($package->photo_path) ? Storage::url($package->photo_path) : asset('asserts/user/img/haj/masque.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                    <h1 class="mb-4">{{ ucfirst($package->package_name) }}</h1>
                                    <p class="mb-4">Experience a spiritual journey like never before with our  Umrah Package. Enjoy premium accommodation, exquisite catering, and seamless transport services.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                                    <div class="d-flex mb-3" style="font-size: 12px;">
                                        <small class="border-end me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Sharing : <span><span style="font-size: 18px;">{{$package->sharing}}</span>.AED</span>
                                        </small>
                                        <small class="border-end me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quint :  <span><span style="font-size: 18px;">{{$package->quint}}</span>.AED</span>
                                        </small>
                                        <small class="me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quad : <span><span style="font-size: 18px;">{{$package->quad}}</span>.AED</span>
                                        </small>
                                    </div>
                                    <div class="d-flex mb-3" style="font-size: 12px;">
                                        <small class="border-end me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Triple : <span><span style="font-size: 18px;">{{$package->triple}}</span>.AED</span>
                                        </small>
                                        <small class="border-end me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Double :  <span><span style="font-size: 18px;">{{$package->double}}</span>.AED</span>
                                        </small>
                                        <small class="me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Single : <span><span style="font-size: 18px;">{{$package->single}}</span>.AED</span>
                                        </small>
                                    </div>
                                        <div style="display: flex;justify-content: space-around;">
                                            <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                            <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                <!-- Call to Action End -->
        </div>
      
        <!-- Category Start -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
        <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
        </div>
        <div class="row g-4">
            <!-- Hotel & Rooms -->
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-4 shadow-sm hover-shadow-lg" href="" style="transition: all 0.3s ease;">
                    <div class="rounded p-4">
                        <div class=" mb-3" style="font-size: 3rem; color: #007bff;">
                            <i class="fa fa-hotel"></i>
                        </div>
                        <h6 style="font-size: 1.2rem; font-weight: 500;">Hotel & Rooms</h6>
                        <p style="color:black">Our rooms and apartments offer comfort, convenience, and modern amenities. Whether you're traveling for business or leisure, enjoy a relaxing stay with well-furnished spaces and excellent service..</p>
                    </div>
                </a>
            </div>

            <!-- Food & Catering -->
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-4 shadow-sm hover-shadow-lg" href="" style="transition: all 0.3s ease;">
                    <div class="rounded p-4">
                        <div class=" mb-3" style="font-size: 3rem; color: #28a745;">
                            <i class="fa fa-utensils"></i>
                        </div>
                        <h6 style="font-size: 1.2rem; font-weight: 500;">Food & Catering</h6>
                        <p style="color:black">Indulge in a variety of delicious cuisines at our restaurant, offering a blend of local and international dishes. Enjoy a delightful dining experience with fresh ingredients and exceptional service.</p>
                    </div>
                </a>
            </div>

            <!-- Transportation -->
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded p-4 shadow-sm hover-shadow-lg" href="" style="transition: all 0.3s ease;">
                    <div class="rounded p-4">
                        <div class=" mb-3" style="font-size: 3rem; color: #ffc107;">
                            <i class="fa-solid fa-bus"></i>
                        </div>
                        <h6 style="font-size: 1.2rem; font-weight: 500;">Transportation</h6>
                        <p style="color:black">We provide seamless flight and transport services, ensuring a comfortable journey from start to finish. Enjoy reliable and timely travel options, including airport transfers and customized travel arrangements.</p>
                    </div>
                </a>
            </div>

            <!-- Visa & Insurance -->
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded p-4 shadow-sm hover-shadow-lg" href="" style="transition: all 0.3s ease;">
                    <div class="rounded p-4">
                        <div class=" mb-3" style="font-size: 3rem; color: #17a2b8;">
                        <i class="fa-brands fa-cc-visa"></i>
                        </div>
                        <h6 style="font-size: 1.2rem; font-weight: 500;">Visa & Insurance</h6>
                        <p style="color:black">Our visa and insurance services ensure a hassle-free travel experience. We assist with visa applications and provide comprehensive travel insurance options, offering peace of mind for your international trips.</p>
                    </div>
                </a>
            </div>

            <!-- Exclusive Unseen Ziyarats -->
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-4 shadow-sm hover-shadow-lg" href="" style="transition: all 0.3s ease;">
                    <div class="rounded p-4">
                        <div class=" mb-3" style="font-size: 3rem; color: #dc3545;">
                            <i class="fa-solid fa-person-praying"></i>
                        </div>
                        <h6 style="font-size: 1.2rem; font-weight: 500;">Exclusive Unseen Ziyarats</h6>
                        <p style="color:black">Experience the spiritual journey of Ziyarat, visiting sacred sites and historic locations. Our services provide guided tours to key religious destinations, enriching your pilgrimage with meaningful insights and comfort.</p>
                    </div>
                </a>
            </div>

            <!-- Complimentary Laundry -->
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-4 shadow-sm hover-shadow-lg" href="" style="transition: all 0.3s ease;">
                    <div class="rounded p-4">
                        <div class=" mb-3" style="font-size: 3rem; color: #6f42c1;">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                        <h6 style="font-size: 1.2rem; font-weight: 500;">Complimentary Laundry</h6>
                       <p style="color:black">Our laundry service offers convenient and efficient cleaning for your clothes. With quick turnaround times and attention to detail, we ensure your garments are fresh, clean, and ready for use.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.hover-shadow-lg:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
.cat-item .icon i {
    transition: all 0.3s ease;
}

.cat-item:hover .icon i {
    transform: scale(1.2); /* Increase the icon size */
    color: #007bff; /* Change the icon color when hovered (adjust color as needed) */
}
</style>
        <!-- Category End -->


        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="owl-carousel testimonial-carousel py-5">
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <p>"The Umrah package from Rahat Group was truly exceptional. Everything was perfectly organized, from the flights to the accommodation. I felt completely at ease throughout the journey. Highly recommend!"</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person1.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Shaikh</h6>
                                    <small>Akola(Maharashtra)</small>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <p>"I had an unforgettable experience with Rahat Group's Umrah package. I will definitely choose them again for future trips. The guides were knowledgeable, the accommodations were comfortable, and the entire trip was stress-free."</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person2.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Ansari Hammad</h6>
                                    <small>Hailakandi(Assam)</small>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <p>"Rahat Group provided an outstanding Umrah service. Their attention to detail, friendly staff, and seamless arrangements allowed me to focus entirely on my worship. I will definitely choose them again for future trips."</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person3.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Mohammed Milkan</h6>
                                    <small>Baraily(Uttar Pradhesh)</small>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                    </div>
                </div>
            </div>
</section>
