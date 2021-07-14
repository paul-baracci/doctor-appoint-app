@extends('app')

@section('content')
    <div class="container text">
        <h1 class="text-center m-4"> Tag </h1>
        @foreach($articles as $article)
            @include('blog.articles')
        @endforeach
    </div>
@endsection
