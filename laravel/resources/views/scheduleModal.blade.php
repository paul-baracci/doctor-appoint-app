<div class="modal fade text-left" id="{{ $service->title }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Confirm your <strong>{{ $service->title }}</strong> appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col ">
                            <div class="shadow slider-item card text-center align-content-start">
                                <img src="{{ $service->image->path }}" class="card-img" alt="Image">
                                <div class="col">
                                    <h6 class="font-weight-semibold"> {{ $service->title }} </h6>
                                    <h3>Price ${{ $service->price }} </h3>
                                    <button type="button" class="btn btn-sm">
                                        <a href="{{ route('services.show', ['service' => $service]) }}">More details</a>
                                    </button>
                                    <hr>
                                    <h6 class="text-muted font-weight-normal">
                                        {!! Str::limit($service->description, 1530) !!}
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <form class="needs-validation" method="post" action="{{ route('schedule', ['service' => $service->id]) }}" novalidate>
                                @csrf
                                <div class="input-group">
                                    <input type="hidden" id="service" name="service" value="{{ $service->title }}">
                                    <input type="hidden" id="service_id" name="service_id" value="{{ $service->id }} ">
                                    <div class="form-group">
                                        <label>Full name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Rick Deckard" required min="4" max="30">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                           placeholder="rick.deckard@lapd.gov" required min="4" max="30">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" id="phone" name="phone" class="form-control"
                                           placeholder="+12 000 555" required min="4" max="30">
                                </div>
                                <div class="form-group">
                                    <label>Desired Appointment Date</label>
                                    <input type="date" name="desired_date" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Desired Appointment Time</label>
                                    <input type="time" name="desired_time" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <textarea name="comment" id="comment" class="form-control"
                                              placeholder="Additional comments" required>
                                    </textarea>
                                </div>
                                <div class="form-group text-center" >
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            Agree to <a href="terms">Terms and conditions</a>
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <div class="h-captcha text-center" data-sitekey="9c6eb30c-cf96-4956-beef-49f335ee66c2"></div>
                                <div class="modal-footer justify-content-center">
                                    <button id="schedule" type="submit" class="btn btn-success">Confirm appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

