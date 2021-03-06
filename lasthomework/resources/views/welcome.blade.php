@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="card-title d-flex justify-content-center">Stories</h2>
            <a class="btn btn-primary" href="{{route('posts.add')}}">Add Story</a>
        </div>
        <div class="d-block">
            <example-component></example-component>
        </div>
    </div>
@endsection
