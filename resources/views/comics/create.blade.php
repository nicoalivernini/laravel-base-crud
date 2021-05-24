@extends('layouts.app')

@section('main')
<main>
  <div class="container fix-height">
    <div class="content-form">
      
      @if ($errors->any())
       <div class="alert alert-danger">
         <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
          @endif

      <form class="" action="{{ route('comics.store')}}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="thumb" value="" placeholder="Link img">
        <input type="text" name="title" value="" placeholder="Title">
        <input type="text" name="description" value="" placeholder="Description">
        <input type="number" name="price" value="" placeholder="Price">
        <input type="text" name="series" value="" placeholder="Series">
        <input type="date" name="sale_date" value="" placeholder="Sale date">
        <input type="text" name="type" value="" placeholder="Type">
        <input type="submit" name="" value="Invia">
      </form>
      <a href="{{ route('home' )}}"><button type="button" name="button">Torna alla home</button></a>
    </div>
  </div>
</main>
@endsection
