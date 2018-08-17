@extends('layouts.app')

@section('content')

@if (Auth::check())

<p>You are logged in!</p>

@else

<p>You are not logged in!</p>

@endif

@endsection
