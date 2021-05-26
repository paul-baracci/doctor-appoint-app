<form action="/contact"
                method="post"
                enctype="multipart/form-data"
                name="Bootcamp">
                @csrf 
                <div class="row justify-content-center">
                    <div class="form-group col-3">
                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group col-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>   
                </div> 
                <div class="row justify-content-center">        
                    <div class="form-group col-6">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                    </div>
                </div>           
                <div class="row justify-content-center">         
                    <div class="form-group col-6">
                        <textarea name="content" rows="3" class="form-control" placeholder="Message" required></textarea>
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
