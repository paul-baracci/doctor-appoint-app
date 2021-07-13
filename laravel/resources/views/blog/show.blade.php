@extends('app')

@section('content')
    <div class="container my-4">
        <div class="card row shadow-lg mx-0">
            <img class="card-img-top" src="../img/hero3.jpg">
            <div class ="col m-4">

                <h2>{{ $article->article_title }}</h2>
                <p>by <strong>{{ $article->doctor->name }}</strong> {{ $article->created_at }}</p>

                <p class="card-text mb-auto">category:
                    <a href="/category/{{ $article->category_id }}"> {{ $article->category->name }}</a>
                </p>
                <p class="card-text mb-auto">tags:
                    @foreach($article->tags as $tag)
                        <a href="/tag/{{ $tag->id }}">{{ $tag->name }}</a>
                    @endforeach
                </p>
                <hr>
                <strong><p>{{ $article->article_description }}</p></strong>
                {{ $article->article_content }}
            </div>
        </div>
        <h3 class="my-4">{{ $article->comments->count() }} Comments</h3>
        <div class="card shadow-lg p-4 my-4">
            @include('blog.commentForm')
            @foreach($article->comments->sortByDesc('created_at') as $comment)
                <div class="mt-1">
                    <p><strong>{{ $comment->user->name }}</strong><strong class="font-weight-light mx-3">{{ $comment->created_at->diffForHumans() }}</strong> </p>
                    <p>{{ $comment->message }}</p>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
