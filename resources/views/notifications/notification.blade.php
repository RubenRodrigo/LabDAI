@extends('layouts.app')

@section('content')
<div class="container">

    @foreach($notifications as $notification)
    <div class="row mb-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <p>El usuario {{App\User::find($notification->data['idUserComment'])->name}} realizo el siguiente comentario en su <a href="{{action('PostController@show', $notification->data['idPost'])}}">publicacion.</a></p>
                        <p>Comentario: {{$notification->data['data']}}</p>
                    </h5>
                </div> 
            </div>
        </div>
    </div>
    @endforeach
    
</div>
@endsection