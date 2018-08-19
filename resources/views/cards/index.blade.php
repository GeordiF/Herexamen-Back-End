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
    <hr>
    @endforeach
    <h4>Add a New To Do</h4>
      <form method="post" action="/cards">
        {{ csrf_field() }}                                                      <!-- the CSRF protection middleware can validate the request-->
        {!! Form::open(['action' =>'CardsController@store', 'method' => 'POST']) !!}
          <div class="form-group">
              {{Form::label('title', 'Title')}}
              {{Form::text('title', '', ['class' =>'form-control', 'placeholder' => 'Title'])}}
          </div>
          {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
      </form>
  </div>
@endsection
