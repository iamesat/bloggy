@extends('main')

@section('title', '- Blog')

@section('content')



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Blogs</h1>
        </div>
    </div>

    @foreach ($posts as $post)
    <div class="row">
        <div class="col-md-2 col-md-offset-2">
            <h2>{{$post->title}}</h2>
            <h5>Gemaakt op: {{ date('j M, Y', strtotime($post->created_at)) }}</h5>

            <p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? '...' : ""  }}</p>

            <a href="{{route('blog.single', $post->slug) }}" class="btn btn-primary">Lees Meer</a>
            <hr>
        </div>
    </div>

    @endforeach
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection