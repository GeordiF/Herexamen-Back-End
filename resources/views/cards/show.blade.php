@extends("layouts.app")

@section('content')

<div class="container">
  <h1>{{$card->title}}</h1>
  <p>{{$card->created_at}}</p>
  <p>{{$card->updated_at}}</p>

<hr>

<ul class="list-group">
    <h4>Comments</h4>
  @foreach ($card->notes as $note)
    <li class="list-group-item">{{$note->body}}</li>
  @endforeach
</ul>

<hr>

  <h4>Add a New Comment</h4>
    <form>
      <div class="form-group">
        <textarea name="body" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary"> Add Comment</button>
      </div>
    </form>

</div>

@endsection
