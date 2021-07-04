@extends('app')

@section('content')
<div class="container" id="prices">
    <div class="text-center">
        <h1>Services</h1>

    </div>
    <div class="d-flex">
        <div class="btn-group mr-auto">
            <button type="button" class="order btn btn-outline-primary" > @sortablelink('title', 'Sort by Name') </button>
            <button type="button" class="order btn btn-outline-primary" > @sortablelink('price', 'Sort by Price') </button>
            <button type="button" class="order btn btn-outline-primary" > @sortablelink('created_at', 'Sort by Date') </button>
        </div>
    <grid-list></grid-list>
    </div>


	<div class="row justify-content-center">
	    {!! $services->appends(\Request::except('page'))->render() !!}

	</div>
    <div id= "viewType" class="row row-view">

    @foreach($services as $service)
      <div class="card row m-2 d-flex flex-row justify-content-between align-items-center" data-price="{{ $service->price }}" data-added="{{ $service->created_at }}" data-title="{{ $service->title }}">

        <div class="col-1 p-2 mr-2 mb-3 mb-lg-0">
        <img src="#" class="img-fluid" alt="Image">
        </div>

        <div class="col p-2">
          <h6 class="font-weight-semibold">{{ $service->title }}</h6>
          <p><strong>Available since </strong>{{ $service->created_at }}</p>
            <hr>
          <h6 class="text-muted font-weight-normal">{{ $service->description }}</h6>
        </div>

        <div class="col-m-12 text-center ml-auto p-2" >
          <h2>${{ $service->price }}</h2>
          <add-to-cart :service-id="{ id: {{ $service->id }}, title: '{{ $service->title }}', price: {{ $service->price }} }"></add-to-cart>
          @include('scheduleModal')

          <button type="button" class="btn btn-outline-secondary btn-sm">
          <a href="/service/{{ $service->id }}">More details</a></button>


        </div>

      </div>
    @endforeach
    </div>
    <div class="row justify-content-center">
        {!! $services->appends(\Request::except('page'))->render() !!}

    </div>
</div>

@endsection
