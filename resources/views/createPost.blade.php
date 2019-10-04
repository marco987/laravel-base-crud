@extends('layouts.main-layout')

@section('content')

  <a href="{{Route('index.post')}}">Torna indietro</a>

  <form action="{{Route('store.post')}}" method="post">
    @csrf
    @method('POST')

    <label for="title">Titolo</label>
    <input type="text" name="title" value="">
    <label for="description">Descrizione</label>
    <input type="text" name="description" value="">
    <label for="author">Autore</label>
    <input type="text" name="author" value="">

    <button type="submit"> SALVA </button>
  </form>

@endsection
