@extends('app')

@section('content')
<div class="container" id="prices">
    <div class="text-center">
        <h1>Services</h1>
    </div>

    <div class="d-flex">
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <p class="btn dropdown-item">@sortablelink('title', 'Sort by Name')</p>
                <p class="btn dropdown-item">@sortablelink('price', 'Sort by Price')</p>
                <p class="btn dropdown-item">@sortablelink('created_at', 'Sort by Date')</p>
            </div>
        </div>
        <grid-list></grid-list>
    </div>
	<div class="row justify-content-center">
            {!! $services->appends(\Request::except('page'))->render() !!}
	</div>
  <div id= "viewType" class="row row-view">

    @foreach($services as $service)
      <div class="shadow card row m-2 d-flex flex-row justify-content-center align-items-center" data-price="{{ $service->price }}" data-added="{{ $service->created_at }}" data-title="{{ $service->title }}">

        <img src="img/hero3.jpg" class="card-img thumbnail" alt="Image">

        <div class="col p-2">
          <h6 class="font-weight-semibold">{{ $service->title }}</h6>
          <p><strong>Available since </strong>{{ $service->created_at }}</p>
            <hr>
          <h6 class="text-muted font-weight-normal">

            {!! Str::limit($service->description, 30) !!}
          </h6>
        </div>
        <div class="col-m-12 justify-content-center ml-auto p-2" >
          <h2>${{ $service->price }}</h2>
         <add-to-cart :service-object="{
           id: {{ $service->id }},
           title: '{{ $service->title }}',
           price: {{ $service->price }}
         }"></add-to-cart>
          <button type="button" class="btn btn-sm">
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
