@extends('layouts.app')

@section('main')
      <div class="content">
          <div class="title m-b-md">
              Entra nella raccolta di Comics
          </div>
            <a href="{{route('comics.index')}}">Clicca qui per entrare</a>
      </div>
@endsection
