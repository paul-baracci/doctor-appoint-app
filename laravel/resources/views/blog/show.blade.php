@extends('app')

@section('content')
<div class="container">
	<div class="row m-5">
		<div class ="col">
            <h2>{{ $article->article_title }}</h2>
            <p>{{ $article->published_at }}</p>
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
@endsection
