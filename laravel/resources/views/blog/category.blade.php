@extends('app')

@section('content')
    <div class="container text">
        <h1 class="text-center m-4"> Category </h1>
        <div class="row justify-content-center">
            {{ $articles->links() }}
        </div>
        @foreach($articles as $article)
            @include('blog.articles')
        @endforeach
        <div class="row justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>

@endsection
