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
            <textarea name="description" id="description" cols="20" rows="5"></textarea>
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
            <label for="type">Type</label>
            <input type="text" name="type" id="type">
        </div>
        <div class="form-control">
            <label for="sale_date">Sale Date</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>
        <div class="btn-container">
            <button type="submit">Create</button>
        </div>
    </form>
</div>
@endsection
