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
                                    @if($movie->getPhotos()->count())
                                    <img class="index-img" src="{{$movie->getPhotos()->first()->url}}">
                                    @endif
                                    <h4><span>Rating: </span>{{$movie->rating ?? 'no rating'}}</h4>
                                </div>
                                <div class="buttons">
                                    <form action="{{route('rate', $movie)}}" method="post">
                                        <select name="rate">
                                            @foreach(range(1, 10) as $value)
                                            <option value="{{$value}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-info">Rate</button>
                                    </form>
                                </div>
                            </div>
                            <div class="comments">
                                <ul class="list-group m-3">
                                    @forelse($movie->getComments as $comment)
                                    <li class="list-group-item">
                                        <div>{!!$comment->post!!}</div>
                                    </li>
                                    @empty
                                    <li class="list-group-item">No comment.</li>
                                    @endforelse
                                </ul>
                                <form action="{{route('comment', $movie)}}" method="post">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Comment</span>
                                        <textarea name="post" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info">add comment</button>
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No movies found</li>
                        @endforelse
                    </ul>
                </div>
                <div class="me-3 mx-3">
                    {{-- {{ $movies->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
