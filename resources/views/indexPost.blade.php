@extends('layouts.main-layout')

@section('content')

  @foreach ($posts as $post)

    <div class="box-post">
      <h3><span>Titolo</span><br> {{$post -> title}}</h3>
      <p><span>Descrizione</span><br> {{$post -> description}}</p>
      <p><span>Autore</span><br> {{$post -> author}}</p>
    </div>

  @endforeach

@endsection
