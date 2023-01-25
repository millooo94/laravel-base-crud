@extends('layouts.base')

@section('headerContent')
@include('partials.resources')
@include('partials.search')
@endsection

@section('content')

@if (session('success_delete'))
<div class="alert alert-success mb-5">
    Il post con titolo {{session('success_delete')}} è stato eliminato correttamente
</div>
@endif
<div class="card show-card index mb-3 m-auto" style="width: 70%;">
    <div class="row g-0">
      <div class="col-md-4 d-flex">
        <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8 d-flex align-items-center">
        <div class="card-body p-5">
          <h5 class="card-title">{{$comic->title}}</h5>
          <div class="series fw-bold"> {{$comic->series}}</div>
          <div class="type my-3">{{$comic->type}}</div>
          <div class="sale_date">{{$comic->sale_date}}</div>
          <div class="price my-3">{{$comic->price}}$</div>
          <p class="card-text paragraph">{{$comic->description}}.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          <div class="btn-container d-flex justify-content-center align-items-center">
            <a class="btn btn-secondary" href="{{route('comics.index')}}">INDEX</a>
            <a class="btn btn-warning m-4" href="{{route('comics.edit', ['comic' => $comic])}}">EDIT</a>
            <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">DELETE</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- @if (session('success_create'))
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
    </ul> --}}
@endsection
