@extends('app')

@section('content')
<div class="container">
  <div class="row m-5">
  	<h2> {{ $service->title }} </h2>
  </div>
  <div class="row m-5">
  	<div class ="col-9">
            <img class="img-fluid" src="img/hero3.jpg" alt="product image">
    </div>
    <div class ="col-3">
            
            <p><strong>Price</strong> ${{ $service->price }}</p>
            @include('scheduleButton')
            @include('scheduleModal')
            <hr>
            <p><strong>Available since </strong>{{ $service->created_at }}</p>
            <hr>
            <h4><em>Description</em></h4>
            <p>{{ $service->description }}</p>

    </div>
  </div>
</div>    
@endsection
