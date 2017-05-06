@extends('main')

@section('title', '- Post bewerken')

@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' =>'PUT']) !!}
        <div class="col-md-8">
            {{ Form::text('title', null, ["class" => 'form-control']) }}

            {{ Form::text('slug', null, ["class" => 'form-control']) }}

            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Gemaakt op:</dt>
                    <dd>{{ date('j M, Y h:ia', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Laasts geupdate:</dt>
                    <dd>{{ date('j M, Y h:ia', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Annuleren', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Opslaan', ['class' => 'btn btn-success btn-block']) }}

                    </div>
                </div>

            </div>
        </div>
        {!! Form::close() !!}
    </div>

@stop