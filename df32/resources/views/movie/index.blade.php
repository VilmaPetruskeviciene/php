@extends('layouts.app')

@section('content')
<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-7 col-xxl-7">
            <div class="card">
                <div class="card-header">
                    <h2>Movie</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($movies as $movie)
                        <li class="list-group-item">
                            <div class="movies-list-2">
                                <div class="content">
                                    @if($movie->getPhotos()->count())
                                    <img class="index-img" src="{{$movie->getPhotos()->first()->url}}">
                                    @endif
                                    <h2><span>Title: </span>{{$movie->title}}</h2>
                                    <h4><span>Price: </span>{{$movie->price}}</h4>
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
                        <li class="list-group-item">No movies found</li>
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
