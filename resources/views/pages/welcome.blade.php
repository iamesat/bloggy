@extends('main')
@section('title', '- Home')
@section('content')
    <div class="row">
        <div class="col-md-14">
            <h1> Laatste blogs</h1>

            @foreach($posts as $post)
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">


                        <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h3>{{$post->title}}</h3>
                                <p>{{substr($post->body, 0, 300) }}{{strlen($post->body) > 300 ? "..." : ""}}</p>
                                <br>
                                <p><a class="btn btn-primary btn-lg" href="{{url('blog/'.$post->slug)}}" role="button">Lees meer</a></p>
                                <br><br><br>

                            </div>
                        </div><!-- /header-text -->
                    </div>

                    <div class="item">
                        <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h3>{{$post->title}}</h3>
                                <p>{{substr($post->body, 0, 300) }}{{strlen($post->body) > 300 ? "..." : ""}}</p>
                                <br>
                                <p><a class="btn btn-primary btn-lg" href="{{url('blog/'.$post->slug)}}" role="button">Lees meer</a></p>
                                <br><br><br>

                            </div>
                        </div><!-- /header-text -->
                    </div>

                    <div class="item">
                        <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h3>{{$post->title}}</h3>
                                <p>{{substr($post->body, 0, 300) }}{{strlen($post->body) > 300 ? "..." : ""}}</p>
                                <br>
                                <p><a class="btn btn-primary btn-lg" href="{{url('blog/'.$post->slug)}}" role="button">Lees meer</a></p>
                                <br><br><br>

                            </div>
                        </div><!-- /header-text -->
                    </div>

                    <div class="item">
                        <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h3>{{$post->title}}</h3>
                                <p>{{substr($post->body, 0, 300) }}{{strlen($post->body) > 300 ? "..." : ""}}</p>
                                <br>
                                <p><a class="btn btn-primary btn-lg" href="{{url('blog/'.$post->slug)}}" role="button">Lees meer</a></p>
                                <br><br><br>

                            </div>
                        </div><!-- /header-text -->
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            @endforeach
            <br>
            <br>

            <h1>Recente blogs</h1>

            @foreach($posts as $post)

                <div class="col-md-8">
            <div class="jumbotron">

                <h3>{{$post->title}}</h3>
                <p>{{substr($post->body, 0, 300) }}{{strlen($post->body) > 300 ? "..." : ""}}</p>
                <p><a class="btn btn-primary btn-lg" href="{{url('blog/'.$post->slug)}}" role="button">Lees meer</a></p>

            </div>

            </div>
            @endforeach





        </div>
    </div>
    @endsection