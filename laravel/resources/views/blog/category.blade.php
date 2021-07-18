@extends('app')

@section('content')
    <div class="container">
        <h1 class="text-center m-4"> Category </h1>
        <div class="row m-2 justify-content-center">
            @include('blog.categories')
        </div>
        <div class="container">
            @foreach($categoryArticles as $article)
                @include('blog.articles')
            @endforeach
        </div>
        <div class="row justify-content-center">
            {{ $categoryArticles->links() }}
        </div>
    </div>
@endsection
