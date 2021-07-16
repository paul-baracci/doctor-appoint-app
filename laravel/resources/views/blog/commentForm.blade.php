<form class="needs-validation" method="post" action="{{ route('comments.store', ['article' => $article->id]) }}"
      novalidate>
    @csrf
    <div class="form-group">
        <input type="hidden" name="article_id" value="{{ $article->id }}"/>
        <textarea
            name="message" class="form-control {{ $errors->has('message') ? ' has-error' : '' }}"
            placeholder="Leave a comment" required min="4">
        </textarea>
        <p class="text-danger">{{ $errors->first('message') }}</p>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add comment</button>
    </div>
</form>
