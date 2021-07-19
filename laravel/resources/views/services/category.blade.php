@extends('app')

@section('content')
    <div class="container" id="prices">
        <div class="text-center m-4">
            <h1>{{ $categoryName->name }} ( {{ $categServiceCount }} )</h1>
        </div>
        <div class="d-flex justify-content-around">
            <div class="dropdown">
                <button class="btn shadow bg-white text-primary dropdown-toggle" type="button" id="dropdownMenuButton"
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
            <div class="row justify-content-center">
                @include('services.categories')
            </div>
            <grid-list></grid-list>
        </div>
        <div id="viewType" class="row row-view">
            @foreach($categoryServices as $service)
                @include('services.services')
            @endforeach
        </div>
        <div class="row justify-content-center">
            {!! $categoryServices->appends(\Request::except('page'))->render() !!}
        </div>
    </div>
@endsection
