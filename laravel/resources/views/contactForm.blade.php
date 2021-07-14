<form action="/contact"
                method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="form-row form-group">
                    <div class="col-6">
                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-6">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-row form-group">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                </div>
                <div class="form-row form-group">
                        <textarea name="message" rows="3" class="form-control" placeholder="Message" required></textarea>
                </div>
                <div class="form-row form-group">
                        <div class="h-captcha text-center" data-sitekey="9c6eb30c-cf96-4956-beef-49f335ee66c2" data-theme="light"></div>
                </div>
                <div class="form-row form-group">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
