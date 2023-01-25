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
<div class="row">
    @foreach ($comics as $comic)
    <div class="col-12">
        <div class="card index mb-3 m-auto" style="width: 60%;">
            <div class="row g-0">
              <div class="col-md-4 d-flex">
                <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8 d-flex align-items-center">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <div class="series fw-bold"> {{$comic->series}}</div>
                  <div class="type text-uppercase">{{$comic->type}}</div>
                  <div class="sale_date">{{$comic->sale_date}}</div>
                  <div class="price">{{$comic->price}}$</div>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <div class="btn-container d-flex justify-content-center align-items-center">
                    <a class="btn btn-info" href="{{route('comics.show', ['comic' => $comic])}}">INFO</a>
                    <a class="btn btn-warning m-2" href="{{route('comics.edit', ['comic' => $comic])}}">EDIT</a>
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
    </div>
    @endforeach
</div>


{{-- {{-- @if (session('success_delete'))
<div class="alert alert-success">
    Il post con titolo {{ session('success_delete') }} e' stato eliminato correttamente
</div>
@endif

<div class="row row-cols-4">
    @foreach ($comics as $comic)
    <div class="col">
        <div>
            <a href="{{ route('comics.show', ['comic' => $comic]) }}">
                <img class="home-cards-img" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </a>
            <div class="text">{{$comic->series}}</div>
            <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edita</a>
            <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Elimina</button>
            </form>
        </div>
    </div>
    @endforeach
</div> --}}
@endsection
