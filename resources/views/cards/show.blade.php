@extends("layouts.app")

@section('content')

  <h1>{{$card->title}}</h1>
  <p>{{$card->created_at}}</p>
  <p>{{$card->updated_at}}</p>

@endsection
