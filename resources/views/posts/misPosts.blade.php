@extends('layouts.app')

@section('content')
<div class="container">
    @auth
        <nav>
            <a class="btn btn-light btn-lg" href="{{action('PostController@userPosts')}}">Mis Publicaciones</a>
        </nav>
    @endauth
    @foreach($posts as $post)
    <div class="row mb-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{action('PostController@show', $post->id)}}">{{$post->title}}</a>
                    </h5>
                </div>
                <img src="{{Storage::url($post->image)}}" class="card-img-top" alt="...">
                
                @auth
                <form method="POST" action="{{ url("posts/{$post->id}") }}">
                    @csrf
                    @method('DELETE')                
                    <button class="btn btn-light btn-block" type="submit">Eliminar Publicación</button>

                </form>
                @endauth
                    
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
