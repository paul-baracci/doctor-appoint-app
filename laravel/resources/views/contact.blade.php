@extends('app')

@section('content')
<div class="container " id="contact">
      <div class="text-center">
        <h1>Contact us</h1>
    </div>
        <div class="col-12">
            <form action=mailto:ma@developmentaid.org
            method="post"
            enctype="multipart/form-data"
            name="Bootcamp"> 
                <div class="row justify-content-center">
                    <div class="form-group col-3">
                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group col-3">
                    <input type="email" id="email2" name="email" class="form-control" placeholder="Email" required>
                    </div>   
                </div> 
                <div class="row justify-content-center">        
                    <div class="form-group col-6">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                    </div>
                </div>           
                <div class="row justify-content-center">         
                    <div class="form-group col-6">
                        <textarea name="message" rows="3" class="form-control" placeholder="Message" required></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">         
                    <div class="form-group col-6">
                        <div class="h-captcha" data-sitekey="9c6eb30c-cf96-4956-beef-49f335ee66c2" data-theme="light"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>                
            </form>       
        </div>
        <div class="row justify-content-center m-4">
<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=28.82873117923737%2C46.98632740468165%2C28.833526968955997%2C46.989068270261455&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=18/46.98770/28.83113"></a></small>
</div>              
</div>
@endsection
