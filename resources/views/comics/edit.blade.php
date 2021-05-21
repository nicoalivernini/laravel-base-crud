@extends('layouts.app')

@section('main')
<main>
  <div class="container fix-height">
    <div class="content-form">
      <form class="" action="{{ route('comics.update',['comic'=>$comic->id] )}}" method="post">
        @csrf
        @method('PATCH')
        <input type="text" name="thumb" value="{{ $comic->thumb }}" placeholder="Link img">
        <input type="text" name="title" value="{{ $comic->title }}" placeholder="Title">
        <input type="text" name="description" value="{{ $comic->description }}" placeholder="Description">
        <input type="number" name="price" value="{{ $comic->price }}" placeholder="Price">
        <input type="text" name="series" value="{{ $comic->series }}" placeholder="Series">
        <input type="date" name="sale_date" value="{{ $comic->sale_date }}" placeholder="Sale date">
        <input type="text" name="type" value="{{ $comic->type }}" placeholder="Type">
        <input type="submit" name="" value="Invia">
      </form>
      <a href="{{ route('home')}}"><button type="button" name="button">Torna alla home</button></a>
    </div>
  </div>
</main>
@endsection
