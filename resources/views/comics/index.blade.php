@extends('layouts.app')

@section('main')
<main>
  <div class="container">
    @foreach($comics as $comic)
    <div class="card">
      <div class="content-card">
        <a href="{{ route('comics.show', ['comic' => $comic->id])}}">
          <img src="{{ $comic->thumb }}" alt="">
          <h1>{{ $comic->title }}</h1>
          <p class="description">{{ $comic->description }}</p>
          <p class="price">{{ $comic->price }}</p>
          <span class="date">{{ $comic->date }}</span>
          <span class="type">{{ $comic->type }}</span>
        </a>
      </div>
    </div>
    @endforeach
    <a href="{{ route('home' )}}">Torna alla home</a>
    <a href="{{ route('comics.create')}}">Crea il tuo fumetto</a>
  </div>
</main>
@endsection
