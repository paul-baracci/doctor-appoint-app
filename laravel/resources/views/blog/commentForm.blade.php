<form method="post" action="/article/{{ $article->id }}/comments">
    @csrf
    <div class="form-group form-row align-items-center">
    <input type="hidden" name="article_id" value="{{ $article->id }}" />
        <div class="col-9">
            <input type="text" name="message" class="form-control form-control-lg" placeholder="Leave a comment" required></input>
        </div>
        <div class="form-group col-3">
            <button type="submit" class="btn-lg btn-primary">Post comment</button>
        </div>
    </div>
</form>
