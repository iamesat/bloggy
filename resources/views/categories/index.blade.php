@extends('main')

@section('title', '- Alle categorieen')

@section('content')
        <div class="row">
            <div class="col-md-8">
                <h1>Categorieën</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th> </th>

                        <th>Naam</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div class="col-md-3">
                <div class="wel">
                    {!! Form::open(['route' => 'categories.store', 'method' => 'POST' ]) !!}

                    <h2>Maak nieuwe categorie aan</h2>
                    {!! Form::label('name', 'Naam:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    <br>
                    {!! Form::submit('Maak aan', ['class' => 'btn btn-primary btn-block']) !!}

                    {!! Form::close() !!}
                </div>
            </div>

        </div>


@endsection