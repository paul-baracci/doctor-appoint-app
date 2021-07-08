<form action=""
      method="post"
      enctype="multipart/form-data"
      name="comment">
    @csrf
    <div class="form-row align-items-center">
        <div class="col-9">
            <input type="text" name="content" class="form-control form-control-lg" placeholder="Leave a comment" required></input>
        </div>
        <div class="col-3">
            <button type="submit" class="btn-lg btn-primary">Post comment</button>
        </div>
    </div>

</form>
