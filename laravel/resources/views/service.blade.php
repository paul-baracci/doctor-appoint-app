@extends('app')

@section('content')
    <div class="container card shadow my-4">
        <div class="row m-5">
            <add-to-cart :service-object="{
                id: {{ $service->id }},
                title: '{{ $service->title }}',
                price: {{ $service->price }}
                }">
            </add-to-cart>
            <h2> {{ $service->title }} </h2>
        </div>
        <div class="row my-4">
            <div class="col-md-7">
                <img src="{{ $service->image->path }}" class="card-img" alt="Image">
            </div>
            <div class="col-xs-5">
                <p><strong>Price</strong> ${{ $service->price }}</p>
                @include('scheduleButton')
                @include('scheduleModal')
                <hr>
                <p><strong>Available since </strong>{{ $service->created_at }}</p>
                <hr>
            </div>
        </div>

        <div>
            <h4><em>Description</em></h4>
            <p>{{ $service->description }}</p>
        </div>
    </div>
@endsection
