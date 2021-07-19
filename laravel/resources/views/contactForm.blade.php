<form class="needs-validation" action="{{ route('contact.send') }}"
                method="post"
                enctype="multipart/form-data" novalidate>
                @csrf
                <div class="d-md-flex justify-content-between form-group" >
                    <div class="mt-3 mx-2">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mt-3 mx-2">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group mx-2">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                </div>
                <div class="form-group mx-2">
                        <textarea name="content" rows="3" class="form-control" placeholder="Message" required></textarea>
                </div>
                <div class="form-group">
                        <div class="h-captcha text-center" data-sitekey="9c6eb30c-cf96-4956-beef-49f335ee66c2" data-theme="light"></div>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn-lg btn-success">Send</button>
                </div>
            </form>
