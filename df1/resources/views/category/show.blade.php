@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Category</h2>
                </div>
                <div class="card-body">
                    <div class="category">
                        <h5>{{$category->name}}</h5>
                        <h5>{{$category->surname}}</h5>
                    </div>
                    <ul class="list-group">
                        @forelse($category->getTrucks as $truck)
                        <li class="list-group-item">
                            <div class="trucks-list">
                                <div class="content">
                                    <h2><span>plate: </span>{{$truck->plate}}</h2>
                                    <h4><span>maker: </span>{{$truck->maker}}</h4>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No trucks found</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection