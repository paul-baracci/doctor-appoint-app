<form method="post" action="{{ route('comments.store', ['article' => $article->id]) }}">
    @csrf
    <div class="form-group">
        <input type="hidden" name="article_id" value="{{ $article->id }}" />
        <textarea type="text" name="message" class="form-control form-control {{ $errors->has('message') ? ' has-error' : '' }}" placeholder="Leave a comment" required></textarea>
            <p class="text-danger">{{ $errors->first('message') }}</p>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add comment</button>
    </div>
</form>
