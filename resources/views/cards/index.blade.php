@extends("layouts.app")

@section('content')

<h1>All To Do Items</h1>

@foreach ($cards as $card)

  <div>

    <h2>{{$card->title}}</h2>
    <p>{{$card->created_at}}</p>
    <p>{{$card->updated_at}}</p>

  </div>

@endforeach

@endsection
