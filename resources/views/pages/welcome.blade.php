@extends('main')
@section('title', '- Home')
@section('content')
    <div class="row">
        <div class="col-md-14">
            <h1> Laatste blogs</h1>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/slider/sliderblog.png" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="img/slider/sliderblog.png" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="img/slider/sliderblog.png" alt="Flower">
                    </div>

                    <div class="item">
                        <img src="img/slider/sliderblog.png" alt="Flower">
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
            <br>
            <br>

            <h1>Recente blogs</h1>
            <div class="jumbotron">
                <h1>Welkom op mijn blog!</h1>
                <p>...</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>

        </div>
    </div>
    @endsection