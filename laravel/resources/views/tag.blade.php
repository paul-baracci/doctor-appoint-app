@extends('app')

@section('content')
    <div class="container">
        <h1 class="text-center m-4"> {{ $tagName->name }} </h1>
        <div class="row m-2 justify-content-center">
            @include('blog.categories')
        </div>
        @foreach($tagArticles as $article)
            @include('blog.articles')
        @endforeach
    </div>
@endsection
