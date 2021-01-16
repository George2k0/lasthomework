@extends('layouts.app')

@section('content')
    <div class="container">
            <h2 class="card-title d-flex justify-content-center">Add Story</h2>
        <div class="d-block">
            <form action="{{ route('posts.store') }}" method="POSt" class="d-flex flex-column">
                @csrf
                <label for="title">/label>
                <input type="text" name="title" id="title">

                <label for="desc"></label>
                <textarea name="desc" id="desc" cols="30" rows="10">

                </textarea>
                <button type="submit" class="btn btn-success mt-5">Add Story</button>
            </form>
        </div>
    </div>
@endsection
