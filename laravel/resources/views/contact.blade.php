@extends('app')

@section('content')
<div class="container " id="contact">
    <div class="row">
        <div class="col-m-6">
	    <div class="text-center">
		<h1>Contact us</h1>
	    </div>
            @include('contactForm')   
        </div>
        <div class="col-m-6">
	    <iframe 
		width="425" 
		height="250" 
		frameborder="0" 
		scrolling="no" 
		marginheight="0" 
		marginwidth="0" 
		src="https://www.openstreetmap.org/export/embed.html?bbox=28.841610439087976%2C47.02624917128422%2C28.85495711114608%2C47.0315438486787&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/>
	</div>
    </div>  
</div>
@endsection
