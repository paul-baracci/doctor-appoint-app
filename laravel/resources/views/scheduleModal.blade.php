<div class="modal fade" id="{{ $service->title }}" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Schedule {{ $service->title }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="#"
              method="post"
              enctype="multipart/form-data"
	      name="Reserve">
	    @csrf
          <div class="form-group">
          <input type="hidden" id="service" name="service" value=" {{ $service->title }} ">

          <input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name">
          @if ($errors->has('name'))

              <span class="text-danger">{{ $errors->first('fname') }}</span>

          @endif


          </div>
          <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="phone" id="phone" name="phone" class="form-control" placeholder="Phone number">
          </div>
          <div class="form-group" >
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" value="asap" checked>
            <label class="btn btn-outline-primary" for="option1">ASAP</label>
            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" value="08:00-11:30">
            <label class="btn btn-outline-primary" for="option2">08:00-11:30</label>
            <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" value="12:00-15:30">
            <label class="btn btn-outline-primary" for="option3">12:00-15:30</label>
            <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off" value="16:30-19:00"> 
            <label class="btn btn-outline-primary" for="option4">16:30-19:00</label>
            <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off" value="20:00-23:00">
            <label class="btn btn-outline-primary" for="option5">20:00-23:00</label>
          </div>
          <div class="h-captcha" data-sitekey="9c6eb30c-cf96-4956-beef-49f335ee66c2"></div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Schedule ${{ $service->price }} </button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div> 
