@extends("layouts.app")

@section('content')

<div class="container">
  <h1>All To Do Items</h1>
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
    <h4>Add a New To Do</h4>
      <form method="post" action="/cards">
        {{ csrf_field() }}                                                      <!-- the CSRF protection middleware can validate the request-->
        {!! Form::open(['action' =>'CardsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
          {{Form::label('date', 'Due Date')}}
          {!!Form::date('date', \Carbon\Carbon::now()->format(DateTime::ATOM), ['class' => 'form-control'])!!}
        </div>
          <div class="form-group">
              {{Form::label('title', 'Title')}}
              {{Form::text('title', '', ['class' =>'form-control', 'placeholder' => 'Title'])}}
          </div>
          <div class="form-group">
              {{Form::label('body', 'Body')}}
              {{Form::text('body', '', ['class' =>'form-control', 'placeholder' => 'body'])}}

          {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
      </form>
  </div>
@endsection
