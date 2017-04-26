@extends('main')
@section('content')

        <div class="row">
            <div class="col-md-12">

                <h1>Contact Pagina</h1>
                <form>
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" clas="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Onderwerp:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Bericht:</label>
                        <input id="message" name="message" class="form-control">
                    </div>
                    <input type="submit" value="Verzenden" class="btn btn-success">
                </form>
            </div>
        </div>

    @endsection