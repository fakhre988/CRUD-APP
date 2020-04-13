@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">{{ $user->name }}</h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                <strong> Email :</strong> {{ $user->email }} <br>
                <strong>Password :</strong> {{ $user->password }}
            </div>
        </div>
        <a href="/users/{{ $user->id }}/edit" class="btn btn-info my-2">Edit</a>
        <a href="/users/{{ $user->id }}/delete" class="btn btn-danger my-2">Delete</a>
    </div>
</div>
@endsection