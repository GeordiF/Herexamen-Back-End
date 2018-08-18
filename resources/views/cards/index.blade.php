@extends("layouts.app")

@section('content')

<div class="container">
  <h1>All To Do Items</h1>
    @foreach ($cards as $card)
    <div class="container">
      <a href="/cards/{{$card->id}}"><h4>{{$card->title}}</h4></a>
      <p>created at: {{$card->created_at}}</p>
      <p>updated at: {{$card->updated_at}}</p>
    </div>
    @endforeach
  </div>

<p>You are not logged in!</p>


@endsection
