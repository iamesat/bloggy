@extends('main')

@section('title', '- Alle Posts')

@section('content')


 <div class="row">
     <div class="col-md-10">
         <h1>Alle Posts</h1>
     </div>

     <div class="col-md-2">
         <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Nieuw Post</a>
     </div>
     <hr>
 </div>


@stop