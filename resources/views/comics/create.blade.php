@extends('layouts.app')

@section('main')
<main>
  <div class="container">
    <form class="" action="" method="post">
      <input type="text" name="title" value="" placeholder="title">
      <input type=" " name="description" value="" placeholder="description">
      <input type="text" name="price" value="" placeholder="price">
      <input type=" " name="series" value="" placeholder="series">
      <input type="text" name="sale_date" value="" placeholder="sale_date">
      <input type=" " name="type" value="" placeholder="type">
    </form>
    <a href="{{ route('home' )}}">Torna alla home</a>
  </div>
</main>
@endsection
