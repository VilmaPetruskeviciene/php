@extends('layouts.app')

@section('content')
<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Movie</h2>
                    <form action="{{route('m_index')}}" method="get">
                        <div class="container">
                            <div class="row">
                                <div class="col-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                
                                            </div>
                                            <div class="col-6">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-9">
                                            <div class="input-group mb-3">
                                                {{--<input type="text" name="s" class="form-control" value="{{$s}}">--}}
                                                <button type="submit" class="input-group-text">Search</button>
                                            </div>
                                            </div>
                                            <div class="col-3">
                                                <a href="{{route('m_index')}}" class="btn btn-secondary m-1">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                    <a href="{{route('m_edit', $movie)}}" class="btn btn-success">Edit</a>
                                    <form action="{{route('m_delete', $movie)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No movie found</li>
                        @endforelse
                    </ul>
                </div>
                <div class="me-3 mx-3">
                    {{--{{ $movie->links() }}--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection