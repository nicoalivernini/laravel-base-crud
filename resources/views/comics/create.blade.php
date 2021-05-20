@extends('layouts.app')

@section('main')
<main>
  <div class="container fix-height">
    <div class="content-form">
      <form class="" action="" method="post">
        <input type="text" name="title" value="" placeholder="Title">
        <input type=" " name="description" value="" placeholder="Description">
        <input type="text" name="price" value="" placeholder="Price">
        <input type=" " name="series" value="" placeholder="Series">
        <input type="text" name="sale_date" value="" placeholder="Sale date">
        <input type=" " name="type" value="" placeholder="Type">
      </form>
      <a href="{{ route('home' )}}"><button type="button" name="button">Torna alla home</button></a>
      <a href=""><button type="button" name="button">Next lessons</button></a>
    </div>
  </div>
</main>
@endsection
