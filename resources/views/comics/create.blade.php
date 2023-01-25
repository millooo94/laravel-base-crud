@extends('layouts.base')

@section('headerContent')
@include('partials.resources')
@include('partials.search')
@endsection


@section('content')

<div class="container">

    <form id="form" method="post" action="{{ route('comics.store') }}" class="form">
        @csrf
        <div class="form-control">
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="form-control">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="form-control">
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <div class="form-control">
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
        </div>
        <div class="form-control">
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
        </div>
        <div class="form-control">
            <label for="sale_date">Sale Date</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>
        <div class="form-control">
            <label for="type">Type</label>
            <input type="text" name="type" id="type">
        </div>
        <div class="btn-container">
            <button type="submit">Create</button>
        </div>
    </form>

</div>





    {{-- <form method="post" action="{{ route('comics.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3 form-check">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="rooms" class="form-label">Sale Date</label>
            <input class="form-control" type="date" name="sale_date" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form> --}}
@endsection
