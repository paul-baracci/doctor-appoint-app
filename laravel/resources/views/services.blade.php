@extends('app')

@section('content')
<div class="container" id="prices">
    <div class="text-center">
        <h1>Services</h1>
    </div>
    <div>
      <button id="sList" class="btn btn-outline-primary">List</button>
      <button id="sGrid" class="btn btn-outline-primary">Grid</button>
    </div>
    <div class="m-4" id="button-group">
        <button class="order btn btn-outline-primary" id="ascName" data-order="ascendingByName">ASC BY Name</button>
        <button class="order btn btn-outline-primary" id="decName" data-order="descendingByName">DESC BY Name</button>
        <button class="order btn btn-outline-primary" id="asc" data-order="ascendingByPrice">ASC BY Price</button>
        <button class="order btn btn-outline-primary" id="dec" data-order="descendingByPrice">DESC BY Price</button>
         <button class="order btn btn-outline-primary" id="ascName" data-order="ascendingByDate">ASC BY Date</button>
        <button class="order btn btn-outline-primary" id="decName" data-order="descendingByDate">DESC BY Date</button>
    </div>
    <div id= "lgDemo" class="row row-view">
    @foreach($services as $service)
      <div class="card m-4 d-flex flex-row justify-content-between" data-price="{{ $service->service_price }}" data-added="{{ $service->id }}" data-title="{{ $service->service_title }}">
        <div class="p-2 mr-2 mb-3 mb-lg-0">
        <img src="{{ $service->service_image }}" class="img-fluid" alt="{{ $service->service_title }}">
        </div>
        <div class="p-2">
          <h6 class="font-weight-semibold">{{ $service->service_title }}</h6>
          <h6 class="text-muted font-weight-normal">{{ $service->service_description }}</h6>
        </div>   
        <div class="text-center ml-auto p-2" >
          <h2>${{ $service->service_price }}</h2>
          <button type="button" class="btn btn-primary btn-block" data-target="#schedule" data-toggle="modal" data-content= "{{ $service->service_title }}">Schedule appointment</button>
          <button type="button" class="btn btn-outline-info btn-block">
          <a href="services/service1.html">More details</a></button>
        </div>
      </div>
    @endforeach
    </div>
</div>   
<div class="modal fade" id="schedule" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="schedule">Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="mailto:v.istrati@developmentaid.org?subject=Reservation+for+{{ $service->service_title }}"
              method="post"
              enctype="multipart/form-data"
              name="Reserve">
          <div class="form-group">
          <input type="hidden" id="service" name="service" value="">
          <input type="text" class="form-control" id="recipient-name" name="fullname" placeholder="Full Name" required>
          </div>
          <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="phone" id="phone" name="phone" class="form-control" placeholder="Phone number" required>
          </div>
          <div class="form-group" >
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" value="asap" checked>
            <label class="btn btn-outline-primary" for="option1">ASAP</label>
            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" value="08:00-11:30">
            <label class="btn btn-outline-primary" for="option2">08:00-11:30</label>
            <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" value="12:00-15:30">
            <label class="btn btn-outline-primary" for="option3">12:00-15:30</label>
            <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off" value="16:30-19:00"> 
            <label class="btn btn-outline-primary" for="option4">16:30-19:00</label>
            <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off" value="20:00-23:00">
            <label class="btn btn-outline-primary" for="option5">20:00-23:00</label>
          </div>
          <div class="h-captcha" data-sitekey="9c6eb30c-cf96-4956-beef-49f335ee66c2"></div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Schedule</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>                                     
@endsection
