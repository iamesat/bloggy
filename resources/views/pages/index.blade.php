@extends('main')

@section('title', '- Alle geplaatste blogs')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>Alle blogs</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Nieuwe Blog</a>
        </div>

    </div>

@stop