@extends('layouts.main-layout')

@section('content')

  <a href="{{Route('index.post')}}">Torna indietro</a>

    <div class="box-post">
      <h3><span>Titolo</span><br> {{$post -> title}}</h3>
      <p><span>Descrizione</span><br> {{$post -> description}}</p>
      <p><span>Autore</span><br> {{$post -> author}}</p>
      <a href="{{Route('edit.post', $post -> id)}}">MODIFICA post</a>
      <a href="{{Route('delete.post', $post -> id)}}">ELIMINA post</a>
    </div>

@endsection
