@extends("layouts.app")

@section('content')

<div class="container">
  <h1>{{$card->title}}</h1>
  <h4>{{$card->body}}</h4>
  <hr>
  <p><small>Created: {{$card->created_at}}</small></p>
  <p class="float-right">Due Date: {{$card->date}}</p>
  <p><small>Updated: {{$card->updated_at}}</small></p>

  <hr>

  <a href="/cards/{{$card->id}}/edit" class="btn btn-secondary">Edit</a>
  {!!Form::open(['action' => ['CardsController@destroy', $card->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}

<hr>

<ul class="list-group">
    <h4>Comments</h4>
  @foreach ($card->notes as $note)
    <a href="/notes/{{$note->id}}/edit"><li class="list-group-item">{{$note->body}}</li></a>
  @endforeach
</ul>

<hr>

  <h4>Add a New Comment</h4>
    <form method="post" action="/cards/{{$card->id}}/notes">
      {{ csrf_field() }}                                                        <!-- the CSRF protection middleware can validate the request-->
      <div class="form-group">
        <textarea name="body" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary"> Add Comment</button>
      </div>
    </form>

</div>

@endsection
