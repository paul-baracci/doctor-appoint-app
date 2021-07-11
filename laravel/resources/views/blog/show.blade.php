@extends('app')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class ="col">
                <img class="img-fluid" src="../img/hero3.jpg">
                <h2>{{ $article->article_title }}</h2>
                <p>Author: {{ $article->doctor->name }}, published {{ $article->created_at->diffForHumans() }}</p>
                <p>{{ $article->article_description }}</p>
                <p class="card-text mb-auto">category:
                    <a href="/category/{{ $article->category_id }}"> {{ $article->category->name }}</a>
                </p>
                <p class="card-text mb-auto">tags:
                    @foreach($article->tags as $tag)
                        <a href="/tag/{{ $tag->id }}">{{ $tag->name }}</a>
                    @endforeach
                </p>
                <hr>
                {{ $article->article_content }}
            </div>
        </div>
        <div class="my-1">
            @include('blog.commentForm')
        </div>
        <div>
            <h3 class="my-4">{{ $article->comments->count() }} Comments</h3>
            @foreach($article->comments->sortByDesc('created_at') as $comment)
                <div class="my-1">
                    <p>{{ $comment->user->name }}, {{ $comment->created_at->diffForHumans() }} </p>
                    <p>{{ $comment->message }}</p>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
@endsection
