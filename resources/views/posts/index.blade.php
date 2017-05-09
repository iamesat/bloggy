@extends('main')

@section('title', '- Alle Posts')

@section('content')


 <div class="row">
     <div class="col-md-10">
         <h1>Alle Posts</h1>
     </div>

     <div class="col-md-2">
         <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Nieuwe Post</a>
     </div>
    <div class="col-md-12">
        <hr>
    </div>

     <hr>
 </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th> </th>
                <th>Titel</th>
                <th>Content</th>
                <th>Geplaats op</th>
                <th></th>
                </thead>

                <tbody>

                @foreach ($posts as $post)

                    <tr>
                        <th>{{$post->id}}</th>
                        <th>{{$post->title}}</th>
                        <th>{{ substr($post->body, 0, 150) }}{{ strlen($post->body) > 250 ? '...' : ""  }}</th>
                        <th>{{$post->created_at}}</th>
                        <th><a href="{{route('posts.show', $post->id) }}" class="btn btn-default">Open</a> <a href="{{route('posts.edit', $post->id) }}" class="btn btn-primary">Bewerken</a></th>

                    </tr>

                @endforeach

                </tbody>
            </table>

            <div class="text-center">
                {!! $posts->links() !!}
            </div>

        </div>
    </div>


@stop