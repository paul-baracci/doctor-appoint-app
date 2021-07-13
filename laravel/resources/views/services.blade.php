@extends('app')

@section('content')
    <div class="container" id="prices">
        <div class="text-center">
            <h1>Services</h1>
        </div>
        <div class="d-flex">
            <div class="dropdown mr-auto">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort by
                </button>
                <div class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton">
                    <p class="btn dropdown-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007bff"
                             class="bi bi-arrow-down-up mr-auto" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        @sortablelink('title', 'Title')
                    </p>
                    <p class="btn dropdown-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007bff"
                             class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        @sortablelink('price', 'Price')
                    </p>
                    <p class="btn dropdown-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007bff"
                             class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        @sortablelink('created_at', 'Date')
                    </p>
                </div>
            </div>
            <grid-list></grid-list>
        </div>
        <div class="row justify-content-center">
            {!! $services->appends(\Request::except('page'))->render() !!}
        </div>
        <div id="viewType" class="row row-view">
            @foreach($services as $service)
                <div class="shadow card row m-2 d-flex flex-row" >
                        <img src="img/hero3.jpg" class="card-img thumbnail" alt="Image">

                    <div class="col p-2">
                        <a href="/service/{{ $service->id }}">
                            <h6 class="font-weight-semibold">{{ $service->title }}</h6>
                        </a>
                        <p><strong>Added</strong> {{ $service->created_at->diffForHumans() }}</p>
                        <hr>
                        <h6 class="text-muted font-weight-normal">
                            {!! Str::limit($service->description, 30) !!}
                        </h6>
                        @include('scheduleButton')
                        @include('scheduleModal')
                        <add-to-cart :service-object="{
                            id: {{ $service->id }},
                            title: '{{ $service->title }}',
                            price: {{ $service->price }}
                            }">
                        </add-to-cart>
                        <h4 class="price-caption">${{ $service->price }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            {!! $services->appends(\Request::except('page'))->render() !!}
        </div>
    </div>
@endsection
