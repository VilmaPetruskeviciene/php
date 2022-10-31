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
                                </div>
                            </div>
                            <div class="comments">
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
