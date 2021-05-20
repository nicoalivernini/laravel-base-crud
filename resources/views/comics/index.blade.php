@extends('layouts.app')

@section('main')
<main>
  <div class="container">
    <div class="cards">
      @foreach($comics as $comic)
      <div class="card">
        <div class="content-card">
          <a href="{{ route('comics.show', ['comic' => $comic->id])}}">
            <img src="{{ $comic->thumb }}" alt="">
            <h1>{{ $comic->title }}</h1>
            <div class="description-content">
              <p class="description">{{ $comic->description }}</p>
              <p class="price">Prezzo: {{ $comic->price }}€</p>
              <span class="type">Tipologia: {{ $comic->type }}</span><br>
              <span class="type">Serie: {{ $comic->series }}</span>
              <p class="date">{{ $comic->sale_date }}</p>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
    <div class="container center">
      <a href="{{ route('home' )}}"><button type="button" name="button">Torna alla Home</button></a>
      <a href="{{ route('comics.create')}}"><button type="button" name="button">Crea il tuo fumetto</button></a>
    </div>
  </div>
</main>
@endsection
