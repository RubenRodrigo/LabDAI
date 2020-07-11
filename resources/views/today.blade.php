@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <h3>Estas son las ultimas publicaciones de hoy</h3>
    </div>
    @foreach($posts as $post)
    <div class="row mb-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{action('PostController@show', $post->id)}}">{{$post->title}}</a>
                    </h5>
                </div>
                <img src="{{asset($post->image)}}" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection


