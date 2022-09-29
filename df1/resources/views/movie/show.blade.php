@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Movie</h2>
                </div>
                <div class="card-body">
                    <div class="movie-show">
                        <div class="line"><small>Plate:</small>
                            <h5>{{$movie->plate}}</h5>
                        </div>
                        <div class="line"><small>Maker:</small>
                            <h5>{{$movie->maker}}</h5>
                        </div>
                        <div class="line"><small>Mechanic:</small>
                            <h5>{{$movie->getMechanic->name}} {{$movie->getMechanic->surname}}</h5>
                        </div>
                        <p>
                            {{$movie->mechanic_notices}}
                        </p>
                        @if($movie->photo)
                        <div class="img">
                            <img src="{{$movie->photo}}">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection