@extends('layout')

@section('content')
<h1>My Profile</h1>

<div>id:{{$user->id}}</div>
<div>name:{{$user->name}}</div>
<div>email:{{$user->email}}</div>

<a href="/backoffice" class="btn btn-primary">
    <i class="fa-solid fa-home"></i>
    Backoffice
</a>

@endsection