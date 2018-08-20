@extends('layouts.app')

@section('content')

    <h1>Edit Card</h1>
    {{ csrf_field() }}                                                      <!-- the CSRF protection middleware can validate the request-->
    {!! Form::open(['action' =>['CardsController@update', $card->id], 'method' => 'POST']) !!}

      <div class="form-group">
          {{Form::label('date', 'Due Date')}}
          {!!Form::date('date', \Carbon\Carbon::now()->format(DateTime::ATOM), ['class' => 'form-control'])!!}
      </div>
      <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', $card->title, ['class' =>'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
          {{Form::label('body', 'Description')}}
          {{Form::text('body', $card->body, ['class' =>'form-control', 'placeholder' => 'Body'])}}
      </div>
      <div class="form-group float-right">
          {{Form::label('isDone', 'Done' )}}
          {{Form::checkbox('isDone', 1, false)}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@stop
