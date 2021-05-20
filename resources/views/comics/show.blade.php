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
          <a href="{{ route('comics.index' )}}">Torna indietro</a>
          <a href="{{ route('home' )}}">Torna alla home</a>
          <a href="{{ route('comics.create')}}">Crea il tuo fumetto</a>
        </a>
      </div>
    </div>
  </div>
</main>
@endsection
