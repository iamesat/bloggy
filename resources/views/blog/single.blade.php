@extends('main')
@section('title',"| $post->title")﻿

    @section('content')

        <div class="row">
            <div class="col-md8 col-md-offset-2">
                <h1>{{$post->title}}</h1>
                <p>{{$post->body}}</p>
                <hr>
                <p>Categorie: {{ $post->category->name }}</p>

                <br><br>
                <p><i><u>Reacties</u></i></p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @foreach($post->comments as $comment)
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        <h3 class="panel-title"><strong>Naam: </strong>  {{ $comment->name }}</h3>
                        <br>
                    </div>
                                  <div class="panel-body">
                                {{ $comment->comment }}
                            </div>
                        <br>

                        <hr>
                        <p>Geplaatst op:{{ $comment->created_at }} </p>

                    </div>

                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="comment-form">
                {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('name', "Naam:") }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>


                <div class="col-md-6">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control'] ) }}
                </div>

                <div class="col-md-12">
                    {{ Form::label('comment', 'Bericht:') }}
                    {{ Form::textarea('comment', null, ['class' => 'form-control'] ) }}
                    <br>
                    {{ Form::submit('Plaats Reactie', ['class' => 'btn btn-success']) }}
                </div>
               </div>
                {{ Form::close() }}
            </div>
        </div>

        @endsection