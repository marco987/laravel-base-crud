@extends('layouts.main-layout')

@section('content')

  <a href="{{Route('index.post')}}">Torna indietro</a>

  <form action="{{Route('update.post', $post -> id)}}" method="post">
    @csrf
    @method('POST')

    <label for="title">Titolo</label>
    <input type="text" name="title" value="{{ $post -> title }}">
    <label for="description">Descrizione</label>
    <input type="text" name="description" value="{{ $post -> description }}">
    <label for="author">Autore</label>
    <input type="text" name="author" value="{{ $post -> author }}">

    <button type="submit"> AGGIORNA </button>
  </form>

@endsection
