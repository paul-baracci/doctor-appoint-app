@extends('app')

@section('content')
    <div class="container">
        <div class="text-center m-5">
            <h1>Page not found</h1>
        </div>
        <div class="my-5 py-4">
            <div class="col-sm text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" fill="#007bff" class="bi bi-emoji-frown" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                </svg>
            </div>
            <div class="col-sm text-center my-5">
                <h2>The page that you're trying to view is not available. <a href="{{ url()->previous() }}">Go Back.</a> </h2>
            </div>
        </div>
    </div>
@endsection
