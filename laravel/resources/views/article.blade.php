@extends('app')

@section('content')
<div class="container">
	<div class="row m-5">
		<div class ="col">
            <h2>{{ $article->article_title }}</h2>
            <p>{{ $article->published_at }}</p>
            <p>{{ $article->article_description }}</p>
            <hr>
	{{ $article->article_content }}
		</div>
	</div>
</div>    
@endsection
