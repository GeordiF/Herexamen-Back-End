@extends("layouts.app")

@section('content')

<div class="container">
  <h1>Completed To Do Items</h1>
    @foreach ($cards as $card)
    <div class="container">
      <a href="/cards/{{$card->id}}"><h4>{{$card->title}}</h4></a>
      <p>{{$card->body}}</p>
      <p><small>Created: {{$card->created_at}}</small></p>
      <p class="float-right">Due Date: {{$card->date}}</p>
      <p><small>Updated: {{$card->updated_at}}</small></p>
      <hr>
    </div>
    @endforeach
@endsection
