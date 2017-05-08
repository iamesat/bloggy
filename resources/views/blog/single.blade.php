@extends('main')

@section('title', "-$post->title")

    @section('content')

        <div class="row">
            <div class="col-md8 col-md-offset-2">
                <h1>{{$post->title}}</h1>
                <p>{{$post->body}}</p>
                <hr>
                <p>Categorie: {{ $post->category->name }}</p>
            </div>
        </div>

        @endsection