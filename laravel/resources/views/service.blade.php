@extends('app')

@section('content')
    <div class="container card my-4">
        <div class="row m-2">
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
                <img src="/img/hero3.jpg" class="card-img" alt="Image">
            </div>
            <div class="col-xs-5 m-4 text-center">
                <p><strong>Price</strong> ${{ $service->price }}</p>
                @include('scheduleButton')
                @include('scheduleModal')
                <hr>
                <p><strong>Available since </strong>{{ $service->created_at }}</p>
                <hr>
            </div>
        </div>
        <h4><em>Description</em></h4>
        <div class="col-sm my-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Ipsum nunc aliquet bibendum enim facilisis gravida. Viverra maecenas accumsan lacus vel facilisis. Ipsum consequat nisl vel pretium. Nisl vel pretium lectus quam id leo in vitae. Nibh tellus molestie nunc non blandit massa enim. Aliquam ut porttitor leo a diam sollicitudin tempor. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Ipsum nunc aliquet bibendum enim facilisis gravida. Viverra maecenas accumsan lacus vel facilisis. Ipsum consequat nisl vel pretium. Nisl vel pretium lectus quam id leo in vitae. Nibh tellus molestie nunc non blandit massa enim. Aliquam ut porttitor leo a diam sollicitudin tempor. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Ipsum nunc aliquet bibendum enim facilisis gravida. Viverra maecenas accumsan lacus vel facilisis. Ipsum consequat nisl vel pretium. Nisl vel pretium lectus quam id leo in vitae. Nibh tellus molestie nunc non blandit massa enim. Aliquam ut porttitor leo a diam sollicitudin tempor. </p>
        </div>
    </div>
@endsection
