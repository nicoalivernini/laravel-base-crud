@extends('layouts.app')

@section('main')
<main>
  <div class="container">
    <div class="card">
      <div class="content-card">
          <img src="{{$comic->thumb}}" alt="">
          <h1>{{ $comic->title }}</h1>
          <p class="description detail">{{ $comic->description }}</p>
          <p class="price">Prezzo: {{ $comic->price }}€</p>
          <span class="type">Tipologia: {{ $comic->type }}</span><br>
          <span class="type">Serie: {{ $comic->series }}</span>
          <p class="date">{{ $comic->sale_date }}</p>
        </a>
      </div>
    </div>
  </div>
  <div class="container center flex">
    <a href="{{ route('comics.index') }}"><button type="button" name="button">Torna indietro</button></a>
    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"><button type="button" name="button">Modifica</button></a>
    <a href="{{ route('comics.create') }}"><button type="button" name="button">Crea il tuo fumetto</button></a>
    <form class="form-delete" action="{{ route('comics.destroy', ['comic' => $comic->id])}}" method="post">
      @csrf
      @method('DELETE')
      <input type="submit" name="" value="Cancella">
    </form>
    <a href="{{ route('home') }}"><button type="button" name="button">Torna alla Home</button></a>
  </div>
</main>
@endsection
