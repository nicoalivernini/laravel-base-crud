@extends('layouts.app')

@section('main')
<main>
  <div class="container">
    <div class="card">
      <div class="content-card">
          <img src="{{ $comic->thumb }}" alt="">
          <h1>{{ $comic->title }}</h1>
          <p class="description">{{ $comic->description }}</p>
          <p class="price">{{ $comic->price }}</p>
          <span class="date">{{ $comic->date }}</span>
          <span class="type">{{ $comic->type }}</span>
        </a>
      </div>
    </div>
  </div>
</main>
@endsection
