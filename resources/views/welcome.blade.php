@extends('user.layout.app')
@section('content')
@php
    $user = Auth::guard('web')->user();
@endphp

  @auth
  <h1 class="text-center">Hello, {{$user->name}}</h1>

  @else
    <h1 class="text-center">Home Page</h1>

  @endauth
@endsection