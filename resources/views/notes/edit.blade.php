@extends('layouts.app')

@section('content')
  <h1>Edit Comment</h1>

  <form method="post" action="/notes/{{$note->id}}">
    {{ csrf_field() }}                                              <!-- the CSRF protection middleware can validate the request-->
    <input name="_method" type="hidden" value="patch">
    <div class="form-group">
      <textarea name="body" class="form-control">{{$note->body}}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary"> Update Comment</button>
    </div>
  </form>
@stop
