@extends('app')

@section('content')
<div class="container text">
  <h1 class="text-center"> Tag </h1>

  @foreach($articles as $article)
      <div class="row m-2">
        <div class="col-md-12">
          <div class="card flex-row mb-4 box-shadow">
            <img class="card-img-right flex-auto d-none d-md-block" src="https://via.placeholder.com/500x300?text=Article">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-1">{{ $article->article_title }}</h3>
              <div class="mb-1 text-muted">{{ $article->created_at }}</div>
              <p class="card-text mb-auto">{{ $article->article_description }}</p>
              <a href="/article/{{ $article->id }}">Continue reading</a>
            </div>           
          </div>
        </div>
      </div>
  @endforeach
  
</div>

@endsection
