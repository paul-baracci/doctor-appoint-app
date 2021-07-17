@extends('app')

@section('content')
    <div class="container text">
        <h1 class="text-center m-4">Our Blog</h1>
        <div class="row m-2 justify-content-center">
            {{ $articles->links() }}
        </div>
        @foreach($articles as $article)
            @include('blog.articles')
        @endforeach
        <div class="row mt-4 justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>

@endsection
