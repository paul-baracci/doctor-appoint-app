@extends('app')

@section('content')
<div class="container">
	<div class="col">
            <h2>{{ $articles->article_title }}</h2>
            <p>{{ $articles->published_at }} by <a href="#">{{ $articles->author_id }}</a></p>
            <p>{{ $articles->article_description }}</p>
            <hr>
	{{ $articles->article_content }}
	</div>
</div>    
@endsection
