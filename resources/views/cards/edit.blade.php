@extends('layouts.app')

@section('content')

    <h1>Edit Card</h1>
    {{ csrf_field() }}                                                      <!-- the CSRF protection middleware can validate the request-->
    {!! Form::open(['action' =>['CardsController@update', $card->id], 'method' => 'POST']) !!}
      <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', $card->title, ['class' =>'form-control', 'placeholder' => 'Title'])}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@stop
