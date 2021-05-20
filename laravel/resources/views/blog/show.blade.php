@extends('app')

@section('content')
<div class="container">
    <div class="row m-5">
	<div class ="col">
            <h2>{{ $article->article_title }}</h2>
            <p>Author: {{ $article->doctor->name }}, published on {{ $article->published_at }}</p>
            <p>{{ $article->article_description }}</p>
            <p class="card-text mb-auto">category: <a href="/category/{{ $article->category_id }}"> {{ $article->category->name }} </a></p>
            <p class="card-text mb-auto">tags: 
            @foreach($article->tags as $tag)
                <a href="/tag/{{ $tag->id }}"> {{ $tag->name }} </a>
            @endforeach
            </p>
            <hr>
	{{ $article->article_content }}
	</div>
    </div>
</div>    
	<div class="container">
	    <div class="card w-75 mx-auto">
		<div class="card-header">
		    comments
		</div>
		<div class="card-body">
		    @foreach($comments as $comment)
			<p>posted by {{ $comment->user->name }} on {{ $comment->approved_at }} </p>
			<p> {{ $comment->message }} </p>
			<hr>
			@endforeach
		   <p>Post a comment</p> 
		</div>
	    </div>
	</div>
    
@endsection
