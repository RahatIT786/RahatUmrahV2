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

        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <form wire:submit.prevent="" class="date" id="date2" >
                                    <input  wire:model.live="searchHotel" type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class=""  wire:submit.prevent="">
                                    <select class="form-select border-0 py-3" wire:model.live="searchCity">
                                            <option value='' selected>City</option>
                                            <option value="MAKKAH">MAKKAH</option>
                                            <option value="MADINAH">MADINAH</option>
                                            <option value="BAGHDAD">BAGHDAD</option>
                                            <option value="NAJAF">NAJAF</option>
                                            <option value="KARBALA">KARBALA</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="" wire:submit.prevent="">
                                    <select class="form-select border-0 py-3"  wire:model.live="searchRating">
                                            <option value='' selected>Star Rating</option>
                                            <option value="2">2 Stars</option>
                                            <option value="3">3 Stars</option>
                                            <option value="4">4 Stars</option>
                                            <option value="5">5 Stars</option>
                                            <option value="6">Building Accomutation Stars</option>
                                            <option value="7">Standard Hotel Stars</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->
  
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
            @if ($hotelDetails->count() > 0)
                 @foreach ($hotelDetails as $hotelDetail )
                    <!-- Call to Action Start -->
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                    <img class="img-fluid rounded w-100" style="height: 20rem;"  src="{{Storage::exists($hotelDetail->hotelMainImage)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                    <h1 class="mb-4">{{ ucfirst($hotelDetail->hotelName) }}</h1>
                                    <div style="display: flex;justify-content: space-between;">
                                                <div style="display: flex;">
                                                    <i style="font-size: 20px;color:#26C49F" class="bi bi-geo-alt-fill"></i>
                                                    <p style="margin-left: 10px;">{{ $hotelDetail->hotelCity }}</p>
                                                </div>
    
                                                <div style="display: flex;">
                                                    <i style="font-size: 20px;color: #26C49F;" class="bi bi-wifi"></i>
                                                    <p style="margin-left: 10px;">wifi</p>
                                                </div>

                                                <div style="display: flex;">
                                                    @php
                                                         $stars = intval($hotelDetail->hotelStarRating);  // Convert the string to an integer
                                                    @endphp
                                                    <div>
                                                    @for ($i = 0; $i < $stars; $i++)
                                                        <i style="font-size: 20px;color: #26C49F;" class="bi bi-star-fill"></i>
                                                    @endfor

                                                </div>
                                            </div>
                                        </div>
                                    <p class="mb-4">{{ \Illuminate\Support\Str::limit($hotelDetail->hotelDiscription, 250, '...') }}</p>

                                        <div style="display: flex;justify-content: space-around;">
                                            <a href="{{ route('hotel-Detail', ['id' => $hotelDetail->id]) }}" class="btn btn-primary py-3 px-4 me-2"> <i style="height: 25px;" class="bi bi-file-earmark-fill"></i> View Detail</a>
                                            <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 @endforeach
            @else
                <div class="d-flex justify-content-center align-items-center text-center" style="height: 100%;">
                    <h3>Oops! It looks like there are no hotels that match your search criteria. Please try adjusting your filters.</h3>
                </div>
            @endif
                <!-- Call to Action End -->
        </div>
      
</section>
