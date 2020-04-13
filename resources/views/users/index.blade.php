@extends('layouts.app')
@section('content')
<h1 class="text-center my-5">Users pages</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Users
            </div>
            <div class="card card-body">
                <ul class="list-group">
                    @foreach($users as $user)
                    <li class="list-group-item">
                        {{ $user->name }}
                        <a href="/users/{{ $user->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection