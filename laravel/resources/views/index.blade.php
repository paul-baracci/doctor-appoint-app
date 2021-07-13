@extends('app')

@section('content')
<div class='container'>
    <div id="myslide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myslide" data-slide-to="0" class="active"></li>
            <li data-target="#myslide" data-slide-to="1"></li>
            <li data-target="#myslide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/hero1.jpg" alt="First slide">
                <div class="carousel-caption text-white">
                    <h4><em>Augemnted Heart Clinic</em> is a place of empathy and science. We do our best to make futuristic medical services available to everyone. From accurate central nervois system controlled hand/arm prosthetics to any vaccine for the latest pandemic!</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/hero2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/hero3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myslide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myslide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container my-4" id="aboutus">
    <div class="text-center mb-4">
       <h1>About us</h1>
    </div>
    <div class="row align-items-center">
            <div class="col-sm">
                <img class="flow-left mx-auto d-block" src="https://via.placeholder.com/640x480?text=About+us+image" alt="about" width="250" />
            </div>
            <div class="col-sm text-muted">
                <h4><em>Augemnted Heart Clinic</em> is a place of empathy and science. We do our best to make futuristic medical services available to everyone. From accurate central nervois system controlled hand/arm prosthetics to any vaccine for the latest pandemic!</h4>
            </div>
       </div>
</div>
<div class="container my-4" id="process">
    <div class="text-center mb-4">
       <h1>Our process</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-10 text-center text-muted">
            <h4>Augmented Heart Clinic allows you to schedule appointments with ease and speed. Access the <a href="/services">Services page</a> and set up an appoinment. Once a request is submitted, our team will contact you to confirm the exact time and payment method.</h4>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="text-center mb-4">
        <h1>Popular Services</h1>
    </div>
    <div class="shadow slider-container">

        <div class=" slider-track">
            @foreach ($popularServices as $service)
                <div class="shadow slider-item card text-center align-content-start">
                    <img src="img/hero3.jpg" class="card-img thumbnail" alt="Image">
                    <div class="col">
                        <h6 class="font-weight-semibold"> {{ $service->title }} </h6>
                        <p><strong>Available since </strong> {{ $service->created_at }} </p>
                        <hr>
                        <h6 class="text-muted font-weight-normal">
                            {!! Str::limit($service->description, 30) !!}
                        </h6>
                    </div>
                    <div class="col ml-auto p-2" >
                        <h3> ${{ $service->price }} </h3>
                        @include('scheduleButton')
                        <button type="button" class="btn btn-sm">
                        <a href="/service/{{ $service->id }}">More details</a></button>
                    </div>
                </div>
                @include('scheduleModal')
            @endforeach
        </div>
    </div>
    <div class="slider-buttons text-center m-2">
	    <button class="btn btn-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
        </button>
	    <button class="btn btn-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg>
        </button>
    </div>
</div>
<div class="container my-4" id="sponsors">
    <div class="text-center mb-4">
        <h1>Our Sponsors</h1>
   </div>
        <div class="d-flex justify-content-around">
			<img class="p-2 img-fluid " src="https://via.placeholder.com/200x200?text=Sponsor+1" alt="Sponsor1" />
            <img class="p-2 img-fluid " src="https://via.placeholder.com/200x200?text=Sponsor+2" alt="Sponsor2" />
    		<img class="p-2 img-fluid " src="https://via.placeholder.com/200x200?text=Sponsor+3" alt="Sponsor3" />
		</div>
   </div>
</div>
<div class="container my-4" id="contact">
    <div class="text-center mb-4">
        <h1>Contact us</h1>
    </div>
    @include('contactForm')
</div>
@endsection
