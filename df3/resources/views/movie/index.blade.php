@extends('layouts.app')

@section('content')
<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Movie</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($movies as $movie)
                        <li class="list-group-item">
                            <div class="movies-list">
                                <div class="content">
                                    <h2><span>Title: </span>{{$movie->title}}</h2>
                                    <h4><span>Price: </span>{{$movie->price}}</h4>
                                    <h5>
                                        <span>Category: </span>
                                        <a href="{{route('c_show', $movie->getCategory->id)}}">
                                            {{$movie->getCategory->title}}
                                        </a>
                                    </h5>
                                    @if($movie->getPhotos()->count())
                                    {{--<h5><a href="{{$movie->getPhotos()->orderBy('id', 'desc')->first()->url}}" target="_BLANK">Photos: {{$movie->getPhotos()->count()}}</a></h5>--}}
                                    <img class="index-img" src="{{$movie->getPhotos()->first()->url}}">
                                    @endif
                                </div>
                                <div class="buttons">
                                    <a href="{{route('m_show', $movie)}}" class="btn btn-info">Show</a>
                                    @if(Auth::user()->role >= 10)
                                    <a href="{{route('m_edit', $movie)}}" class="btn btn-success">Edit</a>
                                    <form action="{{route('m_delete', $movie)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No movie found</li>
                        @endforelse
                    </ul>
                </div>
                <div class="me-3 mx-3">
                    {{ $movies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection