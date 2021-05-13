@extends('app')

@section('content')
<div class="container " id="contact">
      <div class="text-center">
        <h1>Contact us</h1>
    </div>
        <div class="col-12">
            @include('contactForm')   
        </div>
        <div class="row justify-content-center m-4">
<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=28.82873117923737%2C46.98632740468165%2C28.833526968955997%2C46.989068270261455&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=18/46.98770/28.83113"></a></small>
</div>              
</div>
@endsection
