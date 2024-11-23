@extends('layout')

@section('content')
    <h3>Backoffice</h3>

    <a href="/users/singOut" class="btn btn-danger" onclick="return confirm('Are you sure you want to sign out?')">
        <i class="fa-solid fa-sign-out"></i>
        Sign Out
    </a>
    <a href="/user/info" class="btn btn-primary">
        <i class="fa-solid fa-user"></i>
        User Info
    </a>
@endsection
