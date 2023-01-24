

@extends('layouts.base')

@section('title', 'Comics')


@section('content')
@if (session('success_create'))
<div class="alert alert-success">
    Il post e' stato creato
</div>
@endif
<div class="card" style="width: 30rem;">
    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <p class="card-text">{{$comic->description}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$comic->price}}</li>
      <li class="list-group-item">{{$comic->series}}</li>
      <li class="list-group-item">{{$comic->sale_date}}</li>
      <li class="list-group-item">{{$comic->type}}</li>
      <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edita</a>
      <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger">Elimina</button>
      </form>
    </ul>
@endsection
