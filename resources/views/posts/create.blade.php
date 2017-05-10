@extends('main')

@section('title', '- Nieuw post')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Nieuwe Post</h1>
        <hr>

        {{ Form::open(array('route' => 'posts.store')) }}

            {{ Form::label('title', 'Titel:') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}
            <br>
            {{Form::label('slug', 'Slug:')}}
        {{ Form::text('slug', null, array('class' => 'form-control')) }}
            <br>

        {{ Form::label('category_id', "Categorie") }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

            <br>
            {{ Form::label('body', "Content:" ) }}
            {{ Form::textarea('body', null, array('class' => 'form-control' )) }}
            <br>
            {{ Form::submit('Maak aan', array('class' => 'btn btn-success')) }}
        {{ Form::close() }}

    </div>
</div>

@endsection
