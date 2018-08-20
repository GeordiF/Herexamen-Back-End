@extends('layouts.app')

@section('content')

<p>You are logged in!</p>

<a href="{{ url('/cards') }}" class="btn btn-primary">Go to cards</a>

@endsection
