@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>

            <p class="lead">{{ $post->body }}</p>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label>Url:</label>
                    <p><a href="{{ url('blog/'.$post->slug) }}">Link</a></p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Categorie:</label>
                    <p>{{ $post->category->name }}</p>
                </dl>


                <dl class="dl-horizontal">
                    <label>Gemaakt op:</label>
                    <p>{{ date('j M, Y h:ia', strtotime($post->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Laasts geupdate:</label>
                    <p>{{ date('j M, Y h:ia', strtotime($post->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Bewerken', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}

                        {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection