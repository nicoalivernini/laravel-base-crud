@extends('layouts.app')

@section('main')
  <div class="container center fix-height">
    <div class="title">
      <h1>Entra nella raccolta di Comics</h1>
      <a href="{{route('comics.index')}}"><button type="button" name="button">Clicca qui per entrare</button></a>
    </div>
  </div>
@endsection
