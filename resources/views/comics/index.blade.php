@extends('layouts.base')

@section('title', 'Listing page')

@section('content')
@if (session('success_delete'))
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
</div>
@endsection
