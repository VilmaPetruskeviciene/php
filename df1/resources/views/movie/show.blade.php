@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Truck</h2>
                </div>
                <div class="card-body">
                    <div class="truck-show">
                        <div class="line"><small>Plate: </small><h5>{{$trucks->plate}}</h5></div>
                        <div class="line"><small>Maker: </small><h5>{{$trucks->maker}}</h5></div>
                        <div class="line"><small>Mechanic: </small><h5>{{$trucks->getMechanic->name}} {{$trucks->getMechanic->surname}}</h5></div>
                        <p>{{$trucks->mechanic_notices}}</p>
                        @if($trucks->photo)
                            <div class="img">
                                <img src="{{$trucks->photo}}">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
